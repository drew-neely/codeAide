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
            if($s->project_id == $project->id) {
                array_push($problemSubmissions, $s);
            }
        }

        $solutionUsernameCodePairs = array();
        foreach($problemSubmissions as $s) {
            $owner = 'Submitter not found';
            foreach($users as $u) {
                if($u->id == $s->userId) {
                    $owner = $u->name;
                }
            }
            $pair = array('username' => $owner, 'code' => $s->code);
            array_push($solutionUsernameCodePairs, $pair);
        }

        $data = array('project' => $project, 'user' => $user, 'solutionUsernameCodePairs' => $solutionUsernameCodePairs);

    	return view('projects.individualproject', compact('data'));
    }

    public function createProject() {

        return view('projects.createproject');
    }

    public function bulletin() {
        $projects = DB::table('projects')->get();
        // $title = NULL;
        // $description = NULL;

        // foreach ($projects as $p) {
        //     $title = $p->title;
        //     $description = $p->description;
        // }
        // $bullet = array('title' => $title, 'description'=> $description);
        return view('projects.bulletin', compact('projects'));
    }
}
