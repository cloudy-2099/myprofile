<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class CmsEditor extends Component
{
    use WithFileUploads;

    public $sections = [];
    public $activeTab = 0;
    
    public function mount()
    {
        $this->loadData();
    }

    public function loadData()
    {
        $dbSections = DB::table('portfolio_sections')
                        ->whereNull('deleted_at')
                        ->orderBy('sort_order')
                        ->get();
        $this->sections = [];
        foreach ($dbSections as $section) {
            $content = json_decode($section->content, true) ?? [];
            
            // Ensure project tags are arrays
            if ($section->type == 'projects' && isset($content['items'])) {
                foreach ($content['items'] as &$item) {
                    if (isset($item['tags']) && is_string($item['tags'])) {
                        $item['tags'] = array_filter(array_map('trim', explode(',', $item['tags'])));
                    } elseif (!isset($item['tags'])) {
                        $item['tags'] = [];
                    }
                }
            }

            $this->sections[] = [
                'id' => $section->id,
                'key' => $section->key,
                'name' => $section->name,
                'type' => $section->type,
                'content' => $content,
                'is_visible' => (bool) $section->is_visible,
            ];
        }
    }

    private function processUploads(&$data)
    {
        if (is_array($data)) {
            foreach ($data as $key => &$value) {
                // If it's a Livewire temporary file upload object
                if (is_object($value) && method_exists($value, 'store')) {
                    // store inside storage/app/public/portfolio_uploads
                    $path = $value->store('portfolio_uploads', 'public');
                    $value = Storage::url($path); // /storage/portfolio_uploads/...
                } elseif (is_array($value)) {
                    $this->processUploads($value);
                }
            }
        }
    }

    public function saveData()
    {
        // 1. Process all uploads recursively
        $this->processUploads($this->sections);

        // Get all active IDs that still exist in the editor
        $activeIds = collect($this->sections)->pluck('id')->filter()->toArray();

        // Soft delete records that are no longer in the editor array
        DB::table('portfolio_sections')
            ->whereNotIn('id', $activeIds)
            ->whereNull('deleted_at')
            ->update(['deleted_at' => now()]);
        
        foreach ($this->sections as $index => &$section) {
            $data = [
                'key' => $section['key'],
                'name' => $section['name'],
                'type' => $section['type'],
                'sort_order' => $index + 1,
                'content' => json_encode($section['content']),
                'is_visible' => $section['is_visible'],
                'deleted_at' => null // Restore if it was somehow deleted
            ];

            if (!empty($section['id'])) {
                DB::table('portfolio_sections')->where('id', $section['id'])->update($data);
            } else {
                $section['id'] = DB::table('portfolio_sections')->insertGetId($data);
            }
        }
        
        // Format data to dispatch to AlpineJS for preview
        $previewData = [];
        foreach ($this->sections as $s) {
            if ($s['key']) {
                $previewData[$s['key']] = $s['content'];
            }
        }
        $previewData['all_sections'] = $this->sections;
        
        $this->dispatch('data-saved', data: $previewData);
        session()->flash('message', 'All sections successfully saved!');
    }
    
    public function addArrayItem($sectionIndex, $field)
    {
        $type = $this->sections[$sectionIndex]['type'];
        $newItem = ['id' => uniqid()];
        
        if ($type == 'projects') {
            $newItem = array_merge($newItem, ['title' => 'New Project', 'tags' => [], 'description' => '', 'image' => '', 'link' => '#']);
        } elseif ($type == 'timeline') {
            $newItem = array_merge($newItem, ['period' => '2026', 'title' => 'New Role', 'company' => 'Company', 'description' => '']);
        } elseif ($type == 'achievements') {
            $newItem = array_merge($newItem, ['type' => 'book', 'title' => 'New Achievement', 'description' => '', 'isbn' => '', 'year' => '2025', 'file_url' => '', 'image_url' => '']);
        }
        
        if (!isset($this->sections[$sectionIndex]['content'][$field])) {
            $this->sections[$sectionIndex]['content'][$field] = [];
        }
        
        $this->sections[$sectionIndex]['content'][$field][] = $newItem;
    }

    public function removeArrayItem($sectionIndex, $field, $itemIndex)
    {
        unset($this->sections[$sectionIndex]['content'][$field][$itemIndex]);
        $this->sections[$sectionIndex]['content'][$field] = array_values($this->sections[$sectionIndex]['content'][$field]);
    }

    public function addTag($sectionIndex, $projectIndex, $tagName)
    {
        $tagName = trim($tagName);
        if (empty($tagName)) return;

        if (!isset($this->sections[$sectionIndex]['content']['items'][$projectIndex]['tags'])) {
            $this->sections[$sectionIndex]['content']['items'][$projectIndex]['tags'] = [];
        }

        if (!in_array($tagName, $this->sections[$sectionIndex]['content']['items'][$projectIndex]['tags'])) {
            $this->sections[$sectionIndex]['content']['items'][$projectIndex]['tags'][] = $tagName;
        }
    }

    public function removeTag($sectionIndex, $projectIndex, $tagIndex)
    {
        if (isset($this->sections[$sectionIndex]['content']['items'][$projectIndex]['tags'][$tagIndex])) {
            unset($this->sections[$sectionIndex]['content']['items'][$projectIndex]['tags'][$tagIndex]);
            $this->sections[$sectionIndex]['content']['items'][$projectIndex]['tags'] = array_values($this->sections[$sectionIndex]['content']['items'][$projectIndex]['tags']);
        }
    }

    public function addNewSection()
    {
        $this->sections[] = [
            'id' => null,
            'key' => 'custom_' . uniqid(),
            'name' => 'New Custom Section',
            'type' => 'custom',
            'content' => [
                'heading' => 'New Section Title',
                'description' => 'Write your content here.'
            ],
            'is_visible' => true,
        ];
        $this->activeTab = count($this->sections) - 1;
    }

    public function deleteSection($index)
    {
        unset($this->sections[$index]);
        $this->sections = array_values($this->sections);
        $this->activeTab = max(0, $index - 1);
    }

    public function setTab($index)
    {
        $this->activeTab = $index;
    }

    public function moveUp($index)
    {
        if ($index > 0) {
            $temp = $this->sections[$index];
            $this->sections[$index] = $this->sections[$index - 1];
            $this->sections[$index - 1] = $temp;
            $this->activeTab = $index - 1;
        }
    }

    public function moveDown($index)
    {
        if ($index < count($this->sections) - 1) {
            $temp = $this->sections[$index];
            $this->sections[$index] = $this->sections[$index + 1];
            $this->sections[$index + 1] = $temp;
            $this->activeTab = $index + 1;
        }
    }

    public function render()
    {
        return view('livewire.cms-editor')->layout('components.layouts.app');
    }
}
