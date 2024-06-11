<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    public function progetti() {
        return view('projects.progetti');
    }

}
