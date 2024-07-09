<?php

use App\Http\Middleware\OnceBasicAuthMiddleware;
use App\Models\Language;
use App\Models\Project;
use Illuminate\Support\Facades\Route;

Route::view('/', 'portfolio', ['projects' => Project::all(), 'languages' => Language::all()]);
Route::get('/projects/{project_id}', function (string $projectId) {
    $project = Project::findOrFail($projectId);

    return view('project', ['project' => $project]);
})->middleware(OnceBasicAuthMiddleware::class)->name('project');
