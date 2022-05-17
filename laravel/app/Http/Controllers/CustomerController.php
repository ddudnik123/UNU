<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CustomerController extends Controller
{

    public function profile()
    {
        $user = Auth::user();
        return view('customer.profile', compact('user'));

    }
    public function orders(User $user)
    {
        $tasks = $user->orders;
        $user = Auth::user();
        return view('customer.myOrders', compact('tasks', 'user'));
    }
}
