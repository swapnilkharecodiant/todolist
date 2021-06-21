<?php

namespace Codiant\Todolist\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Codiant\Todolist\Models\Task;

class TodolistController extends Controller
{
    public function index()
    {
        return redirect()->route('task.create');
    }

    public function create()
    {
        $tasks = Task::all();
        $submit = 'Add';
        return view('todolist::list', compact('tasks', 'submit'));
    }

    public function store(Request $request)
    {
        $input = $request->all();
        Task::create($input);
        return redirect()->route('task.create');
    }

    public function edit($id)
    {
        $tasks = Task::all();
        $task = $tasks->find($id);
        $submit = 'Update';
        return view('todolist::list', compact('tasks', 'task', 'submit'));
    }

    public function update(Request $request)
    {
        $id = $request->id;
        $input = $request->all();
        $task = Task::findOrFail($id);
        $task->update($input);
        return redirect()->route('task.create');
    }

    public function destroy(Request $request)
    {
        $id = $request->id;
        $task = Task::findOrFail($id);
        $task->delete();
        return redirect()->route('task.create');
    }
}
