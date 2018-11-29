<?php
namespace App\Http\ViewComposers;

use App\User;
use Illuminate\View\View;

class ProfileViewComposer
{
    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $user = User::find(\Auth::id())->with('gear:id,name,category')->first();

        $view->with('user', $user);
    }
}