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
            <div class=" my-5">
                <h3 class="text-xl my-2 font-medium">Task Description</h3>
                <p class=" pb-5">{{$todo->description}}</p>
                
            </div>

        @if($todo->steps->count() > 0)
            <h3 class="text-xl my-2 font-medium">Step(s) for this task</h3>
            <div class=" pb-5">
                @foreach($todo->steps as $step)
                    
                    <p>{{$step->name}}</p>
                    
                @endforeach
            </div>
        @endif
        </div>
    </div>

@endsection