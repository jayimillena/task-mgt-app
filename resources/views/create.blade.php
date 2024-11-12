@extends('layouts.app')

@section('title', 'Task Management App - Create')

@section('content')
<div class="max-w-lg mx-auto mt-10 bg-sky-100 p-8 rounded-lg shadow-lg">
    <form action="{{ route('task.store') }}" method="post" class="space-y-6">
        @csrf
        <div>
            <label for="task" class="block text-sky-700 font-semibold">Task</label>
            <input type="text" name="task" placeholder="Enter a task"
                   class="w-full mt-2 p-2 border border-sky-300 rounded focus:outline-none focus:ring-2 focus:ring-sky-500" />
        </div>

        <div>
            <label for="description" class="block text-sky-700 font-semibold">Description</label>
            <textarea name="description" cols="30" rows="3" placeholder="Enter a description"
                      class="w-full mt-2 p-2 border border-sky-300 rounded focus:outline-none focus:ring-2 focus:ring-sky-500"></textarea>
        </div>

        <div>
            <label for="long_description" class="block text-sky-700 font-semibold">Long Description</label>
            <textarea name="long_description" cols="30" rows="10" placeholder="Enter a long description"
                      class="w-full mt-2 p-2 border border-sky-300 rounded focus:outline-none focus:ring-2 focus:ring-sky-500"></textarea>
        </div>

        <div>
            <button type="submit" name="save"
                    class="w-full py-2 px-4 bg-sky-600 text-white font-semibold rounded hover:bg-sky-700 focus:outline-none focus:ring-2 focus:ring-sky-500">
                Save
            </button>
        </div>
    </form>
</div>
@endsection
