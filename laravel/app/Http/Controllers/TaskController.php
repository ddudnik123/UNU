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
       // dd($request);
        Task::create([
            'name' => $request->name,
            'link' => $request->link,
            'description' => $request->description,
            'reportDescription' => $request->reportDescription,
            'rate' => $request->rate,
            'click_count' => 0,


        ]);
        return redirect()->back();
    }
}
