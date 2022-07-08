<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Group;
use App\Models\Project;

class GroupController extends Controller
{
    public function get_id(Group $group){

        return $group->toJson();
    }
    public function view_projects_group(Group $group){

        return view('viewproject', [
            'projects' => $group->projects,
        ]);
    }
}
