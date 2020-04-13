@extends('layout')
@section('content')
    <div class="container text-center my-10 mx-auto my-20 shadow-lg rounded max-w-sm ">
        <h1 class="text-2xl border rounded p-4">Update your Todo</h1>
        <x-alert />
        <form action="/todos/{{$todo->id}}/edit" method="post" class="py-5">
            @csrf
            @method('patch')
            <input type="text" name="title" class="py-2 px-2 border" value="{{$todo->title}}"/>
            <input type="submit" value="Update" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded"/>
        </form>
    </div>

    <div class="text-center">
        <a href="/todos" class="bg-blue-400 my-10 text-white py-2 px-2 mx-5 rounded">Back</a>
    </div>

@endsection