<?php

namespace App\Http\Controllers;


use App\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index() {
        return Task::all();
    }
    public function store(Request $request) {
        echo($request);
        return Task::create($request->all());
    }
    
    public function show(Task $task) {
        return $task;
    }
    public function update(Request $request, Task $task) {
        dd($request);
        $task->update($request->all());
        return $task;
    }
    public function destroy(Task $task) {
        $task->delete();
        return $task;
    }
}
