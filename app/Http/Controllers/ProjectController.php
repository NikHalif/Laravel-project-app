<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Imange;
use Illuminate\Http\Request;

use Illuminate\Http\File;
use Illuminate\Support\Facades\Storage;

class ProjectController extends Controller
{
    public function get_id(Project $project){

        return $project->toJson();
    }
    public function view_id(Project $project){

        return view('project', ['project' => $project ]);
    }

}
