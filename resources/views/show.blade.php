@extends('layout')
@section('content')
    <div class="container text-center my-10 mx-auto my-20 shadow-lg rounded max-w-sm">
        <div class="flex justify-between border rounded py-2 px-10">
            <h1 class="text-4xl">{{$todo->title}}</h1>
            <a href="/todos" class=" py-3 mx-5 text-2xl">
                <span class="fas fa-arrow-circle-left text-gray-600"/>
            </a>
        </div>

        <div>
            <div>
                <p class=" py-3 mx-5 text-2xl">{{$todo->description}}</p>
            </div>
        </div>
    </div>

@endsection