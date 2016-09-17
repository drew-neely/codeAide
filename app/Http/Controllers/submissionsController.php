<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class submissionsController extends Controller
{
    public function index(){
    	return view('submissions.index');
    }
}
