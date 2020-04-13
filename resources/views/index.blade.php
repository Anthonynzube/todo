@extends('layout')
@section('content')
    <div class="container text-center my-10 mx-auto my-30 shadow-lg rounded max-w-md pb-10">
        <div class="flex justify-between border rounded py-5 px-10">
            <h1 class="text-4xl">All todos</h1>
            <a href="/todos/create" class=" py-3 py-3 mx-5 text-2xl">
                <span class="fas fa-plus-circle text-blue-400"/>
            </a>
        </div>
        <x-alert />
        <div>
            <ul>
                @forelse($todo as $todo)
                    <li class="text-2xl py-3 px-5 flex justify-between">

                        <div>
                            @include('completeButton')
                        </div>
                        @if($todo->completed)
                        <p class="line-through">{{$todo->title}}</p>
                        @else
                        <p>{{$todo->title}}</p>
                        @endif

                        <div>
                            <a href="/todos/{{$todo->id}}/edit" class="cursor-pointer">
                                <span class="fas fa-edit px-2 text-orange-400"/>
                            </a>

                            <span class="fas fa-trash px-2 text-red-600 cursor-pointer"
                                        onclick="event.preventDefault();
                                            if(confirm('Are you sure?')){
                                                document.getElementById('form-delete-{{$todo->id}}')
                                                .submit()
                                            }" />
                            
                            <form action="{{route('todo.delete', $todo->id)}}" id="{{'form-delete-'.$todo->id}}" method="post" style="display:none;">
                                @csrf
                                @method('put')
                            </form>
                        </div>
                        
                        
                    </li>
                @empty
                    <p class="pt-5">No Todos available, create one.</p>
                    
                @endforelse
            </ul>
        </div>
        
    </div>
@endsection