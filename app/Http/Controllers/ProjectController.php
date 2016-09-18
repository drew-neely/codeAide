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

        if(is_null($project)) {
            return "Project not found";
        }

        $users = DB::table('users')->get();
        $user = NULL;
        foreach ($users as $u) {
            if($u->id == $project->userId) {
                $user = $u;
            }
        }

        $submissions = DB::table('submissions')->get();
        $problemSubmissions = array();
        foreach ($submissions as $s) {
            if($s->id == $project->userId) {
                array_push($problemSubmissions, $s);
            }
        }

        $data = array('project' => $project, 'user' => $user, 'submissions' => $submissions);

    	return view('projects.individualproject', compact('data'));
    }

    public function createProject() {

        return view('projects.createproject');
    }

    public function bulletin() {
        return view('projects.bulletin');
    }
}
