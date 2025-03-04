<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Task;

/**
 * @OA\Get(
 *     path="/api/tasks",
 *     summary="Obtener todas las tareas",
 *     @OA\Response(response="200", description="Lista de tareas")
 * )
 */

class TaskController extends Controller
{
   
    public function index()
    {
        return Task::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $task = Task::create($request -> all());
        return response()->json($task,201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Task $task)
    {
        return $task;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Task $task)
    {
        $task->update($request->all());
        return response()->json($task,200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Task $task)
    {
        $task->delete();
        return response()->json(null,204);
    }
}
