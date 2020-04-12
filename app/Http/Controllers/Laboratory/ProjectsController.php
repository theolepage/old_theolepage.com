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
        $projects = Project::where('published', '1')->get()->reverse();
        $setting = Setting::first();

        $projects_by_label = [];
        foreach ($projects as $project)
        {
            $projects_by_label[$project->category->name][] = $project;
        }

        return view('laboratory.projects.index', [
            'projects' => $projects_by_label,
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

        // Create list of images for carousel
        $carousel = [];
        if ($project->screenshot_url)
            $carousel = explode(' ', $project->screenshot_url);

        return view('laboratory.projects.show', [
            'project' => $project,
            'carousel' => $carousel,
            'activityGraph' => $activityGraph
        ]);
    }
}
