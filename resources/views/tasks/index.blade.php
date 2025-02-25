@extends('layouts.app')

@section('content')
    <h2 class='text-white mt-4 mb-4'>Tasks</h2>
    <a class='text-white' href="{{ route('tasks.create') }}">Create Task</a>

    <table class="w-lg mt-6">
        <tr class='text-white'>
            <th class='text-white px-4 py-2'>Title</th>
            <th class='text-white px-4 py-2'>Description</th>
            <th class='text-white px-4 py-2'>Project</th>
            <th class='text-white px-4 py-2'>Actions</th>
        </tr>
        @foreach ($tasks as $task)
            <tr class='text-white'>
                <td class='text-white px-4 py-2'>{{ $task->title }}</td>
                <td class='text-white px-4 py-2'>{{ $task->description }}</td>
                <td class='text-white px-4 py-2'>{{ $task->project->name ?? 'No Project' }}</td>
                <td class='px-4 py-2 '>
                    <a href="{{ route('tasks.edit', $task->id) }}" class="mr-4">Edit</a>
                    <form action="{{ route('tasks.destroy', $task->id) }}" method="POST" style="display:inline;">
                        @csrf @method('DELETE')
                        <button type="submit">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
@endsection
