<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class accountsController extends Controller
{
    public function index(){
    	return view('profile.index');
    }

}
