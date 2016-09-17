<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Log;
use App\Http\Requests;

class submissionsController extends Controller
{
    public function index($projectId){
    	$projects = DB::table('projects')->get();
    	$project = NULL;
    	foreach ($projects as $p) {
    		if($p->id == $projectId) {
    			$project = $p;
    		}
    	}
    	return view('submissions.index', compact('project'));
    }
}
