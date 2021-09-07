<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;

class ProjectController extends Controller
{
    public function getProjects(Request $request){
        try{
            $projects = Project::all();
            return response()->json(['message' => $projects]);
        } catch(Exception $e){
            return response()->json(['message' => $e->getMessage()]);
        }
    }
}
