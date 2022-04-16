<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        if (Auth::attempt(['npm' => $request->npm, 'password' => $request->password])) {
            if ((User::where('npm', $request->npm)->first()->is_admin) === 1) {
                $request->session()->regenerate();
                return redirect()->intended('admin/dashboard');
            } else if (User::where('npm', $request->npm)->first()->is_admin !== 1) {
                $request->session()->regenerate();
                return redirect()->intended('');
            }
        }

        return back()->with(
            'error',
            'Login gagal'
        );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
