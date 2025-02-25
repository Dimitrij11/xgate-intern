@extends('layouts.app')

@section('content')
    <div class="mt-10">
        <h2 class='text-white text-center font-bold'>Create Task</h2>
    </div>
    <div class="max-w-md mx-auto px-4 mt-6">
        <form class='space-y-6' action="{{ route('tasks.store') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label class='text-white block mb-2' for="title">Title:</label>
                <input id="title" type="text" name="title" required class="w-lg p-3 border border-gray-300 rounded">
            </div>
            <div class="mb-4">
                <label class='text-white block mb-2' for="description">Description:</label>
                <textarea id="description" name="description" class="w-lg p-3 border border-gray-300 rounded"></textarea>
            </div>
            <div class="mb-4">
                <label class='text-white block mb-2' for="project_id">Project:</label>
                <select id="project_id" name="project_id" required class="w-lg p-3 border border-gray-300 rounded">
                    <option value="">Select Project</option>
                    @foreach ($projects as $project)
                        <option value="{{ $project->id }}">{{ $project->name }}</option>
                    @endforeach
                </select>
            </div>
            <div>
                <button class='w-lg p-3 bg-green-500 hover:bg-green-700 rounded text-white' type="submit">Save</button>
            </div>
        </form>
    </div>
@endsection
