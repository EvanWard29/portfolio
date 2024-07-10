<?php

use App\Http\Middleware\OnceBasicAuthMiddleware;
use App\Models\Project;
use App\Models\Skill;
use Illuminate\Support\Facades\Route;

Route::view('/', 'portfolio', ['projects' => Project::all(), 'skills' => Skill::all()]);
Route::get('/projects/{project_id}', function (string $projectId) {
    $project = Project::findOrFail($projectId);

    return view('project', ['project' => $project]);
})->middleware(OnceBasicAuthMiddleware::class)->name('project');
