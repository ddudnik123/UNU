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
    $lastSeen = Carbon::parse($user->last_seen)->diffForHumans();
    return view('user.profile', compact('user', 'created', 'lastSeen'));
}

}
