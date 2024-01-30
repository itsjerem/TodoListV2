<?php

namespace App\Http\Controllers;

use App\Http\Requests\TaskFormRequest;
use App\Models\Task;
use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tasks = Task::all();
        return view('tasks.index', compact('tasks'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        $users = User::all();

        return view('tasks.create', compact('categories', 'users')); // Passer les utilisateurs à la vue
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TaskFormRequest $request)
    {
        $task = Task::create($request->except('_token'));
        return redirect()->route('tasks.show', $task->id);
    }

    /**
     * Display the specified resource.
     */
    public function show(Task $task)
    {
        return view('tasks.show', compact('task'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Task $task)
    {
        $categories = Category::all();
        $users = User::all(); // Récupérer tous les utilisateurs

        return view('tasks.edit', compact('task', 'categories', 'users')); // Passer les utilisateurs à la vue
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(TaskFormRequest $request, Task $task)
    {
        $task->update($request->all());

        return redirect()->route('tasks.show', $task->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Task $task)
    {
        $task->delete();
        return redirect()->route('home');
    }
}
