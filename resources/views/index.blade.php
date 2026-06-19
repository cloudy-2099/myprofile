@php
    $sectionsData = [
        [
            'key' => 'hero',
            'name' => 'Hero Section',
            'type' => 'hero',
            'sort_order' => 1,
            'content' => json_encode([
                'name' => 'Rizky Wahyudi',
                'title' => 'Web Developer | UI/UX',
                'bio' => 'Fullstack Developer & IoT Engineer. Crafting high-performance web systems and smart solutions with precision and purpose. Dedicated to transforming complex ideas into efficient, reliable, and user-centric digital products.',
                'avatar' => '/profile_photos/profile.jpeg'
            ]),
            'is_visible' => true,
        ],
        [
            'key' => 'about',
            'name' => 'About Me',
            'type' => 'about',
            'sort_order' => 2,
            'content' => json_encode([
                'description1' => "I am a fresh Informatics Engineering graduate from Bina Insani University specializing in Web Development and UI/UX. I have experience building various systems including security applications and healthcare features, where I always prioritize usability through detailed Figma prototyping.",
                'description2' => "Along with my certifications from Kominfo and Kelas IoT, my background as an IoT book co-author and journal contributor has given me a strong technical foundation. I'm a fast learner who's ready to grow and create a real impact through reliable digital products.",
                'avatar' => '/profile_photos/profile1.png',
                'resume' => 'assets/resume/resume_rizkywahyudi.pdf',
                'hashtags' => 'Laravel, Fullstack, UI/UX, IoT'
            ]),
            'is_visible' => true,
        ],
        [
            'key' => 'timeline',
            'name' => 'Journey & Timeline',
            'type' => 'timeline',
            'sort_order' => 3,
            'content' => json_encode([
                'items' => [
                    [
                        'id' => '6a32a34e3bf62',
                        'period' => 'Nov 2025 - May 2026',
                        'title' => 'IT Programmer',
                        'company' => 'PT. Duta Graha Afiah',
                        'description' => 'Developing efficient, secure, and user friendly web apps with clean code and innovative solutions.'
                    ],
                    [
                        'id' => '6a32a34e3bf66',
                        'period' => 'Jan 2024 - June 2024',
                        'title' => 'UI/UX Designer',
                        'company' => 'PT. Inovasi Kualiva Abhipraya',
                        'description' => 'Crafting intuitive and user friendly designs that enhance the digital experience.'
                    ],
                    [
                        'id' => '6a32a34e3bf67',
                        'period' => '2021 - 2025',
                        'title' => 'Bachelor of Informatics',
                        'company' => 'Bina Insani University',
                        'description' => 'Graduated with Cumlaude honors, specialized in software engineering and web technologies.'
                    ]
                ]
            ]),
            'is_visible' => true,
        ],
        [
            'key' => 'projects',
            'name' => 'Projects',
            'type' => 'projects',
            'sort_order' => 4,
            'content' => json_encode([
                'items' => [
                    [
                        'id' => '6a32a34e3bf6b',
                        'title' => 'App Security',
                        'tags' => 'LARAVEL, Livewire, Alpine.js, Javascript',
                        'description' => 'Repositori ini berisi sistem informasi manajemen keamanan internal RS UMMI yang dirancang untuk mengotomatisasi pencatatan patroli checkpoint, pelaporan kejadian, absensi berbasis QR Code dinamis dengan pembatasan IP jaringan, serta sistem peringatan darurat (Panic Alert) massal yang terintegrasi dengan WhatsApp Gateway.',
                        'image' => '/portfolio_uploads/app-security.png',
                        'link' => '#'
                    ],
                    [
                        'id' => '6a32a34e3bf6c',
                        'title' => 'Tabassam Ummi',
                        'tags' => 'Laravel, Javascript, Livewire, Alpine.js',
                        'description' => 'Sistem Tabassam dikembangkan sebagai platform perpustakaan mandiri terintegrasi yang ditujukan bagi staf internal rumah sakit. Aplikasi ini memadukan kemudahan akses Single Sign-On eksternal dengan sistem pencatatan peminjaman fisik berbasis QR Code secara reaktif tanpa reload halaman.',
                        'image' => '/portfolio_uploads/tabassam-ummi.png',
                        'link' => '#'
                    ],
                    [
                        'id' => '6a32a34e3bf6d',
                        'title' => 'Ummi Learning Center',
                        'tags' => 'Laravel, Livewire, Javascript',
                        'description' => 'Aplikasi ULC (UMMI Learning Center) adalah portal sistem informasi berbasis web yang dirancang khusus untuk mengelola program pelatihan, direktori fasilitator/spesialis, penjadwalan batch, serta galeri fasilitas secara dinamis.',
                        'image' => '/portfolio_uploads/ummi-learning-center.png',
                        'link' => '#'
                    ],
                    [
                        'id' => '6a32a619e8c74',
                        'title' => 'E-Catalog RS UMMI',
                        'tags' => 'Livewire, Laravel, Javascript, Alpine.js',
                        'description' => 'Dokumen ini ditulis sebagai panduan teknis bagi developer yang akan melanjutkan atau memelihara sistem E-Catalog Kamar RS UMMI. Sistem ini dirancang untuk menampilkan katalog kamar rawat inap/jalan secara interaktif kepada publik, lengkap dengan panel administrasi untuk manajemen data kamar, fasilitas, benefit, serta media (foto dan video).',
                        'image' => '/portfolio_uploads/ecatalog-rsummi.png',
                        'link' => '#'
                    ],
                    [
                        'id' => '6a32a6e5c8790',
                        'title' => 'Ticketing RS UMMI',
                        'tags' => 'Alpine.js, Laravel, Javascript, Livewire',
                        'description' => 'Sistem Ticketing Complain ini dikembangkan untuk mencatat, mengklasifikasikan, memantau, dan menyelesaikan setiap keluhan atau permintaan bantuan dari unit-unit internal maupun dari pihak luar (pasien/pendamping pasien).',
                        'image' => '/portfolio_uploads/ticketing-rsummi2.png',
                        'link' => '#'
                    ],
                    [
                        'id' => '6a32a7639c246',
                        'title' => 'Marketing Visit',
                        'tags' => 'Alpine.js, Laravel, Javascript, Livewire',
                        'description' => 'Sistem aplikasi mandiri berbasis Laravel dan Livewire yang dikembangkan untuk memfasilitasi pelaporan, pemantauan, dan rekapitulasi data kunjungan instansi/klien oleh tim Marketing RS UMMI.',
                        'image' => '/portfolio_uploads/marketing-visit.png',
                        'link' => '#'
                    ],
                    [
                        'id' => '6a32a834e6873',
                        'title' => 'Cleaning Service',
                        'tags' => 'Livewire, Javascript, Alpine.js, Laravel',
                        'description' => 'Sistem ini merupakan aplikasi berbasis web responsif yang dirancang untuk mempercepat pencatatan dan audit kebersihan area secara real-time.',
                        'image' => '/portfolio_uploads/cleaning-service.png',
                        'link' => '#'
                    ],
                    [
                        'id' => '6a32ab301953e',
                        'title' => 'Rekonsiliasi Obat',
                        'tags' => 'CodeIgniter 3, Javascript',
                        'description' => 'aplikasi ini berfungsi sebagai alat rekonsiliasi obat yang memastikan setiap obat yang diterima, dipakai, dan dikembalikan tercatat secara transparan dan akuntabel di lingkungan rawat inap rumah sakit.',
                        'image' => '/portfolio_uploads/rekonsiliasi-obat.png',
                        'link' => '#'
                    ],
                    [
                        'id' => '6a32ab932167b',
                        'title' => 'Partograf',
                        'tags' => 'Codeigniter3, Ajax, Javascript',
                        'description' => 'Aplikasi ini berfungsi sebagai pengganti lembar partograf manual (kertas) menjadi format digital berbasis web sesuai dengan format yang ada',
                        'image' => '/portfolio_uploads/partograf.png',
                        'link' => '#'
                    ]
                ]
            ]),
            'is_visible' => true,
        ],
        [
            'key' => 'achievements',
            'name' => 'Achievements',
            'type' => 'achievements',
            'sort_order' => 5,
            'content' => json_encode([
                'items' => [
                    [
                        'id' => '6a32a34e3bf70',
                        'type' => 'book',
                        'title' => 'Internet of Things; Membuat Proyek dengan Modul ESP32 graha ilmu',
                        'description' => 'This book presents ESP32 implementation examples for building smart parking monitoring systems. Topics include ESP32 technical data, hardware and software design (coding), and user interface development. Designed for beginners, it provides a comprehensive guide to building IoT systems from scratch with concise yet detailed explanations.',
                        'isbn' => '978-634-7198-37-2',
                        'year' => '2025',
                        'file_url' => '/portfolio_uploads/achievement-book.pdf',
                        'image_url' => '/assets/pencapaian/buku.jpg'
                    ],
                    [
                        'id' => '6a32a34e3bf71',
                        'type' => 'journal',
                        'title' => 'PERANCANGAN PROTOTYPE SISTEM PEMANTAUAN SLOT PARKIR CERDAS DENGAN NOTIFIKASI REAL-TIME BERBASIS INTERNET OF THINGS',
                        'description' => 'This research involved the design and development of an intelligent parking slot monitoring prototype featuring real-time IoT notifications. Built to address limited parking capacity and lack of occupancy data, the system integrates ESP32, ultrasonic sensors, RFID MFRC-522, and MQTT protocols. The implementation demonstrates real-time data streaming to a web dashboard, automated access control, and database logging, providing a robust solution for modern parking management.',
                        'isbn' => '',
                        'doi_url' => 'https://doi.org/10.51401/jinteks.v7i4.6452',
                        'year' => '2025',
                        'file_url' => '/portfolio_uploads/achievement-journal.pdf',
                        'image_url' => '/portfolio_uploads/achievement-journal.png'
                    ]
                ]
            ]),
            'is_visible' => true,
        ],
        [
            'key' => 'stack',
            'name' => 'Tech Stack',
            'type' => 'stack',
            'sort_order' => 6,
            'content' => json_encode([
                'frontend' => [
                    ['name' => 'Laravel', 'icon' => 'https://raw.githubusercontent.com/devicons/devicon/master/icons/laravel/laravel-original.svg'],
                    ['name' => 'JavaScript', 'icon' => 'https://raw.githubusercontent.com/devicons/devicon/master/icons/javascript/javascript-original.svg'],
                    ['name' => 'Tailwind', 'icon' => 'https://raw.githubusercontent.com/devicons/devicon/master/icons/tailwindcss/tailwindcss-original.svg'],
                    ['name' => 'Bootstrap', 'icon' => 'https://raw.githubusercontent.com/devicons/devicon/master/icons/bootstrap/bootstrap-original.svg'],
                ],
                'backend' => [
                    ['name' => 'PHP', 'icon' => 'https://raw.githubusercontent.com/devicons/devicon/master/icons/php/php-original.svg'],
                    ['name' => 'CI3', 'icon' => 'https://raw.githubusercontent.com/devicons/devicon/master/icons/codeigniter/codeigniter-plain.svg'],
                    ['name' => 'MySQL', 'icon' => 'https://raw.githubusercontent.com/devicons/devicon/master/icons/mysql/mysql-original.svg'],
                    ['name' => 'PostgreSQL', 'icon' => 'https://raw.githubusercontent.com/devicons/devicon/master/icons/postgresql/postgresql-original.svg'],
                    ['name' => 'Arduino', 'icon' => 'https://raw.githubusercontent.com/devicons/devicon/master/icons/arduino/arduino-original.svg'],
                ]
            ]),
            'is_visible' => true,
        ],
        [
            'key' => 'contact',
            'name' => 'Contact',
            'type' => 'contact',
            'sort_order' => 7,
            'content' => json_encode([
                'heading' => 'Have a project in mind? Let\'s build it together.',
                'description' => 'I\'m currently available for freelance work and full-time opportunities. If you have an idea you want to bring to life, let\'s chat.',
                'email' => 'wahyudi.rizky2099@gmail.com',
                'github' => 'https://github.com/cloudy-2099',
                'linkedin' => 'https://www.linkedin.com/in/rizky-wahyudi-790620296/'
            ]),
            'is_visible' => true,
        ],
    ];

    // Convert to collection of objects to match previous structure
    $sections = collect($sectionsData)->map(function ($item) {
        return (object) $item;
    });

    $data = [];
    foreach ($sections as $section) {
        $data[$section->key] = json_decode($section->content, true);
    }
