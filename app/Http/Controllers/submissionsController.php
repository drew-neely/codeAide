<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App;
use Auth;

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

    public function submit(Request $request, $projectId) {
        $submission = new App\Submission;
        $submission->code = $request->all()['code'];
        $submission->userId = Auth::id();
        $submission->project_id = $projectId;
        $submission->save();
    }
}
