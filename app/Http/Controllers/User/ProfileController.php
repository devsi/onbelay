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
        $user = User::find(\Auth::id())->with('gear:id,name,category')->first();

        $jsonCatalog = [];
        foreach(Gear::all() as $gear)
        {
            $category = str_replace(' ', '', str_replace('&', '-', $gear->category));
            $jsonCatalog[$category][$gear->name] = null;
        }

        return view('user.profile', ['user' => $user, 'jsonCatalog' => json_encode($jsonCatalog)]);
    }
}