<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\User;

class ProfileController extends Controller
{    
    /**
     * Show the profile page for the authenticated user
     */
    public function show()
    {
        $user = \Auth::user();

        return view('user.profile', compact('user'));
    }
}