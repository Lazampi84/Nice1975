<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    public function mostra() {
        return view('projects.mostra');
    }
        public function poseidonia() {
        return view('projects.poseidonia');
    }
        public function purificatore() {
        return view('projects.purificatore');
    }
        public function sigarette() {
        return view('projects.sigarette');
    }
}
