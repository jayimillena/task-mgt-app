@extends('layouts.app')

@section('title', 'Task Management App')

@section('content')
<div class="max-w-5xl mx-auto mt-10 bg-sky-100 p-6 rounded-lg shadow-lg">
    <div class="mb-4">
        <a href="{{ route('task.create') }}"
           class="inline-block bg-sky-600 text-white py-2 px-4 rounded hover:bg-sky-700 font-semibold focus:outline-none focus:ring-2 focus:ring-sky-500">
           Add Task
        </a>
    </div>

    <div class="overflow-x-auto">
        <table class="w-full border border-sky-300 bg-white rounded-lg text-left">
            <thead class="bg-sky-600 text-white">
                <tr>
                    <th class="p-3">Task</th>
                    <th class="p-3">Description</th>
                    <th class="p-3">Long Description</th>
                    <th class="p-3">Date Created</th>
                    <th class="p-3">Date Updated</th>
                    <th class="p-3">Option</th>
                </tr>
            </thead>
            <tbody>
                @foreach($tasks as $task)
                <tr class="border-b border-sky-200 hover:bg-sky-50">
                    <td class="p-3">{{ $task->task }}</td>
                    <td class="p-3">{{ $task->description }}</td>
                    <td class="p-3">{{ $task->long_description }}</td>
                    <td class="p-3">{{ isset($task->created_at) ? $task->created_at->diffForHumans() : '' }}</td>
                    <td class="p-3">{{ isset($task->updated_at) ? $task->updated_at->diffForHumans() : '' }}</td>
                    <td class="p-3">
                        <a href="#" class="text-sky-600 hover:text-sky-800">Edit</a> /
                        <a href="#" class="text-red-600 hover:text-red-800">Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
