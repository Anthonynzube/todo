@if($todo->completed)
    <span onclick="event.preventDefault();document.getElementById('form-incomplete-{{$todo->id}}').submit()"
    class="fas fa-check px-2 text-green-500 cursor-pointer"/>
    <form action="{{route('todo.incomplete', $todo->id)}}" id="{{'form-incomplete-'.$todo->id}}" method="post" style="display:none;">
        @csrf
        @method('put')
    </form>
    @else
    <span onclick="event.preventDefault();document.getElementById('form-complete-{{$todo->id}}').submit()"
    class="fas fa-check px-2 text-gray-500 cursor-pointer"/>
    <form action="{{route('todo.complete', $todo->id)}}" id="{{'form-complete-'.$todo->id}}" method="post" style="display:none;">
        @csrf
        @method('put')
    </form>
@endif