<?php

namespace App\Http\Controllers;

use App\Models\Antrian;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view('landing', ['title' => 'Home']);
    }
    public function konsulLangsung()
    {
        if ((Antrian::where('username', auth()->user()->username)->first()) !== null) {
            $data = Antrian::where('username', auth()->user()->username)->first();
            $antrian = $data['no_antrian'];
            return view('antrian', [
                'antrian' => $antrian, 'title' => 'antrian', 'status' => true,
            ]);
        } else if (Antrian::all()->last()) {
            $data = Antrian::all()->last();
            $antrian = $data['no_antrian'];
        } else {
            $antrian = null;
        }
        return view('antrian', [
            'antrian' => $antrian, 'title' => 'antrian',
        ]);
    }
    public function getAntrian()
    {
        $data = Antrian::all()->last();
        if ($data) {
            $no_antrian = $data['no_antrian'];
            $no_antrian++;
        } else {
            $no_antrian = 1;
        }
        $username = auth()->user()->username;
        // menulis no antrian ke dalam database
        Antrian::create([
            'username' => $username,
            'no_antrian' => $no_antrian,
        ]);
        return redirect('konsultasi-langsung');
    }
    public function konsulOnline()
    {
        return view('konsul', [
            'title' => 'Konsultasi Online',
        ]);
    }
}
