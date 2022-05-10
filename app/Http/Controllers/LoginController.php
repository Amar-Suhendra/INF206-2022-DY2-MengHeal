<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;


class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('login');
    }

    /**
     * validate username & password
     *
     * @return \Illuminate\Http\Response
     */
    public function validation(Request $request)
    {
        if (Auth::attempt(['Username' => $request->Username, 'password' => $request->Password])) {
            $request->session()->regenerate();
            if ((User::where('username', $request->Username)->first()->level_access) === 1) {
                return redirect()->intended('admin');
            } else if ((User::where('username', $request->Username)->first()->level_access) === 0) {
                return redirect()->intended('doctor');
                // return "Sukses";
            } else {
                return redirect()->intended('/index')->with('status', 'sukses');
            }
        }

        return back()->with(
            'error',
            'Login gagal'
        );
    }

    /**
     * Logout account.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('');
    }
}
