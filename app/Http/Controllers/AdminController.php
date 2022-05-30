<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use App\Models\Quote;
use App\Models\Register;
use App\Models\User;
use App\Models\Video;
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
        $countRegister = Register::count();
        $countUser = User::where('level_access',  null)->count() + User::where('level_access', '0')->count();
        $doctor = User::where('level_access', '0')->count();
        $countPatients = Patient::count();
        $countQuotes = Quote::count();
        return view('admin.layout.dashboard', [
            'title' => 'Dashboard',
            'countRegister' => $countRegister,
            'countUser' => $countUser,
            'countPatient' => $countPatients,
            'countQuotes' => $countQuotes,
            'countVideos' => Video::count(),
            'doctor' => $doctor,
        ]);
    }

    /**
     * Display a listing of the user registration
     *
     */
    public function userRegistration()
    {
        $dataUser = Register::all();
        return view('admin.layout.userRegistration')->with([
            'registers' => $dataUser,
            'title' => 'Users Registration',
        ]);
    }
    /**
     * Display a listing of the user in the web
     *
     */
    public function user()
    {
        $dataUser = User::all();
        return view('admin.layout.user')->with([
            'users' => $dataUser,
            'title' => 'Users',
        ]);
    }
    public function addUserPage()
    {
        return view('admin.layout.adduser', ['title' => 'Add User',]);
    }
    public function addUser(Request $request)
    {
        $level_access = null;
        if ($request->status === '0') {
            $level_access = false;
        }
        // return dd($level_access);
        User::create([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'password' => bcrypt('123'),
            'level_access' => $level_access,
        ]);
        return redirect('admin/users')->with('add', 'success');
    }
    /**
     * Show the specified user.
     *
     * @return \Illuminate\Http\Response
     */
    public function showUser(User $user)
    {
        // return dd($user);
        return view('admin.layout.edituser', [
            'title' => 'Edit User',
            'user' => $user,
        ]);
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateUser(Request $request, $id)
    {
        User::where('id', $id)->update([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            // 'status' => $request->status,
        ]);
        return redirect('admin/users')->with('success', 'success');
    }
    /**
     * Remove the users resource from storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function deleteUsers(Request $req)
    {
        User::destroy($req->id);
        Register::destroy($req->id);
        return redirect('admin/users');
    }
    /**
     * accept user registration
     *
     */
    public function accept($id)
    {
        $temp = Register::find($id);
        // return dd($temp['status']);
        $temp->status = true;
        $temp->save();
        $credetials = [
            'name' => $temp['name'],
            'username' => $temp['Username'],
            'email' => $temp['Email'],
            'password' => $temp['Password'],
        ];
        User::create($credetials);
        Patient::create([
            'name' => $temp['name'],
            'username' => $temp['Username'],
            'email' => $temp['Email'],
        ]);
        return redirect('admin/users-registration');
    }
    public function reject($id)
    {
        Register::destroy($id);
        return redirect('admin/users-registration');
    }

    /**
     * Show the quote page  quote.
     *
     * @return \Illuminate\Http\Response
     */
    public function quote()
    {
        return view('admin.layout.quote', [
            'quotes' => Quote::all(),
            'title' => 'Quotes',
        ]);
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
            'author' => $request->author,
        ]);
        return redirect('admin/quotes');
    }
    /**
     * Show the specified quote.
     *
     * @return \Illuminate\Http\Response
     */
    public function showQuote(Quote $quote)
    {
        return view('admin.layout.updatequote', [
            'title' => 'Quote',
            'quote' => $quote,
        ]);
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
            'author' => $request->author,
        ]);
        return redirect('admin/quotes');
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
        Quote::withTrashed()
            ->where('id', $req->id)
            ->delete();
        return redirect('admin/quotes');
    }

    /**
     * Show the videos page  quote.
     *
     * @return \Illuminate\Http\Response
     */
    public function videos()
    {
        return view('admin.layout.videos', [
            'videos' => Video::all(),
            'title' => 'Videos',
        ]);
    }
    /**
     * Show the videos page  quote.
     *
     * @return \Illuminate\Http\Response
     */
    public function addVideos()
    {
        return view('admin.layout.addvideos', ['title' => 'Videos']);
    }
    /**
     * Show the videos page  quote.
     *
     * @return \Illuminate\Http\Response
     */
    public function createVideos(Request $request)
    {
        Video::create([
            'judul_vid' => $request->judul_vid,
            'url' => $request->url,
        ]);
        return redirect('admin/videos');
        // return view('admin.layout.addvideos', ['title' => 'Videos']);
    }
    /**
     * Show the specified video.
     *
     * @return \Illuminate\Http\Response
     */
    public function showVideo(Video $video)
    {
        return view('admin.layout.updatevideos', [
            'title' => 'Video',
            'video' => $video,
        ]);
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateVideo(Request $request, $id)
    {
        Video::where('id', $id)->update([
            'judul_vid' => $request->judul_vid,
            'url' => $request->url,
        ]);
        return redirect('admin/videos');
    }

    /**
     * Remove the videos resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function deleteVideos($id)
    {
        Video::destroy($id);
        return redirect('admin/videos');
    }

    /**
     * Show the patients page.
     *
     * @return \Illuminate\Http\Response
     */
    public function patients()
    {
        return view('admin.layout.patients', [
            'patients' => Patient::all(),
            'title' => 'Patients',
        ]);
    }

    /**
     * Show the patients page.
     *
     * @return \Illuminate\Http\Response
     */
    public function doctors()
    {
        $doctor = User::where('level_access', '0')->get();
        return view('admin.layout.doctors', [
            'doctor' => $doctor,
            'title' => 'Doctors',
        ]);
    }
}
