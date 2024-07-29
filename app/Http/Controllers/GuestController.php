<?php

namespace App\Http\Controllers;

class GuestController extends Controller
{
    public function beranda()
    {
        return view('guest.beranda');
    }
}
