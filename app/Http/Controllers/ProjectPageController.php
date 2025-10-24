<?php


namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectPageController extends Controller
{
    public function index()
    {
        $projects = Project::latest()->get();

        return view('pages.projects', compact('projects'));
    }

    public function show($id)
    {
        $project = Project::findOrFail($id);

        return view('pages.project-detail', compact('project'));
    }

    public function create()
    {
        return view('pages.project-create');
    }

    public function edit($id)
    {
        $project = Project::findOrFail($id);

        return view('pages.project-edit', compact('project'));
    }
}
