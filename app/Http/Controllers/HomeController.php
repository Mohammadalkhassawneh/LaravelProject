<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

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
        return view('publicSite.index');
        //  return view('auth.handleuser');

    }

    public function show($id)
    {

        $user = User::find($id);
        return view('publicSite.index',compact('user'));
    }
    public function handleAdmin()
    {
        return redirect('admin');
    }

}
