@extends('layouts.app')

@section('title', 'Projects')

@section('content')
<div class="min-h-screen bg-slate-900 py-8">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <!-- Header Section -->
        <div class="mb-8">
            <h1 class="text-3xl font-bold text-white">My Projects</h1>
            <p class="mt-2 text-gray-400">History of all projects you've created</p>
        </div>

        <!-- Projects Grid -->
        @if($projects && count($projects) > 0)
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach($projects as $project)
                    <div class="bg-slate-800 rounded-lg shadow-sm border border-slate-700 hover:shadow-lg hover:border-slate-600 transition-all duration-300">

                        <!-- Project Image (if exists) -->
                        @if($project->image)
                            <div class="relative h-48 overflow-hidden rounded-t-lg">
                                <img src="{{ $project->image }}"
                                     alt="{{ $project->title }}"
                                     class="w-full h-full object-cover">
                            </div>
                        @else
                            <div class="relative h-48 bg-gradient-to-br from-blue-600 to-purple-700 rounded-t-lg flex items-center justify-center">
                                <svg class="w-16 h-16 text-white opacity-50" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                                </svg>
                            </div>
                        @endif

                        <!-- Card Content -->
                        <div class="p-6">
                            <div class="flex items-start justify-between mb-3">
                                <h3 class="text-xl font-semibold text-white line-clamp-1">
                                    {{ $project->title ?? 'Untitled Project' }}
                                </h3>
                            </div>

                            <p class="text-gray-400 text-sm mb-4 line-clamp-3">
                                {{ $project->description ?? 'No description available for this project.' }}
                            </p>

                            <!-- Project Meta -->
                            <div class="flex items-center text-xs text-gray-500 mb-4 space-x-4">
                                @if($project->created_at)
                                    <div class="flex items-center">
                                        <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                        </svg>
                                        <span>{{ $project->created_at->format('M d, Y') }}</span>
                                    </div>
                                @endif

                                @if($project->category)
                                    <div class="flex items-center">
                                        <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z"></path>
                                        </svg>
                                        <span>{{ $project->category }}</span>
                                    </div>
                                @endif
                            </div>

                            <!-- Action Buttons -->
                            <div class="flex gap-2">
                                @if($project->link)
                                    <a href="{{ $project->link }}" target="_blank"
                                       class="flex-1 text-center px-4 py-2 bg-blue-600 text-white text-sm font-medium rounded-md hover:bg-blue-700 transition-colors duration-200">
                                        View Project
                                    </a>
                                @else
                                    <a href="{{ route('projects.show', $project->id) }}"
                                       class="flex-1 text-center px-4 py-2 bg-blue-600 text-white text-sm font-medium rounded-md hover:bg-blue-700 transition-colors duration-200">
                                        View Details
                                    </a>
                                @endif
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            <!-- Empty State -->
            <div class="text-center py-12">
                <svg class="mx-auto h-24 w-24 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                </svg>
                <h3 class="mt-4 text-lg font-medium text-white">No projects yet</h3>
                <p class="mt-2 text-gray-400">Get started by creating your first project.</p>
            </div>
        @endif

    </div>
</div>
@endsection
