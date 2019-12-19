<?php

namespace App\Http\ViewComposers;

use App\User;

class NavComposer
{
    public function compose($view)
    {
        $view->with('menu', User::all());
    }
}
