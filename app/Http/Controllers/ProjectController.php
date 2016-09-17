<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;

class ProjectController extends Controller
{
    public function index($projectId) {
    	$projects = DB::table('projects')->get();
    	$project = NULL;
    	foreach ($projects as $p) {
    		if($p->id == $projectId) {
    			$project = $p;
    		}
    	}
    	return view('projects.individualproject', compact('project'));
    }

    public function createProject() {

        return view('projects.createproject')
    }
}
