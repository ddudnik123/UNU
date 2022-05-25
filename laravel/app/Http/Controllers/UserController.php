<?php

namespace App\Http\Controllers;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class UserController extends Controller
{

public function profile(User $user)
{
    Carbon::setlocale(config('app.locale'));
    $created = Carbon::parse($user->created_at)->diffForHumans();
    return view('user.profile', compact('user', 'created'));
}

}
