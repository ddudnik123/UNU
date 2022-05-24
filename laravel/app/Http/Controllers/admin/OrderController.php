<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\TaskStoreRequest;
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
        return redirect()->route('admin.ordersAll');
    }
    public function block(Task $task)
    {
        $task->update(['status_id' => 1]);
        return redirect()->route('admin.ordersAll');
    }
    public function edit(Task $task)
    {
        return view('admin.taskEdit', compact('task'));
    }
    public function update(TaskStoreRequest $request)
    {
        $task = Task::findOrFail($request->task_id);
        $task->update([
            'name' => $request->name,
            'link' => $request->link,
            'description' => $request->description,
            'reportDescription' => $request->reportDescription,
            'rate' => $request->rate,
            'click_count' => 0,
            'categorie_id' => $request->categorie_id,
        ]);
        return redirect()->route('admin.ordersAll');
    }

}
