<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function view(){
        $projects = \App\Models\Project::all();
        return view('home', [
            'projects' => $projects,
        ]);
    }
}
