<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostTodoRequest;
use App\Http\Requests\PutTodoRequest;
use App\Models\Todo;

class TodoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json(Todo::all());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PostTodoRequest $request)
    {
        $todoData = $request->all();

        $newTodo = Todo::create($todoData);

        return response()->json($newTodo->fresh());
    }

    /**
     * Display the specified resource.
     */
    public function show(Todo $todo)
    {
        return response()->json($todo);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Todo $todo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PutTodoRequest $request, Todo $todo)
    {
        $todo->update($request->all());

        return response()->json($todo->fresh());
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Todo $todo)
    {
        $todo->delete();

        return response()->json('deleted', 204);
    }
}
