<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function store(Request $request) : JsonResponse {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'category' => 'nullable|string|max:255',
            'image' => 'nullable|string|max:255',
            'link' => 'nullable|url|max:255',
        ]);

        $project = Project::create($validated);

        return response()->json($project, 201);
    }
}
