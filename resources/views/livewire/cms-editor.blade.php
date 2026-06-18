<div class="flex h-screen w-screen overflow-hidden bg-gray-50">
    
    <!-- SIDEBAR: Section List -->
    <div class="w-56 h-full flex flex-col bg-slate-900 text-white shrink-0">
        <!-- Logo -->
        <div class="p-4 border-b border-slate-700">
            <div class="flex items-center gap-2">
                <div class="w-8 h-8 rounded-lg bg-indigo-500 flex items-center justify-center font-bold text-sm shadow">C</div>
                <div>
                    <h1 class="text-sm font-bold tracking-tight">Portfolio CMS</h1>
                    <p class="text-[10px] text-slate-400">Visual Editor</p>
                </div>
            </div>
        </div>

        <!-- Section Items -->
        <div class="flex-1 overflow-y-auto py-2">
            @foreach($sections as $index => $section)
                <button wire:click="setTab({{ $index }})" class="w-full text-left px-4 py-2.5 text-sm flex items-center gap-2 transition-colors {{ $activeTab === $index ? 'bg-indigo-600 text-white font-semibold' : 'text-slate-300 hover:bg-slate-800' }}">
                    @if(!$section['is_visible'])<span class="opacity-40">⊘</span>@endif
                    <span class="truncate">{{ $section['name'] }}</span>
                </button>
            @endforeach
        </div>

        <!-- Add Section Button -->
        <div class="p-3 border-t border-slate-700 space-y-2">
            <button wire:click="addNewSection" class="w-full py-2 text-xs bg-slate-700 hover:bg-slate-600 text-slate-200 rounded-lg font-bold flex items-center justify-center gap-1 transition-colors">
                <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path></svg>
                Add Section
            </button>
            <form method="POST" action="{{ route('cms.logout') }}">
                @csrf
                <button type="submit" class="w-full py-1.5 text-[10px] text-slate-400 hover:text-red-400 rounded-lg font-medium flex items-center justify-center gap-1 transition-colors">
                    <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path></svg>
                    Logout
                </button>
            </form>
        </div>
    </div>

    <!-- MIDDLE PANEL: Form Editor -->
    <div class="w-[380px] h-full flex flex-col border-r border-gray-200 bg-white shadow-lg shrink-0">

        @if (session()->has('message'))
            <div class="mx-4 mt-3 p-2 text-xs text-green-700 bg-green-100 rounded-lg border border-green-200 flex items-center gap-1"
                 x-data="{ show: true }" x-show="show" x-init="setTimeout(() => show = false, 3000)">
                <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                {{ session('message') }}
            </div>
        @endif

        <!-- Scrollable Form -->
        <div class="flex-1 overflow-y-auto p-4 bg-gray-50/30">
            @if(count($sections) > 0 && isset($sections[$activeTab]))
                @php $current = $sections[$activeTab]; @endphp
                
                <div wire:key="form-area-{{ $activeTab }}">
                    <!-- Section Controls -->
                    <div class="mb-4 flex justify-between items-center bg-gray-100 p-2.5 rounded-lg border border-gray-200">
                        <div class="flex gap-1">
                            <button wire:click="moveUp({{ $activeTab }})" class="p-1 bg-white text-gray-600 rounded shadow-sm hover:bg-gray-50 disabled:opacity-50" {{ $activeTab == 0 ? 'disabled' : '' }}>
                                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7"></path></svg>
                            </button>
                            <button wire:click="moveDown({{ $activeTab }})" class="p-1 bg-white text-gray-600 rounded shadow-sm hover:bg-gray-50 disabled:opacity-50" {{ $activeTab == count($sections) - 1 ? 'disabled' : '' }}>
                                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                            </button>
                        </div>
                        <div class="flex items-center gap-2">
                            <label class="flex items-center gap-1.5 text-xs font-bold text-gray-700">
                                <input type="checkbox" wire:model="sections.{{ $activeTab }}.is_visible" class="rounded text-indigo-600 focus:ring-indigo-500 w-3.5 h-3.5">
                                Visible
                            </label>
                            <button wire:click="deleteSection({{ $activeTab }})" class="text-[10px] text-red-600 hover:text-red-800 font-bold px-1.5 py-0.5 bg-red-100 rounded">Delete</button>
                        </div>
                    </div>

                    <div class="mb-4">
                        <label class="block text-[10px] font-bold text-gray-500 uppercase tracking-wider mb-1">Section Name</label>
                        <input type="text" wire:model="sections.{{ $activeTab }}.name" class="w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 text-sm px-3 py-1.5 border">
                    </div>

                    <!-- DYNAMIC FIELDS -->
                    @if($current['type'] == 'hero')
                        <div class="space-y-4">
                            <div>
                                <label class="block text-xs font-bold text-gray-700 uppercase mb-1">Developer Name</label>
                                <input type="text" wire:model="sections.{{ $activeTab }}.content.name" class="w-full rounded-lg border-gray-300 text-sm px-3 py-2 border">
                            </div>
                            <div>
                                <label class="block text-xs font-bold text-gray-700 uppercase mb-1">Job Title</label>
                                <input type="text" wire:model="sections.{{ $activeTab }}.content.title" class="w-full rounded-lg border-gray-300 text-sm px-3 py-2 border">
                            </div>
                            <div>
                                <label class="block text-xs font-bold text-gray-700 uppercase mb-1">Short Bio</label>
                                <textarea wire:model="sections.{{ $activeTab }}.content.bio" rows="3" class="w-full rounded-lg border-gray-300 text-sm px-3 py-2 border"></textarea>
                            </div>
                            <div>
                                <label class="block text-xs font-bold text-gray-700 uppercase mb-1">Avatar Image</label>
                                @if(is_string($sections[$activeTab]['content']['avatar']))
                                    <img src="{{ $sections[$activeTab]['content']['avatar'] }}" class="w-14 h-14 rounded mb-2 object-cover border border-gray-200">
                                @endif
                                <input type="file" wire:model="sections.{{ $activeTab }}.content.avatar" class="w-full text-sm text-gray-500 file:mr-3 file:py-1.5 file:px-3 file:rounded-md file:border-0 file:text-xs file:font-semibold file:bg-indigo-50 file:text-indigo-700 hover:file:bg-indigo-100">
                            </div>
                        </div>
                    @elseif($current['type'] == 'about')
                        <div class="space-y-4">
                            <div>
                                <label class="block text-xs font-bold text-gray-700 uppercase mb-1">Paragraph 1</label>
                                <textarea wire:model="sections.{{ $activeTab }}.content.description1" rows="4" class="w-full rounded-lg border-gray-300 text-sm px-3 py-2 border"></textarea>
                            </div>
                            <div>
                                <label class="block text-xs font-bold text-gray-700 uppercase mb-1">Paragraph 2</label>
                                <textarea wire:model="sections.{{ $activeTab }}.content.description2" rows="4" class="w-full rounded-lg border-gray-300 text-sm px-3 py-2 border"></textarea>
                            </div>
                            <div>
                                <label class="block text-xs font-bold text-gray-700 uppercase mb-1">About Avatar</label>
                                @if(isset($sections[$activeTab]['content']['avatar']) && is_string($sections[$activeTab]['content']['avatar']))
                                    <img src="{{ $sections[$activeTab]['content']['avatar'] }}" class="w-14 h-14 rounded mb-2 object-cover border border-gray-200">
                                @endif
                                <input type="file" wire:model="sections.{{ $activeTab }}.content.avatar" class="w-full text-sm text-gray-500 file:mr-3 file:py-1.5 file:px-3 file:rounded-md file:border-0 file:text-xs file:font-semibold file:bg-indigo-50 file:text-indigo-700 hover:file:bg-indigo-100">
                            </div>
                            <div>
                                <label class="block text-xs font-bold text-gray-700 uppercase mb-1">Resume (PDF)</label>
                                @if(isset($sections[$activeTab]['content']['resume']) && is_string($sections[$activeTab]['content']['resume']))
                                    <a href="{{ $sections[$activeTab]['content']['resume'] }}" target="_blank" class="text-xs text-indigo-600 mb-1 block">View Current</a>
                                @endif
                                <input type="file" wire:model="sections.{{ $activeTab }}.content.resume" accept=".pdf" class="w-full text-sm text-gray-500 file:mr-3 file:py-1.5 file:px-3 file:rounded-md file:border-0 file:text-xs file:font-semibold file:bg-indigo-50 file:text-indigo-700 hover:file:bg-indigo-100">
                            </div>
                            <div>
                                <label class="block text-xs font-bold text-gray-700 uppercase mb-1">Hashtags (Comma Separated)</label>
                                <input type="text" wire:model="sections.{{ $activeTab }}.content.hashtags" placeholder="Laravel, Fullstack, UI/UX" class="w-full rounded-lg border-gray-300 text-sm px-3 py-2 border">
                                <span class="text-[10px] text-gray-500 mt-0.5 block">e.g. Laravel, React, PHP</span>
                            </div>
                        </div>
                    @elseif($current['type'] == 'timeline')
                        <div class="space-y-5">
                            @if(isset($sections[$activeTab]['content']['items']))
                                @foreach($sections[$activeTab]['content']['items'] as $itemIndex => $item)
                                <div class="p-3 rounded-xl border border-gray-200 bg-white shadow-sm relative">
                                    <button wire:click="removeArrayItem({{ $activeTab }}, 'items', {{ $itemIndex }})" class="absolute top-2 right-2 text-red-500 hover:text-red-700 p-1 bg-red-50 rounded-md" title="Delete">
                                        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path></svg>
                                    </button>
                                    <div class="space-y-3">
                                        <div><label class="block text-[10px] font-bold text-gray-500 uppercase">Period</label><input type="text" wire:model="sections.{{ $activeTab }}.content.items.{{ $itemIndex }}.period" class="w-full rounded-md border-gray-300 px-2 py-1 border text-sm"></div>
                                        <div><label class="block text-[10px] font-bold text-gray-500 uppercase">Title / Role</label><input type="text" wire:model="sections.{{ $activeTab }}.content.items.{{ $itemIndex }}.title" class="w-full rounded-md border-gray-300 px-2 py-1 border text-sm"></div>
                                        <div><label class="block text-[10px] font-bold text-gray-500 uppercase">Company</label><input type="text" wire:model="sections.{{ $activeTab }}.content.items.{{ $itemIndex }}.company" class="w-full rounded-md border-gray-300 px-2 py-1 border text-sm"></div>
                                        <div><label class="block text-[10px] font-bold text-gray-500 uppercase">Description</label><textarea wire:model="sections.{{ $activeTab }}.content.items.{{ $itemIndex }}.description" rows="2" class="w-full rounded-md border-gray-300 px-2 py-1 border text-sm"></textarea></div>
                                    </div>
                                </div>
                                @endforeach
                            @endif
                            <button wire:click="addArrayItem({{ $activeTab }}, 'items')" class="w-full py-2.5 border-2 border-dashed border-gray-300 rounded-xl text-gray-600 font-bold hover:border-indigo-500 hover:text-indigo-600 transition-colors flex items-center justify-center gap-1 text-sm">Add Timeline Item</button>
                        </div>
                    @elseif($current['type'] == 'projects')
                        <div class="space-y-5">
                            @if(isset($sections[$activeTab]['content']['items']))
                                @foreach($sections[$activeTab]['content']['items'] as $itemIndex => $item)
                                <div class="p-3 rounded-xl border border-gray-200 bg-white shadow-sm relative">
                                    <button wire:click="removeArrayItem({{ $activeTab }}, 'items', {{ $itemIndex }})" class="absolute top-2 right-2 text-red-500 hover:text-red-700 p-1 bg-red-50 rounded-md" title="Delete">
                                        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path></svg>
                                    </button>
                                    <div class="space-y-3">
                                        <div><label class="block text-[10px] font-bold text-gray-500 uppercase">Project Title</label><input type="text" wire:model="sections.{{ $activeTab }}.content.items.{{ $itemIndex }}.title" class="w-full rounded-md border-gray-300 px-2 py-1 border text-sm"></div>
                                        <!-- Tags with Pills -->
                                        <div>
                                            <label class="block text-[10px] font-bold text-gray-500 uppercase mb-1">Tags</label>
                                            <div class="flex flex-wrap gap-1.5 mb-2">
                                                @foreach($sections[$activeTab]['content']['items'][$itemIndex]['tags'] as $tagIndex => $tag)
                                                    <span class="inline-flex items-center gap-1 px-2 py-0.5 rounded-md bg-indigo-50 text-indigo-700 text-[10px] font-bold border border-indigo-100">
                                                        {{ $tag }}
                                                        <button wire:click="removeTag({{ $activeTab }}, {{ $itemIndex }}, {{ $tagIndex }})" class="hover:text-red-500 transition-colors">
                                                            <svg class="w-2.5 h-2.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
                                                        </button>
                                                    </span>
                                                @endforeach
                                            </div>
                                            <div class="flex gap-1" x-data="{ newTag: '' }">
                                                <input type="text" 
                                                       x-model="newTag" 
                                                       @keydown.enter.prevent="$wire.addTag({{ $activeTab }}, {{ $itemIndex }}, newTag); newTag = ''"
                                                       placeholder="Add tag..." 
                                                       class="flex-1 rounded-md border-gray-300 px-2 py-1 border text-[11px] focus:ring-1 focus:ring-indigo-500 focus:border-indigo-500">
                                                <button @click="$wire.addTag({{ $activeTab }}, {{ $itemIndex }}, newTag); newTag = ''" 
                                                        class="p-1.5 bg-indigo-600 text-white rounded-md hover:bg-indigo-700 transition-colors flex items-center justify-center">
                                                    <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path></svg>
                                                </button>
                                            </div>
                                        </div>
                                        <div><label class="block text-[10px] font-bold text-gray-500 uppercase">Description</label><textarea wire:model="sections.{{ $activeTab }}.content.items.{{ $itemIndex }}.description" rows="2" class="w-full rounded-md border-gray-300 px-2 py-1 border text-sm"></textarea></div>
                                        <div>
                                            <label class="block text-[10px] font-bold text-gray-500 uppercase">Image</label>
                                            @if(isset($sections[$activeTab]['content']['items'][$itemIndex]['image']) && is_string($sections[$activeTab]['content']['items'][$itemIndex]['image']))
                                                <img src="{{ $sections[$activeTab]['content']['items'][$itemIndex]['image'] }}" class="w-10 h-10 rounded mb-1 object-cover border border-gray-200">
                                            @endif
                                            <input type="file" wire:model="sections.{{ $activeTab }}.content.items.{{ $itemIndex }}.image" class="w-full text-xs text-gray-500 file:mr-2 file:py-1 file:px-2 file:rounded file:border-0 file:text-xs file:font-semibold file:bg-indigo-50 file:text-indigo-700">
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            @endif
                            <button wire:click="addArrayItem({{ $activeTab }}, 'items')" class="w-full py-2.5 border-2 border-dashed border-gray-300 rounded-xl text-gray-600 font-bold hover:border-indigo-500 hover:text-indigo-600 transition-colors flex items-center justify-center gap-1 text-sm">Add Project</button>
                        </div>
                    @elseif($current['type'] == 'achievements')
                        <div class="space-y-5">
                            @if(isset($sections[$activeTab]['content']['items']))
                                @foreach($sections[$activeTab]['content']['items'] as $itemIndex => $item)
                                <div class="p-3 rounded-xl border border-gray-200 bg-white shadow-sm relative">
                                    <button wire:click="removeArrayItem({{ $activeTab }}, 'items', {{ $itemIndex }})" class="absolute top-2 right-2 text-red-500 hover:text-red-700 p-1 bg-red-50 rounded-md" title="Delete">
                                        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path></svg>
                                    </button>
                                    <div class="space-y-3">
                                        <div><label class="block text-[10px] font-bold text-gray-500 uppercase">Title</label><input type="text" wire:model="sections.{{ $activeTab }}.content.items.{{ $itemIndex }}.title" class="w-full rounded-md border-gray-300 px-2 py-1 border text-sm"></div>
                                        <div><label class="block text-[10px] font-bold text-gray-500 uppercase">Description</label><textarea wire:model="sections.{{ $activeTab }}.content.items.{{ $itemIndex }}.description" rows="2" class="w-full rounded-md border-gray-300 px-2 py-1 border text-sm"></textarea></div>
                                        <div class="grid grid-cols-2 gap-2">
                                            <div><label class="block text-[10px] font-bold text-gray-500 uppercase">ISBN</label><input type="text" wire:model="sections.{{ $activeTab }}.content.items.{{ $itemIndex }}.isbn" class="w-full rounded-md border-gray-300 px-2 py-1 border text-sm"></div>
                                            <div><label class="block text-[10px] font-bold text-gray-500 uppercase">Year</label><input type="number" wire:model="sections.{{ $activeTab }}.content.items.{{ $itemIndex }}.year" placeholder="2025" class="w-full rounded-md border-gray-300 px-2 py-1 border text-sm"></div>
                                        </div>
                                        <div>
                                            <label class="block text-[10px] font-bold text-gray-500 uppercase">Cover Image</label>
                                            @if(isset($sections[$activeTab]['content']['items'][$itemIndex]['image_url']) && is_string($sections[$activeTab]['content']['items'][$itemIndex]['image_url']))
                                                <img src="{{ $sections[$activeTab]['content']['items'][$itemIndex]['image_url'] }}" class="w-12 h-16 rounded mb-1 object-cover border border-gray-200">
                                            @endif
                                            <input type="file" wire:model="sections.{{ $activeTab }}.content.items.{{ $itemIndex }}.image_url" accept="image/*" class="w-full text-xs text-gray-500 file:mr-2 file:py-1 file:px-2 file:rounded file:border-0 file:text-xs file:font-semibold file:bg-indigo-50 file:text-indigo-700">
                                        </div>
                                        <div>
                                            <label class="block text-[10px] font-bold text-gray-500 uppercase">PDF File</label>
                                            @if(isset($sections[$activeTab]['content']['items'][$itemIndex]['file_url']) && is_string($sections[$activeTab]['content']['items'][$itemIndex]['file_url']))
                                                <a href="{{ $sections[$activeTab]['content']['items'][$itemIndex]['file_url'] }}" target="_blank" class="text-[10px] text-indigo-600 mb-1 block">View PDF</a>
                                            @endif
                                            <input type="file" wire:model="sections.{{ $activeTab }}.content.items.{{ $itemIndex }}.file_url" accept=".pdf" class="w-full text-xs text-gray-500 file:mr-2 file:py-1 file:px-2 file:rounded file:border-0 file:text-xs file:font-semibold file:bg-indigo-50 file:text-indigo-700">
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            @endif
                            <button wire:click="addArrayItem({{ $activeTab }}, 'items')" class="w-full py-2.5 border-2 border-dashed border-gray-300 rounded-xl text-gray-600 font-bold hover:border-indigo-500 hover:text-indigo-600 transition-colors flex items-center justify-center gap-1 text-sm">Add Achievement</button>
                        </div>
                    @elseif($current['type'] == 'contact')
                        <div class="space-y-4">
                            <div><label class="block text-xs font-bold text-gray-700 uppercase mb-1">Heading</label><input type="text" wire:model="sections.{{ $activeTab }}.content.heading" class="w-full rounded-lg border-gray-300 px-3 py-2 border text-sm"></div>
                            <div><label class="block text-xs font-bold text-gray-700 uppercase mb-1">Description</label><textarea wire:model="sections.{{ $activeTab }}.content.description" rows="3" class="w-full rounded-lg border-gray-300 px-3 py-2 border text-sm"></textarea></div>
                            <div><label class="block text-xs font-bold text-gray-700 uppercase mb-1">Email</label><input type="text" wire:model="sections.{{ $activeTab }}.content.email" class="w-full rounded-lg border-gray-300 px-3 py-2 border text-sm"></div>
                        </div>
                    @elseif($current['type'] == 'custom')
                        <div class="space-y-4">
                            <div>
                                <label class="block text-xs font-bold text-gray-700 uppercase mb-1">Icon (SVG HTML)</label>
                                <textarea wire:model="sections.{{ $activeTab }}.content.icon_svg" rows="2" class="w-full rounded-lg border-gray-300 text-xs px-3 py-2 border font-mono text-gray-500" placeholder='<svg ...></svg>'></textarea>
                                <p class="text-[10px] text-gray-500 mt-0.5">From <a href="https://lucide.dev" target="_blank" class="text-indigo-600 underline">lucide.dev</a>. Leave empty = Star icon.</p>
                            </div>
                            <div><label class="block text-xs font-bold text-gray-700 uppercase mb-1">Heading</label><input type="text" wire:model="sections.{{ $activeTab }}.content.heading" class="w-full rounded-lg border-gray-300 text-sm px-3 py-2 border"></div>
                            <div><label class="block text-xs font-bold text-gray-700 uppercase mb-1">Content</label><textarea wire:model="sections.{{ $activeTab }}.content.description" rows="6" class="w-full rounded-lg border-gray-300 text-sm px-3 py-2 border"></textarea></div>
                        </div>
                    @else
                        <div class="text-sm text-gray-500 italic p-4 bg-gray-100 rounded-lg">
                            This section type ({{ $current['type'] }}) uses complex data. Edit in DB or expand CMS form.
                        </div>
                    @endif
                </div>
            @endif
        </div>

        <!-- Floating Save Button -->
        <div class="p-3 border-t border-gray-200 bg-white">
            <button wire:click="saveData" class="w-full py-2.5 bg-indigo-600 hover:bg-indigo-700 text-white font-bold rounded-lg shadow-lg transition-colors flex items-center justify-center gap-2 text-sm">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7H5a2 2 0 00-2 2v9a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-3m-1 4l-3 3m0 0l-3-3m3 3V4"></path></svg>
                Save Changes
            </button>
        </div>
    </div>

    <!-- RIGHT PANEL: LIVE PREVIEW -->
    <div class="flex-1 h-full bg-gray-900 relative">
        <div class="absolute inset-0 p-6 flex flex-col">
            <div class="flex items-center justify-between px-4 py-2.5 bg-gray-800 rounded-t-xl border border-gray-700 border-b-0">
                <div class="flex items-center gap-2">
                    <div class="w-3 h-3 rounded-full bg-red-500"></div>
                    <div class="w-3 h-3 rounded-full bg-yellow-500"></div>
                    <div class="w-3 h-3 rounded-full bg-green-500"></div>
                </div>
                <div class="px-3 py-1 bg-gray-900 rounded text-xs text-gray-400 font-mono">Live Preview</div>
                <button onclick="document.getElementById('preview-frame').contentWindow.location.reload()" class="text-xs text-gray-400 hover:text-white flex items-center gap-1">
                    <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"></path></svg> Refresh
                </button>
            </div>
            <div wire:ignore class="flex-1 rounded-b-xl border border-gray-700 overflow-hidden bg-zinc-950 relative" id="preview-container">
                <iframe id="preview-frame" src="{{ route('portfolio.preview') }}" class="border-0 origin-top-left absolute top-0 left-0" style="width: 1440px;"></iframe>
            </div>
        </div>
    </div>

    <!-- SCRIPTS -->
    <script>
        function resizeIframe() {
            const container = document.getElementById('preview-container');
            const iframe = document.getElementById('preview-frame');
            if (container && iframe) {
                const targetWidth = 1440;
                const scale = container.clientWidth / targetWidth;
                iframe.style.transform = `scale(${scale})`;
                iframe.style.height = (container.clientHeight / scale) + 'px';
            }
        }
        window.addEventListener('resize', resizeIframe);
        document.addEventListener('DOMContentLoaded', () => setTimeout(resizeIframe, 100));
        document.addEventListener('livewire:initialized', () => {
            Livewire.on('data-saved', (event) => {
                const iframe = document.getElementById('preview-frame');
                if (iframe && iframe.contentWindow) {
                    iframe.contentWindow.location.reload();
                }
            });
        });
    </script>
</div>
