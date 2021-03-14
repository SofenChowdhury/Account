<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if (auth()->user()->is_admin == 1){
            return redirect()->to('auth/dashboard');
        }
        return view('home');
    }

    public function user()
    {
        $users = User::where('is_admin','!=',1)->get();
        return view('admin.user.index',compact('users'));
    }
}
