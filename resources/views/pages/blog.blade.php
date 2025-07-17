@extends('layouts.app')

@section('title', 'Projects')

@section('content')
<div class="flex items-center justify-center min-h-screen bg-brand-dark px-6 py-16">
    <div class="container mx-auto text-center">

        <!-- Animated Icon -->
        <div class="flex justify-center mb-8 animate-float">
            <!-- Icon: Rocket inside a gear, symbolizing a feature launch and development -->
            <svg class="w-24 h-24 text-brand-cyan" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M15.5 12H8.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M12 15.5V8.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M12 2V2.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M12 21.5V22" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M22 12H21.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M2.5 12H2" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M19.0711 4.92896L18.6961 5.30396" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M5.30396 18.6961L4.92896 19.0711" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M19.0711 19.0711L18.6961 18.6961" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M5.30396 5.30396L4.92896 4.92896" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M15.939,8.061 C15.448,7.57 14.763,7.276 14,7.276 C13.237,7.276 12.552,7.57 12.061,8.061 C11.57,8.552 11.276,9.237 11.276,10 C11.276,10.763 11.57,11.448 12.061,11.939 C12.552,12.43 13.237,12.724 14,12.724 C14.763,12.724 15.448,12.43 15.939,11.939 C16.43,11.448 16.724,10.763 16.724,10 C16.724,9.237 16.43,8.552 15.939,8.061 Z" fill="currentColor" opacity="0.5"/>
                <path d="M10.125,7.25 C9.025,7.25 8.125,8.15 8.125,9.25 L8.125,14.75 C8.125,15.85 9.025,16.75 10.125,16.75 L15.625,16.75 C16.725,16.75 17.625,15.85 17.625,14.75 L17.625,9.25 C17.625,8.15 16.725,7.25 15.625,7.25 L10.125,7.25 Z M12.875,14.125 C12.875,14.425 12.625,14.625 12.375,14.625 L11.375,14.625 C11.125,14.625 10.875,14.425 10.875,14.125 L10.875,9.875 C10.875,9.575 11.125,9.375 11.375,9.375 L12.375,9.375 C12.625,9.375 12.875,9.575 12.875,9.875 L12.875,14.125 Z M14.875,11.5 C14.875,11.8 14.625,12 14.375,12 L13.375,12 C13.125,12 12.875,11.8 12.875,11.5 L12.875,9.5 C12.875,9.2 13.125,9 13.375,9 L14.375,9 C14.625,9 14.875,9.2 14.875,9.5 L14.875,11.5 Z" fill="currentColor"/>
            </svg>
        </div>

        <!-- Main Text Content -->
        <h1 class="text-4xl md:text-6xl font-extrabold text-white leading-tight">
            Coming Soon
        </h1>
        <p class="text-text-secondary mt-4 max-w-2xl mx-auto text-lg">
            We are working hard to bring you something amazing.
            Our new feature is under construction and will be launched very soon. Stay tuned!
        </p>

        <!-- Back to Home Button -->
        <div class="mt-16">
            <a href="{{ route('home') }}" class="btn btn-primary shadow-lg shadow-brand-cyan/20">
                Go Back Home
            </a>
        </div>
    </div>
</div>
@endsection

@push('styles')
<style>
    @keyframes float {
        0% {
            transform: translateY(0px);
        }
        50% {
            transform: translateY(-15px);
        }
        100% {
            transform: translateY(0px);
        }
    }
    .animate-float {
        animation: float 6s ease-in-out infinite;
    }
</style>
@endpush
