@extends('layouts.app')

@section('content')
    <h2 class='text-white mt-6 mb-6 text-center'>Edit Project</h2>
    <form class="flex flex-col space-y-6 max-w-lg mx-auto px-6" action="{{ route('projects.update', $project->id) }}"
        method="POST">
        @csrf @method('PUT')

        <div>
            <label class='text-white mb-2' for="name">Name:</label><br>
            <input type="text" id="name" name="name" value="{{ $project->name }}" required
                class="w-lg p-3 border border-gray-300 rounded">
        </div>

        <div>
            <label class='text-white mb-2' for="description">Description:</label><br>
            <textarea id="description" name="description" class="w-lg p-3 border border-gray-300 rounded">{{ $project->description }}</textarea>
        </div>

        <div>
            <button
                style="width: 5%; padding: 8px; border: 2px solid #006018; background-color: #2baa22; color: white; border-radius: 8px; transition: background-color 0.3s ease;"
                type="submit">
                Update
            </button>
        </div>
    </form>
@endsection
