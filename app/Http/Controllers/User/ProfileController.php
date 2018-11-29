<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\User;
use App\Models\Gear;

class ProfileController extends Controller
{
    /**
     * Show the profile page for the authenticated user
     */
    public function show()
    {
        $sidebar = 'profile-card';

        $user = User::find(\Auth::id())->with('gear:id,name,category')->first();

        $jsonCatalog = [];
        foreach(Gear::all() as $gear)
        {
            if (!$user->gear->pluck('name')->contains($gear->name))
            {
                $category = str_replace(' ', '', str_replace('&', '-', $gear->category));
                $jsonCatalog[$category][$gear->name] = null;
            }
        }

        return view('user.profile', ['sidebar' => $sidebar, 'user' => $user, 'jsonCatalog' => json_encode($jsonCatalog)]);
    }
}