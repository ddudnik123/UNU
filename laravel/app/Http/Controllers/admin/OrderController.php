<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Task;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index(Task $task)
    {
        return view('admin.orderIndex', compact('task'));
    }
    public function approve(Task $task)
    {
        $task->update(['status_id' => 3]);
        return redirect()->back();
    }
}
