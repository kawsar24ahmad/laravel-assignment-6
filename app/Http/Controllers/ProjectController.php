<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProjectController extends Controller
{
    public function showProject() {
        $projects = Storage::json('project.json');
        return view('project', compact('projects'));
    }

    public function showDetails($id) {
        $projects = Storage::json('project.json');
    
        $project = null;
        foreach ($projects as $proj) {
            if ($proj['id'] == $id) {
                $project = $proj;
                break;
            }
        }
    
        if (!$project) {
            abort(404, 'Project not found');
        }
        return view('project-details', compact('project'));
    }
}
