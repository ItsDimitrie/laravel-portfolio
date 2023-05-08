<?php

namespace App\Http\Controllers;

class PictureOfTheDayController
{
    /**
     * @return \Illuminate\Contracts\View\View
     */
    public function show()
    {
        return view('potd');
    }
}
