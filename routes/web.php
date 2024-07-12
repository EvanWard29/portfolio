<?php

use App\Http\Middleware\OnceBasicAuthMiddleware;
use App\Models\Project;
use App\Models\Skill;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    // Always return DB results for local env
    if (app()->isLocal()) {
        return view('portfolio', ['projects' => Project::all(), 'skills' => Skill::all()]);
    }

    $projects = Cache::rememberForever('projects', function () {
        return Project::all();
    });

    $skills = Cache::rememberForever('skills', function () {
        return Skill::all();
    });

    return view('portfolio', ['projects' => $projects, 'skills' => $skills]);
});

Route::get('/projects/{project_id}', function (string $projectId) {
    $project = Project::findOrFail($projectId);

    return view('project', ['project' => $project]);
})->middleware(OnceBasicAuthMiddleware::class)->name('project');
