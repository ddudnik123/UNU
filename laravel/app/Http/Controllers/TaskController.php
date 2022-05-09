<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TaskController extends Controller
{
    public function create()
    {
        $user = Auth::user();
        return view('task.create', compact('user'));
    }

    public function fastOrder()
    {
        $user = Auth::user();
        return view('task.fastOrder', compact('user'));
    }

    public function store(Request $request)
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
        ]);
        return redirect()->back();
    }

    public function search()
    {
        $user = Auth::user();
        $tasks = Task::all();
        return view('task.search', compact('tasks', 'user'));
    }


}
