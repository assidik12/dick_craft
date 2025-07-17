@extends('layouts.app')

@section('title', 'Home')

@section('content')
<div class="container mx-auto px-6 py-16">

    <section class="flex flex-col md:flex-row items-center gap-12">

        <!-- Left Side: Profile Image & Social Links -->
        <div class="w-full md:w-1/3 flex flex-col items-center flex-shrink-0">
            <div class="w-48 md:w-full max-w-xs">
                <div class="relative group mb-4">
                    <div class="absolute -inset-1 bg-gradient-to-r from-cyan-500 to-blue-500 rounded-full blur-lg opacity-75 group-hover:opacity-100 transition duration-1000 group-hover:duration-200 animate-tilt"></div>
                    <img class="relative rounded-full w-full h-auto aspect-square object-cover border-4 border-brand-light" src="{{ $profile->image }}" alt="{{ $profile->name }}" />
                </div>
            </div>

            @php
                // Initialize socials array
                $socials = [];
                if (!empty($profile->social_media)) {
                    // Decode the social media attribute if it's a JSON string
                    if (is_string($profile->social_media)) {
                        $socials = json_decode($profile->social_media, true);
                    // Use it directly if it's already an array
                    } elseif (is_array($profile->social_media)) {
                        $socials = $profile->social_media;
                    }
                }
            @endphp

            {{-- Menampilkan ikon sosial media jika data tersedia dan valid --}}
            @if(!empty($socials))
            <div class="flex flex-wrap justify-center items-center gap-x-6 gap-y-2 mt-2">

                <!-- LinkedIn Icon -->
                @if(isset($socials['LinkedIn']))
                <a href="{{ $socials['LinkedIn'] }}" target="_blank" rel="noopener noreferrer" aria-label="LinkedIn Profile" class="text-text-secondary hover:text-brand-cyan transition-colors duration-300">
                    {!! \App\Helpers\IconHelper::getIcon('LinkedIn') !!}
                </a>
                @endif

                <!-- Instagram Icon -->
                @if(isset($socials['Instagram']))
                <a href="{{ $socials['Instagram'] }}" target="_blank" rel="noopener noreferrer" aria-label="Instagram Profile" class="text-text-secondary hover:text-brand-cyan transition-colors duration-300">
                    {!! \App\Helpers\IconHelper::getIcon('Instagram') !!}
                </a>
                @endif

                <!-- GitHub Icon -->
                @if(isset($socials['GitHub']))
                <a href="{{ $socials['GitHub'] }}" target="_blank" rel="noopener noreferrer" aria-label="GitHub Profile" class="text-text-secondary hover:text-brand-cyan transition-colors duration-300">
                    {!! \App\Helpers\IconHelper::getIcon('GitHub') !!}
                </a>
                @endif

                <!-- Medium Icon -->
                @if(isset($socials['Medium']))
                <a href="{{ $socials['Medium'] }}" target="_blank" rel="noopener noreferrer" aria-label="Medium Profile" class="text-text-secondary hover:text-brand-cyan transition-colors duration-300">
                    {!! \App\Helpers\IconHelper::getIcon('Medium') !!}
                </a>
                @endif

            </div>
            @endif
        </div>

        <!-- Right Side: Content -->
        <div class="w-full md:w-2/3 text-center md:text-left">
            <p class="text-brand-cyan font-semibold tracking-wider">{{ strtoupper($profile->name) }}</p>
            <h1 class="text-4xl md:text-6xl font-extrabold text-white my-4 leading-tight">
                A SOFTWARE <span class="text-brand-cyan">DEVELOPER</span>
            </h1>
            <p class="text-text-secondary max-w-xl mx-auto md:mx-0">
                {{ $profile->bio }}
            </p>
            <div class="mt-8 flex justify-center md:justify-start gap-4">
                <a href="https://drive.google.com/file/d/1_zD1fXm2ZAcHKQkieSXMYKA543B-QmH9/view?usp=sharing" target="_blank" rel="noopener noreferrer" class="btn btn-primary shadow-lg shadow-brand-cyan/20">Download CV</a>
            </div>
        </div>
    </section>


    {{-- About Me Section --}}
    <section class="py-24">
        <div class="text-center mb-12">
            <h2 class="text-sm font-bold uppercase text-brand-cyan tracking-widest">ABOUT ME</h2>
            <p class="text-3xl md:text-4xl font-bold text-white mt-2">Software Engineer & Tech Enthusiast</p>
        </div>
        <div class="flex flex-col md:flex-row items-center gap-12">
            <div class="w-full md:w-1/2 text-text-secondary space-y-4">
                <p>
                    dibawah ini adalah bidang-bidang yang pernah saya pelajari.
                </p>
                <ul class="space-y-2">
                    <li class="flex items-center"><svg class="w-5 h-5 text-brand-cyan mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg> Software Development</li>
                    <li class="flex items-center"><svg class="w-5 h-5 text-brand-cyan mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg> Mobile App Development</li>
                    <li class="flex items-center"><svg class="w-5 h-5 text-brand-cyan mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg> Blockchain Development</li>
                    <li class="flex items-center"><svg class="w-5 h-5 text-brand-cyan mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg> Artificial Intelligence</li>
                </ul>
            </div>
            <div class="w-full md:w-1/2 grid grid-cols-2 gap-6">
                <div class="bg-brand-light p-6 rounded-lg text-center border border-brand-border">
                    <p class="text-4xl font-bold text-brand-cyan">60</p>
                    <p class="text-text-secondary mt-1">All Project Completed</p>
                </div>
                <div class="bg-brand-light p-6 rounded-lg text-center border border-brand-border">
                    <p class="text-4xl font-bold text-brand-cyan">4</p>
                    <p class="text-text-secondary mt-1">Partnership</p>
                </div>
                 <div class="bg-brand-light p-6 rounded-lg text-center border border-brand-border">
                    <p class="text-4xl font-bold text-brand-cyan">50</p>
                    <p class="text-text-secondary mt-1">Certification</p>
                </div>
                <div class="bg-brand-light p-6 rounded-lg text-center border border-brand-border">
                    <p class="text-4xl font-bold text-brand-cyan">5</p>
                    <p class="text-text-secondary mt-1">Award Winner</p>
                </div>
            </div>
    </section>

        {{-- Tech Stack Infinite Slider Section --}}
    <section class="py-20">
            <div class="text-center mb-12">
                <h2 class="text-sm font-bold uppercase text-brand-cyan tracking-widest">MY TECH STACK</h2>
                <p class="text-3xl md:text-4xl font-bold text-white mt-2">Tools & Technologies I Use</p>
            </div>

            {{-- Slider --}}
            <div class="relative w-full overflow-hidden [mask-image:_linear-gradient(to_right,transparent_0,_black_128px,_black_calc(100%-128px),transparent_100%)]">
                <div class="flex justify-center py-5 px-3 animate-scroll">
                    @php
                        // Duplikasi koleksi untuk efek slider tak terbatas jika ada data
                        $doubledSkills = $skills->isNotEmpty() ? $skills->merge($skills) : collect();
                    @endphp

                    @forelse ($doubledSkills as $skill)
                        <div class="flex-shrink-0 mx-4">
                            <div class="group flex flex-col items-center justify-center w-36 h-36 bg-brand-light border border-brand-border rounded-lg p-4 transition-all duration-300 hover:border-brand-cyan hover:shadow-glow-cyan hover:-translate-y-2">
                                <div class="h-12 w-12 text-text-secondary group-hover:text-white transition-colors">
                                    {{-- Menggunakan IconHelper yang sudah kita bahas sebelumnya --}}
                                    {!! \App\Helpers\IconHelper::getIcon($skill->name) !!}

                                </div>
                                <p class="mt-3 text-sm font-semibold text-text-primary">{{ $skill->name }}</p>
                            </div>
                        </div>
                    @empty
                        <p class="w-full text-center text-text-secondary">No skills to display at the moment.</p>
                    @endforelse
                </div>
            </div>
    </section>


    {{-- Featured Projects Section --}}
    <section class="py-16">
        <div class="text-center mb-12">
            <h2 class="text-sm font-bold uppercase text-brand-cyan tracking-widest">PROJECTS FEATURE</h2>
            <p class="text-3xl md:text-4xl font-bold text-white mt-2">Our Features Projects</p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            {{-- Menggunakan komponen project-card --}}
            @php
                $doubledProjects = $projects->isNotEmpty() ? $projects->merge($projects) : collect();
            @endphp
            @forelse ($doubledProjects as $project)
                <a href="{{$project->link}}">
                    <x-project-card
                    :image="$project->image ? url('storage/' . $project->image) : 'https://placehold.co/600x400/161B22/E6EDF3?text=' . $project->title"
                    :title="$project->title"
                    :category="$project->category"
                />
                </a>
            @empty
                <p class="w-full text-center text-text-secondary">No projects to display at the moment.</p>
            @endforelse
        </div>
        <div class="text-center mt-12">
            <a href="/projects" class="btn btn-primary">View All Projects</a>
        </div>
    </section>

</div>
@endsection

@push('styles')
<style>
/* Animasi untuk glow effect di hero section */
.animate-tilt {
    animation: tilt 10s infinite linear;
}

@keyframes tilt {
    0%, 100% { transform: rotate(0deg); }
    25% { transform: rotate(1deg); }
    50% { transform: rotate(0deg); }
    75% { transform: rotate(-1deg); }
}
/* Animasi untuk scroll effect di tech stack slider */
@keyframes scroll {
    0% {
        transform: translateX(0);
    }
    100% {
        transform: translateX(-100%);
    }
}

.animate-scroll {
    animation: scroll 20s linear infinite alternate;
    white-space: nowrap;
}
</style>
@endpush