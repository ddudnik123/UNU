<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ExecutorController extends Controller
{
    public function dashboard()
    {
        $user = Auth::user();
        return view('executor.dashboard', compact('user'));

    }
}
