<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Todo;
use App\Http\Requests\TodoCreateRequest;

class TodoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $todo = auth()->user()->todos->sortByDesc('created_at')->sortBy('completed');

        return view('index', compact('todo'));
    }

    public function create()
    {
        return view('create');
    }

    public function show(Todo $todo)
    {
        return view('show', compact('todo'));
    }

    public function store(TodoCreateRequest $request)
    {
        $todo = auth()->user()->todos()->create($request->all());

        if ($request->step) {
            foreach ($request->step as $step) {
                $todo->steps()->create(['name' => $step]);
            }
        }
        
        return redirect()->route('todo.index')->with('message', 'Todo created successfully!');
    }

    public function edit(Todo $todo)
    {
        // return $todo->steps;
        return view('edit', compact('todo'));
    }

    public function update(TodoCreateRequest $request, Todo $todo)
    {
        // dd($request->step);
        $todo->update([
            'title' => $request->title,
            'description' => $request->description,
        ]);
        if ($request->step) {
            foreach ($request->step as $step) {
                $todo->steps()->update(['name' => $step]);
            }
        }
        return redirect()->route('todo.index')->with('message', 'Updated Successfully');
    }

    public function complete(Todo $todo)
    {
        $todo->update(['completed' => true]);

        return redirect()->back()->with('message', 'Todo Completed');
    }

    public function incomplete(Todo $todo)
    {
        $todo->update(['completed' => false]);

        return redirect()->back()->with('message', 'Todo Updated');
    }

    public function destroy(Todo $todo)
    {
        $todo->steps->each->delete();
        $todo->delete();

        return redirect()->back()->with('message', 'Todo Deleted');
    }
}
