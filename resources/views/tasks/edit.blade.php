@extends('layouts.app')

@section('content')
    <h2 class='text-white mt-6 mb-6 text-center'>Edit Task</h2>
    <form class="flex flex-col space-y-6 max-w-lg mx-auto px-6" action="{{ route('tasks.update', $task->id) }}" method="POST">
        @csrf @method('PUT')

        <div>
            <label class='text-white mb-2' for="title">Title:</label><br>
            <input type="text" id="title" name="title" value="{{ $task->title }}" required
                class="w-lg p-3 border border-gray-300 rounded">
        </div>

        <div>
            <label class='text-white mb-2' for="description">Description:</label><br>
            <textarea id="description" name="description" class="w-lg p-3 border border-gray-300 rounded">{{ $task->description }}</textarea>
        </div>

        <div>
            <label class='text-white mb-2' for="project_id">Project:</label><br>
            <select id="project_id" name="project_id" required class="w-lg p-3 border border-gray-300 rounded">
                @foreach ($projects as $project)
                    <option value="{{ $project->id }}" {{ $task->project_id == $project->id ? 'selected' : '' }}>
                        {{ $project->name }}
                    </option>
                @endforeach
            </select>
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