@endphp
<!DOCTYPE html>

<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio | Web Developer</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Plus Jakarta Sans', 'sans-serif'],
                        mono: ['JetBrains Mono', 'monospace'],
                    },
                    colors: {
                        emerald: {
                            50: '#ecfdf5',
                            100: '#d1fae5',
                            200: '#a7f3d0',
                            300: '#6ee7b7',
                            400: '#34d399',
                            500: '#10b981',
                            600: '#059669',
                            700: '#047857',
                            800: '#065f46',
                            900: '#064e3b',
                            950: '#022c22',
                        },
                    }
                }
            }
        }
    </script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=JetBrains+Mono:wght@400;700&family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        html {
            scroll-behavior: auto !important;
            overflow-anchor: none !important;
            /* Hide scrollbar for IE, Edge and Firefox */
            -ms-overflow-style: none;
            scrollbar-width: none;
        }

        /* Hide scrollbar for Chrome, Safari and Opera */
        html::-webkit-scrollbar {
            display: none;
        }

        section {
            scroll-margin-top: 100px;
        }

        /* Reveal Animation Styles */
        .reveal-content {
            opacity: 0;
            transform: translateY(30px);
            transition: opacity 0.8s cubic-bezier(0.22, 1, 0.36, 1), 
                        transform 0.8s cubic-bezier(0.22, 1, 0.36, 1);
            will-change: transform, opacity;
        }

        section.active .reveal-content {
            opacity: 1;
            transform: translateY(0);
        }

        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
        }
        .font-mono {
            font-family: 'JetBrains Mono', monospace;
        }
        .glass {
            background: rgba(24, 24, 27, 0.8);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
            border: 1px solid rgba(255, 255, 255, 0.1);
        }
        .code-glow {
            text-shadow: 0 0 10px rgba(52, 211, 153, 0.5);
        }
        @keyframes heartbeat {
            0%, 100% { transform: scale(1); }
            50% { transform: scale(1.05); }
        }
        @keyframes pulse-slow {
            0%, 100% { opacity: 0.1; transform: scale(1); }
            50% { opacity: 0.15; transform: scale(1.1); }
        }
        .animate-heartbeat {
            animation: heartbeat 3s ease-in-out infinite;
        }
        .animate-pulse-slow {
            animation: pulse-slow 8s ease-in-out infinite;
        }
        .bg-grid-pattern {
            background-image: linear-gradient(to right, rgba(63, 63, 70, 0.4) 1px, transparent 1px),
                              linear-gradient(to bottom, rgba(63, 63, 70, 0.4) 1px, transparent 1px);
            background-size: 50px 50px;
        }
        .bg-dot-pattern {
            background-image: radial-gradient(rgba(82, 82, 91, 0.6) 1px, transparent 1px);
            background-size: 30px 30px;
        }
        /* Mask for grid so it fades at the edges */
        .fade-mask {
            mask-image: radial-gradient(circle at center, black, transparent 80%);
        }
        html, body {
            margin: 0 !important;
            padding: 0 !important;
            width: 100%;
            overflow-x: hidden;
        }
        .nav-dock-item {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 0;
            padding: 6px 10px;
            border-radius: 9999px;
            transition: all 0.5s cubic-bezier(0.68, -0.55, 0.265, 1.55);
            color: #71717a; /* zinc-500 */
            position: relative;
            text-decoration: none;
        }
        .nav-dock-item svg {
            min-width: 20px;
            transition: all 0.5s cubic-bezier(0.68, -0.55, 0.265, 1.55);
        }
        .nav-dock-item .nav-text {
            font-size: 11px;
            font-weight: 700;
            white-space: nowrap;
            opacity: 0;
            width: 0;
            overflow: hidden;
            transition: all 0.5s cubic-bezier(0.68, -0.55, 0.265, 1.55);
            margin-left: 0;
        }
        /* Active State */
        .nav-dock-item.active {
            background-color: rgba(16, 185, 129, 0.1);
            color: #34d399; /* emerald-400 */
            gap: 8px;
            padding: 6px 16px;
            box-shadow: 0 0 20px rgba(16, 185, 129, 0.1);
        }
        .nav-dock-item.active .nav-text {
            opacity: 100;
            width: auto;
            margin-left: 4px;
        }
        .nav-dock-item.active svg {
            transform: scale(1.1);
            color: #34d399;
            filter: drop-shadow(0 0 8px rgba(16, 185, 129, 0.5));
        }
        /* Hover Effect for non-active */
        .nav-dock-item:not(.active):hover {
            color: #ffffff;
            background-color: rgba(255, 255, 255, 0.05);
            transform: scale(1.1);
        }
        /* Prevent all transitions on initial load */
        .no-transitions * {
            transition: none !important;
        }
    </style>
