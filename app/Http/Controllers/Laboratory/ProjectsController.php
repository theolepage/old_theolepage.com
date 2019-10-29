<?php

namespace App\Http\Controllers\Laboratory;

use App\Helpers\GithubActivityGraph;
use App\Http\Controllers\Controller;
use App\Project;
use App\Setting;

class ProjectsController extends Controller
{
    public function index()
    {
        $projects = Project::where('published', '1')->where('large', true)->get()->reverse();
        $experiments = Project::where('published', '1')->where('large', false)->get()->reverse();
        $setting = Setting::first();

        return view('laboratory.projects.index', [
            'projects' => $projects,
            'experiments' => $experiments,
            'setting' => $setting
        ]);
    }

    public function show($name)
    {
        $project = Project::where('name', $name)->first();

        if(!$project)
        {
            abort(404);
        }

        // Create Github Activity Graph
        $activityGraph = null;
        if ($project->github_repo_name) {
            $activityGraph = new GithubActivityGraph($project->github_repo_username, $project->github_repo_name);
            $activityGraph->create();
        }

        return view('laboratory.projects.show', [
            'project' => $project,
            'activityGraph' => $activityGraph
        ]);
    }
}
