<?php

namespace App\Http\Controllers;

use App\Models\Register;
use App\Models\Patient;
use App\Models\Antrian;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    /**
     * Display a dashbord
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $today = DB::table('patients')
            ->join('antrians', 'patients.username', '=', 'antrians.username')
            ->select(
                'patients.name',
                'antrians.tanggal_konsul',
                'antrians.no_antrian',
                'patients.email'
            )
            ->where('antrians.tanggal_konsul', '=', date('Y-m-d'))
            ->get();
        $today = json_decode($today, true);
        $todayCount = count($today);

        $tomorrow = DB::table('patients')
            ->join('antrians', 'patients.username', '=', 'antrians.username')
            ->select(
                'patients.name',
                'antrians.tanggal_konsul',
                'antrians.no_antrian',
                'patients.email'
            )
            ->where('antrians.tanggal_konsul', '=', date('Y-m-d', strtotime('+1 day')))
            ->get();
        $tomorrow = json_decode($tomorrow, true);
        $tomorrowCount = count($tomorrow);

        $countPatients = Patient::count();

        return view('doctor.layout.dashboard', [
            'title' => 'Dashboard',
            'countPatients' => $countPatients,
            'todayCount' => $todayCount,
            'tomorrowCount' => $tomorrowCount,
        ]);
    }

    /**
     * Display a Schedule
     *
     * @return \Illuminate\Http\Response
     */
    public function schedule()
    {
        $today = DB::table('patients')
            ->join('antrians', 'patients.username', '=', 'antrians.username')
            ->select(
                'patients.name',
                'antrians.tanggal_konsul',
                'antrians.no_antrian',
                'patients.email'
            )
            ->where('antrians.tanggal_konsul', '=', date('Y-m-d'))
            ->get();
        $today = json_decode($today, true);
        $todayCount = count($today);

        $tomorrow = DB::table('patients')
            ->join('antrians', 'patients.username', '=', 'antrians.username')
            ->select(
                'patients.name',
                'antrians.tanggal_konsul',
                'antrians.no_antrian',
                'patients.email'
            )
            ->where('antrians.tanggal_konsul', '=', date('Y-m-d', strtotime('+1 day')))
            ->get();
        $tomorrow = json_decode($tomorrow, true);
        $tomorrowCount = count($tomorrow);

        $jadwal = DB::table('patients')
            ->join('antrians', 'patients.username', '=', 'antrians.username')
            ->select(
                'patients.name',
                'antrians.tanggal_konsul',
                'antrians.no_antrian',
                'patients.email'
            )
            ->get();
        $jadwal = json_decode($jadwal, true);
        return view('doctor.layout.jadwal', [
            'schedule' => $jadwal,
            'today' => $today,
            'todayCount' => $todayCount,
            'tomorrow' => $tomorrow,
            'tomorrowCount' => $tomorrowCount,
            'title' => 'Schedule',
        ]);
    }

    /**
     * Display a Online Consultation
     *
     * @return \Illuminate\Http\Response
     */
    public function onlineConsultation()
    {
        return view('doctor.layout.konsul', [
            'title' => 'Online Consultation',
        ]);
    }

    /**
     * Display a patients page
     *
     * @return \Illuminate\Http\Response
     */
    public function patients()
    {
        return view('doctor.layout.patients', [
            'patients' => Patient::all(),
            'title' => 'Patients',
        ]);
    }
}
