<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function create() {
        return view('task.create');
    }

    public function fastOrder()
    {
        return view('task.fastOrder');
    }
    public function store(Request $request)
    {
        Task::create([
            'name' => $request->name,
            'description' => $request->description,
            'description' => $request->descriptionj,
        ]);
    }
}
