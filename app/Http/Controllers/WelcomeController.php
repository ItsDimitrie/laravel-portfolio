<?php

namespace App\Http\Controllers;

class WelcomeController
{
    /**
     * @return \Illuminate\Contracts\View\View
     */
    public function show()
    {
        return view('welcome');
    }
}
