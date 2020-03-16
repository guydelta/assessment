<?php

namespace App\Http\Controllers;

use App\TaskFighter;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        return response()->json(TaskFighter::all(),200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request)
    {
        $task = TaskFighter::create($request->all());
        return response()->json($task, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\TaskFighter  $taskFighter
     * @return \Illuminate\Http\JsonResponse
     */
    public function show(TaskFighter $taskFighter)
    {
        return response()->json($taskFighter, 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\TaskFighter  $taskFighter
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(Request $request, TaskFighter $taskFighter)
    {
        $taskFighter->update($request->all());
        return response()->json($taskFighter, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\TaskFighter  $taskFighter
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy(TaskFighter $taskFighter)
    {
        $taskFighter->delete();
        return response()->json(null, 204);
    }
}
