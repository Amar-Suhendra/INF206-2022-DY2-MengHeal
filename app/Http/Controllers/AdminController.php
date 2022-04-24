<?php

namespace App\Http\Controllers;

use App\Models\Register;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.layout.dashboard');
    }

    /**
     * Display a listing of the user registration
     *
     */
    public function userRegistration()
    {
        $dataUser = Register::all();
        return view('admin.layout.userRegistration')->with(['registers' => $dataUser]);
    }
    /**
     * Display a listing of the user in the web
     *
     */
    public function user()
    {
        $dataUser = User::all();
        return view('admin.layout.user')->with(['registers' => $dataUser]);
    }
    /**
     * accept user registration
     *
     */
    public function accept($id)
    {
        $temp = Register::find($id);
        // return dd($temp['status']);
        $temp->status = True;
        $temp->save();
        return redirect('admin/users-registration');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
