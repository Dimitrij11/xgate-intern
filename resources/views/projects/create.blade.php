@extends('layouts.app')

@section('content')
    <div class="mt-5">
        <h2 class='text-white text-center'>Create Project</h2>
    </div>
    <div class="max-w-md mx-auto px-4 mt-6">
        <form class='space-y-6' action="{{ route('projects.store') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label class='text-white block mb-2' for="name">Name:</label>
                <input id="name" type="text" name="name" required class="w-lg p-3 border border-gray-300 rounded">
            </div>
            <div class="mb-4">
                <label class='text-white block mb-2' for="description">Description:</label>
                <textarea id="description" name="description" class="w-lg p-3 border border-gray-300 rounded"></textarea>
            </div>
            <div>
                <button class='w-lg p-3 bg-green-500 hover:bg-green-700 rounded text-white' type="submit">Save</button>
            </div>
        </form>
    </div>
@endsection
