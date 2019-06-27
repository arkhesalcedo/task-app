<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;

class TasksController extends Controller
{
    // Ideally, we would need a service to fetch records but i don't want to over engineer this
    public function index()
    {
        return response()->json([
            'data' => Task::all(), // for the simplicity of the test app, we're just gonna call everything. do not do this on real app
        ], 200);
    }

    public function store(Request $request)
    {
        // We're skipping validation for the sake of simplicity
        $task = Task::create([
            'title' => $request->title
        ]);

        return response()->json([
            'data' => $task,
        ], 201);
    }

    public function update(Request $request, Task $task)
    {
        $task->completed = ! $task->completed;
        $task->save();

        return response()->json([
            'data' => $task,
        ], 200);
    }
}
