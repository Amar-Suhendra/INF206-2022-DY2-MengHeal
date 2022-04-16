<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function konsulLangsung()
    {
        return view('antrian');
    }
    public function getAntrian()
    {
    }
    public function konsulOnline()
    {
        return view('konsul');
    }
}
