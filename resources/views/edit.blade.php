@extends('layout')
@section('content')
    <div class="container text-center my-10 mx-auto my-20 shadow-lg rounded max-w-md ">
        <div class="flex justify-between border rounded py-5 px-10">
            <h1 class="text-4xl">Update your Todo</h1>
            <a href="/todos" class=" py-3 mx-5 text-2xl">
                <span class="fas fa-arrow-circle-left text-gray-600"/>
            </a>
        </div>
        <x-alert />
        <form action="/todos/{{$todo->id}}/update" method="post" class="py-5">
            @csrf
            <div class="py-2">
                <p class="text-xl font-normal">Title</p>
                <input type="text" name="title" class="py-2 px-2 border" placeholder="Title" value="{{$todo->title}}"/>
            </div>
            <div class="py-2">
                <p class="text-xl font-normal">Description</p>
                <textarea type="text" name="description" class="py-2 px-4 border"placeholder="Description"/>{{$todo->description}}</textarea>
            </div>
            @if($todo->steps->count() > 0)
                <p class="text-xl font-normal">Step(s) for this task</p>
                @foreach($todo->steps as $step)
                <div class="py-2">
                    <input type="text" name="step[]" class="py-2 px-2 border" placeholder="{{'Describe Step'}}" value="{{$step->name}}"/>
                </div>
                @endforeach
            @endif
            <div class="py-2">
                <input type="submit" value="Update" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded"/>
            </div>
        </form>
    </div>

@endsection