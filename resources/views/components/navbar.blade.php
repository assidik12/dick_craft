{{-- File: resources/views/components/navbar.blade.php --}}
<header x-data="{ open: false }" class="bg-brand-dark/80 backdrop-blur-sm sticky top-0 z-50 border-b border-brand-border">
    <nav class="container mx-auto px-6 py-4">
        <div class="flex items-center justify-between">
            <a href="/" class="text-2xl font-bold text-white">
                DICK.<span class="text-brand-cyan">CRAFT</span>
            </a>

            {{-- Desktop Menu --}}
            <div class="hidden md:flex items-center space-x-8">
                <a href="/" class="nav-link {{ request()->is('/') ? 'active' : '' }}">Home</a>
                <a href="/projects" class="nav-link {{ request()->is('projects') ? 'active' : '' }}">Projects</a>
                <a href="/blog" class="nav-link {{ request()->is('blog') ? 'active' : '' }}">Blog</a>
                <a href="/contact" class="nav-link {{ request()->is('contact') ? 'active' : '' }}">Contact</a>
            </div>

            {{-- Mobile Menu Button --}}
            <div class="md:hidden">
                <button @click="open = !open" class="text-white focus:outline-none">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path x-show="!open" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
                        <path x-show="open" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
            </div>
        </div>

        {{-- Mobile Menu --}}
        <div x-show="open" x-cloak class="md:hidden mt-4">
            <a href="/" class="block py-2 px-4 text-sm rounded hover:bg-brand-light {{ request()->is('/') ? 'text-brand-cyan' : 'text-white' }}">Home</a>
            <a href="/projects" class="block py-2 px-4 text-sm rounded hover:bg-brand-light {{ request()->is('projects') ? 'text-brand-cyan' : 'text-white' }}">Projects</a>
            <a href="/partners" class="block py-2 px-4 text-sm rounded hover:bg-brand-light {{ request()->is('partners') ? 'text-brand-cyan' : 'text-white' }}">Partners</a>
            <a href="/blog" class="block py-2 px-4 text-sm rounded hover:bg-brand-light {{ request()->is('blog') ? 'text-brand-cyan' : 'text-white' }}">Blog</a>
            <a href="/contact" class="block py-2 px-4 text-sm rounded hover:bg-brand-light {{ request()->is('contact') ? 'text-brand-cyan' : 'text-white' }}">Contact</a>
        </div>
    </nav>
</header>

<style>
    .nav-link {
        @apply text-text-secondary hover:text-white transition-colors duration-300 relative;
    }
    .nav-link::after {
        content: '';
        position: absolute;
        width: 0;
        height: 2px;
        bottom: -4px;
        left: 50%;
        transform: translateX(-50%);
        background-color: #22D3EE; /* brand-cyan */
        transition: width 0.3s ease-in-out;
    }
    .nav-link:hover::after,
    .nav-link.active::after {
        width: 100%;
    }
    .nav-link.active {
        @apply text-white;
    }
    .btn {
        @apply px-5 py-2.5 rounded-lg text-sm font-semibold transition-all duration-300 focus:outline-none focus:ring-4;
    }
    .btn-primary {
        @apply bg-brand-cyan text-brand-dark hover:bg-brand-cyan-light focus:ring-brand-cyan/50;
    }
    .btn-secondary {
        @apply bg-transparent border-2 border-brand-cyan text-brand-cyan hover:bg-brand-cyan hover:text-brand-dark;
    }
</style>


