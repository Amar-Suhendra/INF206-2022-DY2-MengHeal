<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function konsulLangsung()
    {
        $antrian = User::all()->last();
        return view('antrian', [
            'antrian' => $antrian, 'title' => 'antrian',
        ]);
    }
    public function getAntrian()
    {
    }
    public function konsulOnline()
    {
        return view('konsul', [
            'title' => 'Konsultasi Online',
        ]);
    }
}