</head>
<body x-data="portfolioData" class="bg-zinc-950 text-zinc-300 antialiased selection:bg-emerald-500/30 selection:text-emerald-400 m-0 p-0 overflow-x-hidden no-transitions relative">
    
    <!-- Global Decorative Grid -->
    <div class="fixed inset-0 bg-grid-pattern opacity-30 pointer-events-none -z-50"></div>
    <div class="fixed inset-0 bg-dot-pattern opacity-50 pointer-events-none -z-50"></div>

    <!-- Navigation (Top Branding Only) -->
    <nav id="top-nav" class="fixed top-0 w-full z-50 transition-all duration-300 pointer-events-none">
        <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center w-full pointer-events-auto">
            <div class="flex items-center gap-2 group cursor-pointer">
                <div class="w-9 h-9 rounded-xl bg-emerald-500 flex items-center justify-center font-bold text-zinc-950 text-lg shadow-[0_0_20px_rgba(16,185,129,0.3)] group-hover:scale-110 transition-all">C</div>
                <span class="font-bold text-white tracking-tighter text-base uppercase">Cloudy 2099</span>
            </div>
            <a href="#contact" class="px-5 py-2 bg-white text-zinc-950 rounded-full font-bold text-xs hover:bg-emerald-400 transition-all shadow-xl shadow-white/5">
                Hire Me
            </a>
        </div>
    </nav>

    <main class="max-w-7xl mx-auto px-6 pt-10 pb-10 relative">
        @foreach($sections as $section)
            @if($section->type == 'hero')
        <!-- Hero Section (Grid 8:4) -->
        <section id="hero" class="relative grid lg:grid-cols-12 gap-12 items-center min-h-[80vh] mb-20">
            <div class="reveal-content lg:col-span-12 grid lg:grid-cols-12 gap-12 items-center">
            <!-- Subtle Background Elements -->
            <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[800px] h-[800px] bg-emerald-500/20 rounded-full blur-[140px] -z-20 animate-pulse-slow"></div>
            <div class="absolute top-0 right-0 w-[500px] h-[500px] bg-blue-500/10 rounded-full blur-[120px] -z-20"></div>
            
            <div class="lg:col-span-8 space-y-6">
                <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-emerald-500/10 border border-emerald-500/20 text-emerald-400 text-xs font-mono font-bold uppercase tracking-wider">
                    <span class="w-2 h-2 bg-emerald-500 rounded-full animate-pulse"></span>
                    Available for Work
                </div>
                <h1 class="font-extrabold text-white leading-tight tracking-tighter">
                    <span class="text-6xl lg:text-7xl block mb-2" x-text="hero?.name">Rizky Wahyudi</span>
                    <span class="text-4xl lg:text-5xl text-transparent bg-clip-text bg-gradient-to-r from-emerald-400 to-cyan-400 block" x-text="hero?.title">Web Developer | UI/UX</span>
                </h1>
                <p class="text-xl text-zinc-400 max-w-2xl leading-relaxed" x-text="hero?.bio">
                    Fullstack Developer & IoT Engineer. Crafting high performance web systems and smart solutions with precision and purpose. Dedicated to transforming complex ideas into efficient, reliable, and user-centric digital products.
                </p>
                <div class="flex flex-wrap gap-4 pt-4">
                    <a href="#projects" class="px-8 py-4 bg-emerald-500 text-zinc-950 rounded-xl font-bold hover:bg-emerald-400 transition-all flex items-center gap-2 shadow-lg shadow-emerald-500/20">
                        View Projects
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/><path d="m12 5 7 7-7 7"/></svg>
                    </a>
                    <a href="#contact" class="px-8 py-4 border border-zinc-800 hover:bg-zinc-900 text-white rounded-xl font-bold transition-all">
                        Let's Talk
                    </a>
                </div>
            </div>
            <div class="lg:col-span-4 relative lg:-mt-12">
                <div class="absolute -inset-4 bg-gradient-to-r from-emerald-500 to-cyan-500 rounded-3xl opacity-20 blur-2xl transition-all duration-700"></div>
                <div class="relative rounded-3xl overflow-hidden border border-zinc-800 bg-zinc-900 aspect-square group">
                    <img :src="hero?.avatar" alt="Developer Avatar" class="w-full h-full object-cover grayscale group-hover:grayscale-0 transition-all duration-700 group-hover:scale-105">
                </div>
                <!-- Interactive Code Window -->
                <div class="absolute -bottom-20 -left-4 lg:-bottom-24 lg:-left-40 p-0.5 glass rounded-2xl border border-white/10 shadow-2xl hidden lg:block w-[410px] z-20">
                    <div class="bg-zinc-950/40 backdrop-blur-md rounded-xl overflow-hidden font-mono text-[12px] leading-snug">
                        <!-- Mac Buttons -->
                        <div class="flex items-center justify-between px-4 py-2.5 bg-white/5 border-b border-white/5">
                            <div class="flex gap-2">
                                <div class="w-2.5 h-2.5 rounded-full bg-red-500/80"></div>
                                <div class="w-2.5 h-2.5 rounded-full bg-yellow-500/80"></div>
                                <div class="w-2.5 h-2.5 rounded-full bg-green-500/80"></div>
                            </div>
                            <div class="text-zinc-500 text-[9px] tracking-widest uppercase">Profile.php</div>
                        </div>
                        <!-- Code Area -->
                        <div class="p-5">
                            <div class="text-zinc-500/60 mb-2 italic">// Fullstack Developer</div>
                            <div class="mb-1">
                                <span class="text-pink-500">namespace</span> <span class="text-zinc-300">App\Livewire;</span>
                            </div>
                            <div class="mb-2">
                                <span class="text-pink-500">class</span> <span class="text-yellow-400">Profile</span> <span class="text-pink-500">extends</span> <span class="text-yellow-400">Component</span>
                            </div>
                            <div class="text-zinc-400">{</div>
                            <div class="pl-4">
                                <span class="text-pink-500">public</span> <span class="text-zinc-300">$name</span> = <span class="text-emerald-400">'Rizky Wahyudi, S.Kom'</span>;
                            </div>
                            <div class="pl-4">
                                <span class="text-pink-500">public</span> <span class="text-zinc-300">$skills</span> = [<span class="text-emerald-400">'Laravel'</span>, <span class="text-emerald-400">'PHP'</span>, <span class="text-emerald-400">'Arduino'</span>];
                            </div>
                            <div class="pl-4">
                                <span class="text-pink-500">public</span> <span class="text-zinc-300">$focus</span> = [<span class="text-emerald-400">'Fullstack'</span>, <span class="text-emerald-400">'IoT Engineer'</span>];
                            </div>
                            <div class="pl-4">
                                <span class="text-pink-500">public</span> <span class="text-zinc-300">$learning</span> = <span class="text-emerald-500">'Always'</span>;
                            </div>
                            <div class="text-zinc-400">}</div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </section>
            @elseif($section->type == 'about')
        <!-- Who Am I Section -->
        <section id="about" class="mb-20 relative">
            <!-- Section Glows -->
            <div class="absolute -top-24 -left-24 w-96 h-96 bg-emerald-500/20 rounded-full blur-[100px] -z-10 animate-pulse-slow"></div>
            <div class="absolute -bottom-24 -right-24 w-96 h-96 bg-cyan-500/10 rounded-full blur-[100px] -z-10"></div>
            
            <!-- Watermark Background Text -->
            <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 text-[20rem] font-black text-white/[0.02] select-none pointer-events-none -z-20 tracking-tighter">ABOUT</div>

            <!-- Floating Code Decorations -->
            <div class="absolute top-10 right-10 text-emerald-500/10 font-mono text-8xl -z-10 rotate-12 select-none">&lt;/&gt;</div>
            <div class="absolute bottom-10 left-10 text-emerald-500/5 font-mono text-9xl -z-10 -rotate-12 select-none">{ }</div>

            <div class="reveal-content">
                <div class="flex flex-col items-center text-center mb-10">
                    <h2 class="text-sm font-mono font-bold text-emerald-400 uppercase tracking-widest mb-4">Who Am I</h2>
                    <h3 class="text-4xl font-bold text-white mb-6">About Me</h3>
                    <div class="w-20 h-1 bg-emerald-500 rounded-full"></div>
                </div>
                <div class="grid md:grid-cols-2 gap-10 items-center">
                    <div class="space-y-6 text-lg leading-relaxed text-justify">
                        <p x-text="about?.description1">
                            I am a fresh Informatics Engineering graduate from Bina Insani University with a focus on Web Development and UI/UX. Throughout my journey, I've developed various systems—including security apps and healthcare features—while focusing on usability through Figma prototyping.
                        </p>
                        <p x-text="about?.description2">
                            In addition to trainings from Kominfo and Kelas IoT, my experience as an IoT book co-author and journal contributor has strengthened my technical foundation. I am an adaptable learner who is eager to contribute, grow, and create a meaningful impact through reliable digital solutions.
                        </p>
                    </div>
                    <div class="flex flex-col items-center p-6 relative">
                        <!-- Circular Photo with Heartbeat Animation (Larger) -->
                        <div class="w-56 h-56 rounded-full border-4 border-emerald-500/20 p-2 mb-4 animate-heartbeat">
                            <div class="w-full h-full rounded-full overflow-hidden border-2 border-emerald-500 shadow-[0_0_30px_rgba(16,185,129,0.2)] group">
                                <img :src="about?.avatar" alt="Profile" class="w-full h-full object-cover grayscale group-hover:grayscale-0 transition-all duration-700 group-hover:scale-110">
                            </div>
                        </div>
                        
                        <!-- Major & Info -->
                        <div class="text-center">
                            <h4 class="text-xl font-bold text-white mb-1 tracking-tight" x-text="hero?.name || 'Developer Name'">Rizky Wahyudi, S.Kom</h4>
                            <p class="text-xs text-emerald-400 font-mono mb-4 uppercase tracking-[0.2em] font-semibold">Informatic Engineering</p>
                            
                            <!-- Interest Pills -->
                            <div class="flex flex-wrap justify-center gap-2 mb-6">
                                <template x-for="(tag, index) in (about?.hashtags || 'Laravel, Fullstack, UI/UX, IoT').split(',').map(s => s.trim()).filter(s => s)" :key="index">
                                    <span class="px-3.5 py-1.5 rounded-full border text-[10px] font-bold uppercase tracking-wider" 
                                          :class="getHashtagColor(index)" 
                                          x-text="(tag.startsWith('#') ? tag : '#' + tag)"></span>
                                </template>
                            </div>
                            
                            <!-- Download Resume Button -->
                            <a :href="about?.resume" target="_blank" class="inline-flex px-8 py-3 bg-zinc-100 text-zinc-950 rounded-xl font-bold text-sm hover:bg-emerald-400 hover:-translate-y-1 transition-all items-center justify-center gap-2 shadow-lg">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/><polyline points="7 10 12 15 17 10"/><line x1="12" x2="12" y1="15" y2="3"/></svg>
                                Download Resume
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
            @elseif($section->type == 'timeline')
        <!-- Timeline Section -->
        <section id="timeline" class="mb-20 relative">
            <!-- Section Glow -->
            <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-full max-w-4xl h-96 bg-blue-500/15 rounded-full blur-[120px] -z-10"></div>
            <div class="reveal-content">
                <div class="flex flex-col items-center text-center mb-10">
                    <h2 class="text-sm font-mono font-bold text-emerald-400 uppercase tracking-widest mb-4">The Journey</h2>
                    <h3 class="text-4xl font-bold text-white mb-6">Experience & Education</h3>
                    <div class="w-20 h-1 bg-emerald-500 rounded-full"></div>
                </div>
                <div class="relative max-w-4xl mx-auto">
                    <!-- Vertical Line -->
                    <div class="absolute left-0 md:left-1/2 transform md:-translate-x-1/2 h-full w-px bg-zinc-800"></div>
                    
                    <!-- Items -->
                    <div class="space-y-12">
                        <template x-for="item in timeline?.items || []" :key="item.id">
                            <div class="relative flex items-center justify-between md:justify-normal md:odd:flex-row-reverse group">
                                <div class="flex items-center justify-center w-10 h-10 rounded-full border border-zinc-800 bg-zinc-950 z-10 absolute left-[-20px] md:left-1/2 md:-translate-x-1/2 group-hover:border-emerald-500 transition-colors">
                                    <div class="w-2 h-2 bg-emerald-500 rounded-full"></div>
                                </div>
                                <div class="w-full md:w-[45%] pl-12 md:pl-0">
                                    <div class="p-6 rounded-2xl bg-zinc-900 border border-zinc-800 hover:border-emerald-500/30 transition-all">
                                        <span class="text-emerald-400 font-mono text-xs font-bold mb-2 block" x-text="item.period"></span>
                                        <h4 class="text-xl font-bold text-white" x-text="item.title"></h4>
                                        <p class="text-sm text-zinc-500 mb-4 font-mono" x-text="item.company"></p>
                                        <p class="text-zinc-400 text-sm leading-relaxed" x-text="item.description"></p>
                                    </div>
                                </div>
                            </div>
                        </template>
                    </div>
                </div>
            </div>
        </section>
            @elseif($section->type == 'projects')
        <!-- Projects Section -->
        <section id="projects" class="mb-20 relative">
            <!-- Section Glow -->
            <div class="absolute -bottom-20 -right-20 w-96 h-96 bg-purple-500/15 rounded-full blur-[100px] -z-10"></div>
            <div class="reveal-content">
                <div class="flex flex-col items-center text-center mb-10">
                    <h2 class="text-sm font-mono font-bold text-emerald-400 uppercase tracking-widest mb-4">Portfolio</h2>
                    <h3 class="text-4xl font-bold text-white mb-6">Recent Projects</h3>
                    <div class="w-20 h-1 bg-emerald-500 rounded-full"></div>
                </div>
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <template x-for="(project, index) in (showAllProjects ? (projects?.items || []) : (projects?.items || []).slice(0, projectLimit))" :key="project.id">
                    <div class="group relative bg-zinc-900 border border-zinc-800 rounded-3xl overflow-hidden hover:border-emerald-500/50 transition-all duration-500"
                         x-show="showAllProjects || index < projectLimit"
                         x-transition:enter="transition ease-out duration-500"
                         x-transition:enter-start="opacity-0 transform translate-y-8"
                         x-transition:enter-end="opacity-100 transform translate-y-0">
                        <div class="aspect-video bg-zinc-800 relative overflow-hidden cursor-pointer" @click="openModal(project.image)">
                            <img :src="project.image" :alt="project.title" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                            <div class="absolute inset-0 bg-emerald-500/20 opacity-0 group-hover:opacity-100 transition-opacity"></div>
                        </div>
                        <div class="p-8">
                            <div class="flex flex-wrap gap-2 mb-4">
                                <template x-for="tag in (Array.isArray(project.tags) ? project.tags : (project.tags || '').split(',').filter(t => t.trim()))" :key="tag">
                                    <span class="px-3 py-1 rounded-full bg-zinc-800 text-zinc-400 text-[10px] font-mono font-bold uppercase" x-text="tag.trim()"></span>
                                </template>
                            </div>
                            <h4 class="text-xl font-bold text-white mb-2" x-text="project.title"></h4>
                            <p class="text-zinc-400 text-sm mb-6 text-justify" x-text="project.description"></p>
                            <a :href="project.link" class="inline-flex items-center gap-2 text-emerald-400 font-bold hover:gap-4 transition-all">
                                View Details
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/><path d="m12 5 7 7-7 7"/></svg>
                            </a>
                        </div>
                    </div>
                </template>
            </div>
            
            <!-- Show More/Less Button -->
            <div x-show="(projects?.items || []).length > projectLimit" class="mt-12 flex justify-center">
                <button @click="showAllProjects = !showAllProjects; if(!showAllProjects) $nextTick(() => document.getElementById('projects').scrollIntoView({behavior: 'smooth'}))" 
                        class="group px-8 py-3 bg-zinc-900 border border-zinc-800 hover:border-emerald-500/50 text-white rounded-xl font-bold transition-all flex items-center gap-3">
                    <span x-text="showAllProjects ? 'Show Less' : 'Show All Projects'"></span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="transition-transform duration-300" :class="showAllProjects ? 'rotate-180' : ''">
                        <path d="m6 9 6 6 6-6"/>
                    </svg>
                </button>
            </div>
        </section>
            @elseif($section->type == 'achievements')
        <!-- Honors & Achievements Section (Bento Grid) -->
        <section id="achievements" class="mb-20 relative">
            <!-- Section Glow -->
            <div class="absolute top-1/2 left-0 w-96 h-96 bg-cyan-500/15 rounded-full blur-[100px] -z-10"></div>
            <div class="reveal-content">
                <div class="flex flex-col items-center text-center mb-10">
                    <h2 class="text-xs font-mono font-bold text-emerald-400 uppercase tracking-widest mb-4">Milestones</h2>
                    <h3 class="text-4xl font-bold text-white mb-6">Achievements</h3>
                    <div class="w-20 h-1 bg-emerald-500 rounded-full"></div>
                </div>
                
                <div class="grid grid-cols-1 md:grid-cols-12 gap-6 max-w-6xl mx-auto">
                    <template x-for="(item, idx) in (achievements?.items || [])" :key="item.id || idx">
                        <div class="md:col-span-12 grid grid-cols-1 md:grid-cols-12 gap-6">
                            <!-- Card: Info (Left) -->
                            <div class="md:col-span-8 p-8 rounded-3xl bg-zinc-900 border border-zinc-800 hover:border-emerald-500/30 transition-all group relative">
                                <div class="flex items-center gap-4 mb-6">
                                    <div class="w-12 h-12 rounded-2xl bg-emerald-500/10 flex items-center justify-center text-emerald-400 group-hover:scale-110 transition-transform">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 19.5v-15A2.5 2.5 0 0 1 6.5 2H20v20H6.5a2.5 2.5 0 0 1-2.5-2.5Z"/><path d="M8 7h6"/><path d="M8 11h8"/></svg>
                                    </div>
                                    <h4 class="text-2xl font-bold text-white group-hover:text-emerald-400 transition-colors" x-text="item.title"></h4>
                                </div>
                                <p class="text-zinc-400 text-sm leading-relaxed mb-8" x-text="item.description"></p>
                                <div class="flex flex-wrap items-center gap-4 mb-8">
                                    <span x-show="item.isbn" class="px-3 py-1.5 rounded-full bg-zinc-800 text-zinc-500 text-xs font-mono font-bold uppercase" x-text="item.isbn"></span>
                                    <span class="text-zinc-600 text-sm font-mono" x-text="'Published ' + item.year"></span>
                                </div>
                                <div class="flex flex-wrap gap-4">
                                    <a x-show="item.file_url" :href="item.file_url" target="_blank" class="inline-flex items-center gap-3 px-8 py-4 bg-emerald-500 text-zinc-950 rounded-2xl font-bold hover:bg-emerald-400 transition-all text-sm group/btn">
                                        View Full Preview
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="group-hover/btn:translate-y-0.5 transition-transform"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/><polyline points="7 10 12 15 17 10"/><line x1="12" x2="12" y1="15" y2="3"/></svg>
                                    </a>
                                    <a x-show="item.doi_url" :href="item.doi_url" target="_blank" class="inline-flex items-center gap-3 px-8 py-4 bg-zinc-800 text-white rounded-2xl font-bold border border-zinc-700 hover:border-emerald-500/50 transition-all text-sm group/btn">
                                        View Journal (DOI)
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="group-hover/btn:translate-x-1 transition-transform"><path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"/><polyline points="15 3 21 3 21 9"/><line x1="10" y1="14" x2="21" y2="3"/></svg>
                                    </a>
                                </div>
                            </div>
                            <!-- Card: Image (Right) -->
                            <div @click="openModal(item.image_url)" class="md:col-span-4 rounded-3xl bg-zinc-900 border border-zinc-800 hover:border-emerald-500/30 transition-all group overflow-hidden flex items-center justify-center p-10 cursor-pointer">
                                <div class="relative w-full max-w-[230px] aspect-[3/4] shadow-2xl shadow-emerald-500/10 group-hover:scale-105 transition-transform duration-500">
                                    <img :src="item.image_url" alt="Cover" class="w-full h-full object-cover rounded-lg">
                                    <div class="absolute inset-0 rounded-lg border border-white/10"></div>
                                </div>
                            </div>
                        </div>
                    </template>
                </div>
            </div>
        </section>
            @elseif($section->type == 'stack')
        <!-- My Stack Section -->
        <section id="stack" class="mb-20 relative">
            <!-- Section Glow -->
            <div class="absolute -top-10 right-0 w-80 h-80 bg-amber-500/10 rounded-full blur-[100px] -z-10"></div>
            <div class="reveal-content">
                <div class="flex flex-col items-center text-center mb-10">
                    <h2 class="text-sm font-mono font-bold text-emerald-400 uppercase tracking-widest mb-4">Tech Stack</h2>
                    <h3 class="text-4xl font-bold text-white mb-6">My Toolkit</h3>
                    <div class="w-20 h-1 bg-emerald-500 rounded-full"></div>
                </div>
                <div class="grid md:grid-cols-2 gap-6 max-w-6xl mx-auto items-stretch">
                    <!-- FRONTEND -->
                    <div class="p-8 rounded-3xl bg-zinc-900/50 border border-zinc-800 relative group overflow-hidden flex flex-col">
                        <div class="absolute top-0 left-8 w-16 h-[2px] bg-emerald-500"></div>
                        <h4 class="text-lg font-mono font-bold text-emerald-400 uppercase tracking-widest mb-10 flex items-center gap-2">
                            <span class="w-1 h-3 bg-emerald-500 rounded-full"></span>
                            Frontend Development
                        </h4>
                        <div class="grid grid-cols-2 lg:grid-cols-4 gap-3">
                            <div class="flex flex-col items-center gap-2 p-3 rounded-2xl bg-zinc-900 border border-zinc-800 hover:border-emerald-500/50 transition-all group/icon">
                                <img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/laravel/laravel-original.svg" class="w-8 h-8 group-hover/icon:scale-110 transition-transform" alt="Laravel">
                                <span class="text-[9px] font-bold text-zinc-500 uppercase tracking-tighter">Laravel</span>
                            </div>
                            <div class="flex flex-col items-center gap-2 p-3 rounded-2xl bg-zinc-900 border border-zinc-800 hover:border-emerald-500/50 transition-all group/icon text-center">
                                <img src="{{ asset('assets/logo/logo_livewire.png') }}" class="w-8 h-8 object-contain group-hover/icon:scale-110 transition-transform" alt="Livewire">
                                <span class="text-[9px] font-bold text-zinc-500 uppercase tracking-tighter">Livewire 3</span>
                            </div>
                            <div class="flex flex-col items-center gap-2 p-3 rounded-2xl bg-zinc-900 border border-zinc-800 hover:border-emerald-500/50 transition-all group/icon">
                                <img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/javascript/javascript-original.svg" class="w-8 h-8 group-hover/icon:scale-110 transition-transform" alt="JavaScript">
                                <span class="text-[9px] font-bold text-zinc-500 uppercase tracking-tighter">JavaScript</span>
                            </div>
                            <div class="flex flex-col items-center gap-2 p-3 rounded-2xl bg-zinc-900 border border-zinc-800 hover:border-emerald-500/50 transition-all group/icon">
                                <img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/tailwindcss/tailwindcss-original.svg" class="w-8 h-8 group-hover/icon:scale-110 transition-transform" alt="Tailwind">
                                <span class="text-[9px] font-bold text-zinc-500 uppercase tracking-tighter">Tailwind</span>
                            </div>
                            <div class="flex flex-col items-center gap-2 p-3 rounded-2xl bg-zinc-900 border border-zinc-800 hover:border-emerald-500/50 transition-all group/icon">
                                <img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/bootstrap/bootstrap-original.svg" class="w-8 h-8 group-hover/icon:scale-110 transition-transform" alt="Bootstrap">
                                <span class="text-[9px] font-bold text-zinc-500 uppercase tracking-tighter">Bootstrap</span>
                            </div>
                            <div class="flex flex-col items-center gap-2 p-3 rounded-2xl bg-zinc-900 border border-zinc-800 hover:border-emerald-500/50 transition-all group/icon">
                                <img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/alpinejs/alpinejs-original.svg" class="w-8 h-8 group-hover/icon:scale-110 transition-transform" alt="AlpineJS">
                                <span class="text-[9px] font-bold text-zinc-500 uppercase tracking-tighter">Alpine.js</span>
                            </div>
                        </div>
                    </div>

                    <!-- BACKEND -->
                    <div class="p-8 rounded-3xl bg-zinc-900/50 border border-zinc-800 relative group overflow-hidden flex flex-col">
                        <div class="absolute top-0 left-8 w-16 h-[2px] bg-blue-500"></div>
                        <h4 class="text-lg font-mono font-bold text-blue-400 uppercase tracking-widest mb-10 flex items-center gap-2">
                            <span class="w-1 h-3 bg-blue-500 rounded-full"></span>
                            Backend & Logic
                        </h4>
                        <div class="grid grid-cols-2 lg:grid-cols-4 gap-3">
                            <div class="flex flex-col items-center gap-2 p-3 rounded-2xl bg-zinc-900 border border-zinc-800 hover:border-blue-500/50 transition-all group/icon">
                                <img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/php/php-original.svg" class="w-8 h-8 group-hover/icon:scale-110 transition-transform" alt="PHP">
                                <span class="text-[9px] font-bold text-zinc-500 uppercase tracking-tighter">PHP</span>
                            </div>
                            <div class="flex flex-col items-center gap-2 p-3 rounded-2xl bg-zinc-900 border border-zinc-800 hover:border-blue-500/50 transition-all group/icon">
                                <img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/codeigniter/codeigniter-plain.svg" class="w-8 h-8 group-hover/icon:scale-110 transition-transform" alt="CI3">
                                <span class="text-[9px] font-bold text-zinc-500 uppercase tracking-tighter">CI3</span>
                            </div>
                            <div class="flex flex-col items-center gap-2 p-3 rounded-2xl bg-zinc-900 border border-zinc-800 hover:border-blue-500/50 transition-all group/icon">
                                <img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/mysql/mysql-original.svg" class="w-8 h-8 group-hover/icon:scale-110 transition-transform" alt="MySQL">
                                <span class="text-[9px] font-bold text-zinc-500 uppercase tracking-tighter">MySQL</span>
                            </div>
                            <div class="flex flex-col items-center gap-2 p-3 rounded-2xl bg-zinc-900 border border-zinc-800 hover:border-blue-500/50 transition-all group/icon">
                                <img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/postgresql/postgresql-original.svg" class="w-8 h-8 group-hover/icon:scale-110 transition-transform" alt="PostgreSQL">
                                <span class="text-[9px] font-bold text-zinc-500 uppercase tracking-tighter">PostgreSQL</span>
                            </div>
                            <div class="flex flex-col items-center gap-2 p-3 rounded-2xl bg-zinc-900 border border-zinc-800 hover:border-blue-500/50 transition-all group/icon">
                                <img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/arduino/arduino-original.svg" class="w-8 h-8 group-hover/icon:scale-110 transition-transform" alt="Arduino">
                                <span class="text-[9px] font-bold text-zinc-500 uppercase tracking-tighter">Arduino</span>
                            </div>
                        </div>
                    </div>

                    <!-- DESIGN -->
                    <div class="p-8 rounded-3xl bg-zinc-900/50 border border-zinc-800 relative group overflow-hidden flex flex-col">
                        <div class="absolute top-0 left-8 w-16 h-[2px] bg-purple-500"></div>
                        <h4 class="text-lg font-mono font-bold text-purple-400 uppercase tracking-widest mb-10 flex items-center gap-2">
                            <span class="w-1 h-3 bg-purple-500 rounded-full"></span>
                            Design Experience
                        </h4>
                        <div class="grid grid-cols-2 gap-4">
                            <div class="flex flex-col items-center gap-3 p-4 rounded-2xl bg-zinc-900 border border-zinc-800 hover:border-purple-500/50 transition-all group/icon">
                                <img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/figma/figma-original.svg" class="w-10 h-10 group-hover/icon:scale-110 transition-transform" alt="Figma">
                                <span class="text-[10px] font-bold text-zinc-500 uppercase tracking-tighter">Figma</span>
                            </div>
                            <div class="flex flex-col items-center gap-3 p-4 rounded-2xl bg-zinc-900 border border-zinc-800 hover:border-purple-500/50 transition-all group/icon">
                                <div class="w-10 h-10 flex items-center justify-center">
                                    <svg class="w-10 h-10 text-zinc-400" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
                                </div>
                                <span class="text-[10px] font-bold text-zinc-500 uppercase tracking-tighter">Research</span>
                            </div>
                        </div>
                    </div>

                    <!-- OTHER -->
                    <div class="p-8 rounded-3xl bg-zinc-900/50 border border-zinc-800 relative group overflow-hidden flex flex-col">
                        <div class="absolute top-0 left-8 w-16 h-[2px] bg-amber-500"></div>
                        <h4 class="text-lg font-mono font-bold text-amber-400 uppercase tracking-widest mb-10 flex items-center gap-2">
                            <span class="w-1 h-3 bg-amber-500 rounded-full"></span>
                            Other
                        </h4>
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <!-- Smart Parking -->
                            <div class="flex items-center gap-3 p-3 rounded-2xl bg-zinc-900 border border-zinc-800 hover:border-emerald-500/50 transition-all group/icon">
                                <div class="w-10 h-10 flex items-center justify-center bg-emerald-500/10 rounded-lg">
                                    <svg class="w-5 h-5 text-emerald-500" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="11" width="18" height="10" rx="2"/><path d="M7 11V7a5 5 0 0 1 10 0v4"/></svg>
                                </div>
                                <div class="flex flex-col">
                                    <span class="text-[11px] font-bold text-white uppercase tracking-tighter">Smart Parking</span>
                                    <span class="text-[9px] text-zinc-500 font-mono text-emerald-500/70">IoT Monitoring</span>
                                </div>
                            </div>
                            <!-- Environment -->
                            <div class="flex items-center gap-3 p-3 rounded-2xl bg-zinc-900 border border-zinc-800 hover:border-blue-500/50 transition-all group/icon">
                                <div class="w-10 h-10 flex items-center justify-center bg-blue-500/10 rounded-lg">
                                    <svg class="w-5 h-5 text-blue-500" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 4v10.54a4 4 0 1 1-4 0V4a2 2 0 0 1 4 0Z"/></svg>
                                </div>
                                <div class="flex flex-col">
                                    <span class="text-[11px] font-bold text-white uppercase tracking-tighter">Environment</span>
                                    <span class="text-[9px] text-zinc-500 font-mono text-blue-500/70">IoT Sensors</span>
                                </div>
                            </div>
                            <!-- Games (Full Width) -->
                            <div class="sm:col-span-2 p-4 rounded-2xl bg-zinc-900 border border-zinc-800 hover:border-amber-500/50 transition-all group/game">
                                <div class="flex items-center gap-4">
                                    <div class="relative flex-shrink-0">
                                        <img src="/storage/profile_photos/MLBB_icon.webp" class="w-12 h-12 rounded-xl object-cover shadow-lg" alt="Mobile Legends">
                                        <img src="/storage/profile_photos/immortal.png" class="w-12 h-12 object-contain absolute -bottom-4 -right-4" alt="Immortal Rank">
                                    </div>
                                    <div class="flex-1 min-w-0">
                                        <div class="flex items-baseline justify-between gap-2">
                                            <span class="text-sm font-bold text-white tracking-wider truncate">Mobile Legends Bang Bang</span>
                                        </div>
                                        <span class="text-xs text-amber-400 font-mono font-bold block mt-0.5">EX Immortal 225 - 2026</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
        </section>
            @elseif($section->type == 'contact')
        <!-- Get In Touch Section -->
        <section id="contact" class="mb-10">
            <div class="reveal-content">
                <div class="p-16 rounded-[40px] bg-emerald-500 text-zinc-950 relative overflow-hidden">
                <div class="absolute top-0 right-0 p-20 opacity-20 pointer-events-none">
                    <svg xmlns="http://www.w3.org/2000/svg" width="300" height="300" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="0.5" stroke-linecap="round" stroke-linejoin="round"><path d="M22 2 11 13"/><path d="m22 2-7 20-4-9-9-4 20-7Z"/></svg>
                </div>
                <div class="relative z-10 max-w-3xl">
                    <h2 class="text-5xl font-extrabold mb-8 leading-tight tracking-tight" x-text="contact?.heading"></h2>
                    <p class="text-xl mb-12 text-zinc-900/80 font-medium leading-relaxed" x-text="contact?.description"></p>
                    <div class="flex flex-wrap gap-4">
                        <a :href="'mailto:' + contact?.email" class="px-8 py-4 bg-zinc-950 text-white rounded-xl font-bold hover:bg-zinc-900 transition-all flex items-center gap-3">
                            Say Hello
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="20" height="16" x="2" y="4" rx="2"/><path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"/></svg>
                        </a>
                        <div class="flex items-center gap-4 px-4">
                            <a href="https://github.com/cloudy-2099" target="_blank" rel="noopener noreferrer" class="w-12 h-12 rounded-full border border-zinc-950/20 flex items-center justify-center hover:bg-zinc-950/10 transition-all">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M15 22v-4a4.8 4.8 0 0 0-1-3.5c3 0 6-2 6-5.5.08-1.25-.27-2.48-1-3.5.28-1.15.28-2.35 0-3.5 0 0-1 0-3 1.5-2.64-.5-5.36-.5-8 0C6 2 5 2 5 2c-.3 1.15-.3 2.35 0 3.5A5.403 5.403 0 0 0 4 9c0 3.5 3 5.5 6 5.5-.39.49-.68 1.05-.85 1.65-.17.6-.22 1.23-.15 1.85v4"/><path d="M9 18c-4.51 2-5-2-7-2"/></svg>
                            </a>
                            <a href="https://www.linkedin.com/in/rizky-wahyudi-790620296/" target="_blank" rel="noopener noreferrer" class="w-12 h-12 rounded-full border border-zinc-950/20 flex items-center justify-center hover:bg-zinc-950/10 transition-all">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"/><rect width="4" height="12" x="2" y="9"/><circle cx="4" cy="4" r="2"/></svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
            @elseif($section->type == 'custom')
        <!-- Custom Dynamic Section -->
        <section id="{{ $section->key }}" class="mb-20 relative">
            <div class="reveal-content text-center max-w-4xl mx-auto">
                <h3 class="text-4xl font-bold text-white mb-6" x-text="this['{{ $section->key }}']?.heading"></h3>
                <div class="w-20 h-1 bg-emerald-500 rounded-full mx-auto mb-8"></div>
                <p class="text-lg text-zinc-400 leading-relaxed whitespace-pre-line" x-text="this['{{ $section->key }}']?.description"></p>
            </div>
        </section>
            @endif
        @endforeach
    </main>

    <footer class="pt-8 pb-32 border-t border-zinc-900">
        <div class="max-w-7xl mx-auto px-6 flex flex-col md:row items-center justify-between gap-8">
            <div class="text-sm text-zinc-500 font-mono">
                © {{ date('Y') }} CLOUDY DEV — Built with <span class="text-emerald-500">Laravel 12</span>
            </div>
            <div class="flex items-center gap-6 text-sm font-medium text-zinc-400">
                <a href="https://github.com/cloudy-2099" target="_blank" rel="noopener noreferrer" class="hover:text-white transition-colors">GitHub</a>
                <a href="https://www.linkedin.com/in/rizky-wahyudi-790620296/" target="_blank" rel="noopener noreferrer" class="hover:text-white transition-colors">LinkedIn</a>
            </div>
        </div>
    </footer>

    <!-- Floating Bottom Dock Navigation -->
    <div class="fixed bottom-8 left-1/2 -translate-x-1/2 z-50">
        <nav class="glass px-4 py-3 rounded-full border border-white/10 shadow-[0_20px_50px_rgba(0,0,0,0.5)] flex items-center gap-2">
            @foreach($sections as $index => $section)
                @php
                    $content = json_decode($section->content, true);
                    $icon = $content['icon_svg'] ?? '';
                    if (empty(trim($icon))) {
                        switch($section->type) {
                            case 'hero': $icon = '<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m3 9 9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg>'; break;
                            case 'about': $icon = '<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>'; break;
                            case 'timeline': $icon = '<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="20" height="14" x="2" y="7" rx="2" ry="2"/><path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"/></svg>'; break;
                            case 'projects': $icon = '<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 12h.01"/><path d="M16 6V4a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v2"/><path d="M22 13a18.15 18.15 0 0 1-20 0"/><rect width="20" height="14" x="2" y="6" rx="2"/></svg>'; break;
                            case 'achievements': $icon = '<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M6 9H4.5a2.5 2.5 0 0 1 0-5H6"/><path d="M18 9h1.5a2.5 2.5 0 0 0 0-5H18"/><path d="M4 22h16"/><path d="M10 14.66V17c0 .55-.47.98-.97 1.21C7.85 18.75 7 20.24 7 22"/><path d="M14 14.66V17c0 .55.47.98.97 1.21C16.15 18.75 17 20.24 17 22"/><path d="M18 2H6v7a6 6 0 0 0 12 0V2Z"/></svg>'; break;
                            case 'stack': $icon = '<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m18 16 4-4-4-4"/><path d="m6 8-4 4 4 4"/><path d="m14.5 4-5 16"/></svg>'; break;
                            case 'contact': $icon = '<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 2 11 13"/><path d="m22 2-7 20-4-9-9-4 20-7Z"/></svg>'; break;
                            default: $icon = '<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>'; break; // Star for custom
                        }
                    }
                    // For short text, try to extract the first word from the section name or custom heading
                    $navText = $section->name;
                    if ($section->type == 'custom') {
                        $navText = $content['heading'] ?? $section->name;
                    }
                    $shortText = explode(' ', trim(str_replace('&', '', $navText)))[0];
                @endphp
                <a href="#{{ $section->key }}" data-section="{{ $section->key }}" class="nav-dock-item {{ $index === 0 ? 'active' : '' }}">
                    {!! $icon !!}
                    <span class="nav-text">{{ $shortText }}</span>
                </a>
            @endforeach
        </nav>
    </div>

    <!-- Image Modal Overlay -->
    <div x-show="showModal" 
         x-transition:enter="transition ease-out duration-300"
         x-transition:enter-start="opacity-0"
         x-transition:enter-end="opacity-100"
         x-transition:leave="transition ease-in duration-200"
         x-transition:leave-start="opacity-100"
         x-transition:leave-end="opacity-0"
         class="fixed inset-0 z-[100] flex items-center justify-center p-4 sm:p-6 lg:p-10 bg-zinc-950/95 backdrop-blur-xl"
         style="display: none;"
         @keydown.escape.window="closeModal()">
        
        <!-- Close Button -->
        <button @click="closeModal()" class="absolute top-6 right-6 w-12 h-12 rounded-full bg-white/10 hover:bg-white/20 text-white flex items-center justify-center transition-all z-[110]">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 6 6 18"/><path d="m6 6 12 12"/></svg>
        </button>

        <!-- Modal Content -->
        <div class="relative max-w-5xl w-full max-h-full flex items-center justify-center" @click.away="closeModal()">
            <img :src="modalImage" class="max-w-full max-h-[85vh] object-contain rounded-2xl shadow-2xl border border-white/10 shadow-emerald-500/10" 
                 x-transition:enter="transition ease-out duration-500 delay-100"
                 x-transition:enter-start="scale-90 opacity-0"
                 x-transition:enter-end="scale-100 opacity-100">
        </div>
    </div>

    <script>
        // Remove no-transitions class after load
        window.addEventListener('load', () => {
            setTimeout(() => {
                document.body.classList.remove('no-transitions');
            }, 500);
        });

        // Ensure browser handles scroll restoration automatically
        if (history.scrollRestoration) {
            history.scrollRestoration = 'auto';
        }
        
        // Clear hash after a small delay to let browser restore position
        window.addEventListener('load', () => {
            setTimeout(() => {
                if (window.location.hash) {
                    history.replaceState(null, null, window.location.pathname);
                }
            }, 100);
        });

        // Top Nav Scroll Effect
        const topNav = document.getElementById('top-nav');
        window.addEventListener('scroll', () => {
            if (window.scrollY > 20) {
                topNav.style.backgroundColor = 'rgba(9, 9, 11, 0.7)';
                topNav.style.backdropFilter = 'blur(10px)';
            } else {
                topNav.style.backgroundColor = 'transparent';
                topNav.style.backdropFilter = 'none';
            }
        });

        // Scroll Tracker for Floating Dock
        const sections = document.querySelectorAll('section');
        const navItems = document.querySelectorAll('.nav-dock-item');

        // Reveal on Scroll Logic
        const revealObserverOptions = {
            threshold: 0.05, // Trigger faster
            rootMargin: '0px 0px -50px 0px'
        };

        const revealObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('active');
                } else {
                    // Remove active immediately when it leaves the threshold
                    // to allow re-animation from both directions (up and down)
                    entry.target.classList.remove('active');
                }
            });
        }, revealObserverOptions);

        // Pre-check sections on load
        const initReveals = () => {
            // Immediate URL cleanup
            if (window.location.hash) {
                history.replaceState(null, null, window.location.pathname);
            }

            sections.forEach(section => {
                const rect = section.getBoundingClientRect();
                
                // If section is ABOVE the current view (already scrolled past)
                if (rect.bottom < 0) {
                    // Disable transition temporarily to show instantly
                    const inner = section.querySelector('.reveal-content');
                    if (inner) inner.style.transition = 'none';
                    section.classList.add('active');
                    // Re-enable transition in next frame
                    requestAnimationFrame(() => {
                        if (inner) inner.style.transition = '';
                    });
                }
                
                revealObserver.observe(section);
            });

            document.body.classList.remove('no-transitions');
        };

        window.addEventListener('load', initReveals);

        window.addEventListener('scroll', () => {
            let current = '';
            sections.forEach(section => {
                const sectionTop = section.offsetTop;
                if (pageYOffset >= (sectionTop - 300)) {
                    current = section.getAttribute('id');
                }
            });

            navItems.forEach(item => {
                item.classList.remove('active');
                if (item.getAttribute('data-section') === current) {
                    item.classList.add('active');
                }
            });
        });
    </script>

    <!-- AlpineJS Data Component -->
    <script>
        document.addEventListener('alpine:init', () => {
            Alpine.data('portfolioData', () => {
                let initialData = {!! json_encode($data) !!};
                initialData.showAllProjects = false;
                initialData.projectLimit = 3;
                
                initialData.init = function() {
                    window.addEventListener('message', (event) => {
                        if (event.data.type === 'UPDATE_PORTFOLIO_DATA') {
                            // Merge incoming dynamic sections to Alpine state
                            Object.assign(this, event.data.data);
                        }
                    });
                };

                initialData.showModal = false;
                initialData.modalImage = '';
                
                initialData.openModal = function(image) {
                    this.modalImage = image;
                    this.showModal = true;
                    document.body.style.overflow = 'hidden';
                };

                initialData.closeModal = function() {
                    this.showModal = false;
                    document.body.style.overflow = 'auto';
                };

                initialData.getHashtagColor = function(index) {
                    const classes = [
                        'bg-emerald-500/10 border-emerald-500/20 text-emerald-400',
                        'bg-blue-500/10 border-blue-500/20 text-blue-400',
                        'bg-purple-500/10 border-purple-500/20 text-purple-400',
                        'bg-orange-500/10 border-orange-500/20 text-orange-400',
                        'bg-pink-500/10 border-pink-500/20 text-pink-400',
                        'bg-cyan-500/10 border-cyan-500/20 text-cyan-400'
                    ];
                    return classes[index % classes.length];
                };
                
                return initialData;
            });
        });
    </script>
</body>
</html>
