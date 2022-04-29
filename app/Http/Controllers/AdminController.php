<?php

namespace App\Http\Controllers;

use App\Models\Quote;
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
        return view('admin.layout.dashboard', ['title' => 'Dashboard']);
    }

    /**
     * Display a listing of the user registration
     *
     */
    public function userRegistration()
    {
        $dataUser = Register::all();
        return view('admin.layout.userRegistration')->with(['registers' => $dataUser, 'title' => 'Users Registration']);
    }
    /**
     * Display a listing of the user in the web
     *
     */
    public function user()
    {
        $dataUser = User::all();
        return view('admin.layout.user')->with(['registers' => $dataUser, 'title' => 'Users']);
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
        User::create([
            'name' => $temp['name'],
            'username' => $temp['Username'],
            'email' => $temp['Email'],
            'password' => $temp['Password'],
        ]);
        return redirect('admin/users-registration');
    }

    /**
     * Show the quote page for creating a new quote.
     *
     * @return \Illuminate\Http\Response
     */
    public function quote()
    {
        return view('admin.layout.quote', ['quotes' => Quote::all(), 'title' => 'Quotes']);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function addQuote()
    {
        return view('admin.layout.addquote', ['title' => 'Quote']);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createquote(Request $request)
    {
        Quote::create([
            'quotes' => $request->quote,
        ]);
        return redirect('admin/quote');
    }
    /**
     * Show the form for update a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function showQuote(Quote $quote)
    {

        return view('admin.layout.updatequote', ['title' => 'Quote', 'quote' => $quote]);
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateQuote(Request $request, $id)
    {
        Quote::where('id', $id)->update([
            'quotes' => $request->quote,
        ]);
        return redirect('admin/quote');
    }
    /**
     * delete the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function deleteQuote(Request $req)
    {
        // return dd($req->id);
        Quote::withTrashed()->where('id', $req->id)->delete();
        return redirect('admin/quote');
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
