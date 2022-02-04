<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    // method
    public function index()
    {
        return \view('profile', [
            "active" => "Profile",
            "title" => "Profile | Pemrograman Web 1"
        ]);
    }
}
