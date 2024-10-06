<?php

namespace App\Controllers;

class menu extends BaseController
{
    public function menusito(): string
    {
        return view('menu').
        view('head').
        view('footer');
    }
}
