<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App;
use DB;
use Auth;

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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function welcome() {
        $projects = DB::table('projects')->get();
        $userProjects = array();
        foreach ($projects as $p) {
            if($p->userId == Auth::id()) {
                array_push($userProjects, $p);
            }
        }

        return view('welcome', compact('userProjects'));
    }
}
