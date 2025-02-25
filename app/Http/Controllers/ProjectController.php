<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use Illuminate\Support\Facades\Auth;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::all();
        return view('projects.index', compact('projects'));
    }

    public function create()
    {
        return view('projects.create');
    }

    public function store(Request $request)
    {

        $request->validate([

            'name' => 'required',
            'description' => 'nullable',
        ]);

        $userId = Auth::id();
        $project = Project::create([
            'user_id' => $userId,
            'name' => $request->name,
            'description' => $request->description,

        ]);
        return redirect()->route('projects.index')->with('success', 'Project created successfully.');
    }

    public function edit(Project $project)
    {
        return view('projects.edit', compact('project'));
    }

    public function update(Request $request, Project $project)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'nullable',
        ]);

        $project->update($request->all());
        return redirect()->route('projects.index')->with('success', 'Project updated successfully.');
    }

    public function destroy(Project $project)
    {
        $project->delete();
        return redirect()->route('projects.index')->with('success', 'Project deleted successfully.');
    }
}
