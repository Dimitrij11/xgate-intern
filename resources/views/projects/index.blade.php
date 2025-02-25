@extends('layouts.app')

@section('content')
    <h2 class='text-white mt-4 mb-4'>Projects</h2>
    <div>
        <a class='text-white' href="{{ route('projects.create') }}">Create Project</a>
    </div>
    <table class="w-lg mt-6">
        <tr>
            <th class='text-white px-4 py-2'>Name</th>
            <th class='text-white px-4 py-2'>Description</th>
            <th class='text-white px-4 py-2'>Actions</th>
        </tr>
        @foreach ($projects as $project)
            <tr>
                <td class='text-white px-4 py-2'>{{ $project->name }}</td>
                <td class='text-white px-4 py-2'>{{ $project->description }}</td>
                <td class='text-white px-4 py-2'>
                    <a href="{{ route('projects.edit', $project->id) }}" class="mr-4">Edit</a>
                    <form action="{{ route('projects.destroy', $project->id) }}" method="POST" style="display:inline;">
                        @csrf @method('DELETE')
                        <button type="submit" class="text-red-500">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
@endsection
