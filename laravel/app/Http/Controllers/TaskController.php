<?php

namespace App\Http\Controllers;

use App\Http\Requests\TaskStoreRequest;
use App\Models\Categorie;
use App\Models\Task;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TaskController extends Controller
{
    public function create(Categorie $categorie)
    {
        $user = Auth::user();
        return view('task.create', compact('user', 'categorie'));
    }

    public function fastOrder()
    {
        $user = Auth::user();
        $categories = Categorie::all();
        return view('task.fastOrder', compact('user', 'categories'));
    }

    public function store(TaskStoreRequest $request)
    {
        $uid = Auth::user()->id;
        Task::create([
            'name' => $request->name,
            'link' => $request->link,
            'description' => $request->description,
            'reportDescription' => $request->reportDescription,
            'rate' => $request->rate,
            'click_count' => 0,
            'customer_id' => $uid,
            'categorie_id' => $request->categorie_id,
            'status_id' => 2,
        ]);
        return redirect()->back();
    }

    public function search()
    {
        $user = Auth::user();
        $tasks = Task::where('status_id',3)->get();
        return view('task.search', compact('tasks', 'user'));
    }

    public function show(Task $task)
    {
        $user = Auth::user();
        return view('task.show', compact('task', 'user'));
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
       return redirect()->back();
    }


}
