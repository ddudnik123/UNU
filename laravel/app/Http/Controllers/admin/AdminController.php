<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }

    public function ordersAll()
    {
        $tasks = Task::all();
        return view('admin.orders', compact('tasks'));
    }

    public function ordersConsideration()
    {
        $tasks = Task::where('status_id', 2)->get();
        return view('admin.orders', compact('tasks'));
    }

    public function ordersInProgress()
    {
        $tasks = Task::where('status_id', 3)->get();
        return view('admin.orders', compact('tasks'));
    }

    public function ordersBlocked()
    {
        $tasks = Task::where('status_id', 1)->get();
        return view('admin.orders', compact('tasks'));
    }

    public function ordersFinished()
    {
        $tasks = Task::where('status_id', 4)->get();
        return view('admin.orders', compact('tasks'));
    }

}
