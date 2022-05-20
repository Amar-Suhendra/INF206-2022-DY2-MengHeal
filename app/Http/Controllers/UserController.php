<?php

namespace App\Http\Controllers;

use App\Models\Antrian;
use App\Models\Patient;
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
        $date = date('Y-m-d');
        if ((Antrian::where('username', auth()->user()->username)->first()) !== null) {
            $data = Antrian::where('username', auth()->user()->username)->first();
            $antrian = $data['no_antrian'];
            $jadwal = $data['tanggal_konsul'];
            return view('antrian', [
                'antrian' => $antrian, 'jadwal' => $jadwal, 'title' => 'Antrian', 'status' => true,
            ]);
        } else if (Antrian::all()->last()) {
            $data = Antrian::all()->last();
            $antrian = $data['no_antrian'] + 1;
            $jadwal = $data['tanggal_konsul'];
        } else {
            $antrian = null;
            $jadwal = null;
        }
        return view('antrian', [
            'antrian' => $antrian, 'jadwal' => $jadwal, 'title' => 'Antrian', 'tanggal' => $date,
        ]);
    }
    public function getAntrian()
    {
        $date = date('Y-m-d');
        $data = Antrian::all()->last();
        // menambah jumlah konsultasi
        $pasien = Patient::where('username', auth()->user()->username)->first();
        $jumlah_konsul = $pasien['jumlah_konsul'];
        $jumlah_konsul += 1;
        $pasien->update(['jumlah_konsul' => $jumlah_konsul]);
        if ($data) {
            // menambah no antrian
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
            'tanggal_konsul' => date('Y-m-d', strtotime($date . ' + 2 days')),
        ]);
        return redirect('/konfirmasi');
    }
    public function konsulOnline()
    {
        return view('konsul', [
            'title' => 'Konsultasi Online',
        ]);
    }
}
