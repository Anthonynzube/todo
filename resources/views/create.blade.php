@extends('layout')
@section('content')
    <div class="container text-center my-10 mx-auto my-20 shadow-lg rounded max-w-sm">
        <div class="flex justify-between border rounded py-5 px-10">
            <h1 class="text-4xl">Create a Todo</h1>
            <a href="/todos" class=" py-3 mx-5 text-2xl">
                <span class="fas fa-arrow-circle-left text-gray-600"/>
            </a>
        </div>
        
        <x-alert />
        <form action="/todos/create" method="post" class="py-5">
            @csrf
            <div class="py-2">
                <input type="text" name="title" class="py-2 px-2 border" placeholder="Title"/>
            </div>
            <div class="py-2">
                <textarea name="description" class="py-2 px-4 border" placeholder="Description" /></textarea>
            </div>
            <div class="flex justify-center py-2">
                <h1 class="text-lg">Add Step(s) if required</h1>
                <span class="fas fa-plus text-blue-600 py-2 px-2 cursor-pointer"/>
            </div>
            <div class="py-2">
                <input type="text" name="step" class="py-2 px-2 border" placeholder="Describe Step"/>
            < /div>
            <div class="py-2">
                <input type="submit" value="Create" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded"/>
            </div>
        </form>
    </div>

@endsection