<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    // Get all projects
    public function index() : JsonResponse {
        $projects = Project::latest()->get();
        return response()->json([
            'success' => true,
            'data' => $projects
        ], 200);
    }

    // Get single project
    public function show(Project $project) : JsonResponse {
        return response()->json([
            'success' => true,
            'data' => $project
        ], 200);
    }

    // Create new project
    public function store(Request $request) : JsonResponse {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'category' => 'nullable|string|max:255',
            'image' => 'nullable|string|max:255',
            'link' => 'nullable|url|max:255',
        ]);

        $project = Project::create($validated);

        return response()->json([
            'success' => true,
            'message' => 'Project created successfully',
            'data' => $project
        ], 201);
    }

    // Update existing project
    public function update(Request $request, Project $project) : JsonResponse {
        $validated = $request->validate([
            'title' => 'sometimes|required|string|max:255',
            'description' => 'sometimes|required|string',
            'category' => 'nullable|string|max:255',
            'image' => 'nullable|string|max:255',
            'link' => 'nullable|url|max:255',
        ]);

        $project->update($validated);

        return response()->json([
            'success' => true,
            'message' => 'Project updated successfully',
            'data' => $project
        ], 200);
    }

    // Delete project
    public function destroy(Project $project) : JsonResponse {
        $project->delete();

        return response()->json([
            'success' => true,
            'message' => 'Project deleted successfully'
        ], 200);
    }
}
