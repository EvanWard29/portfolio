<?php

use App\Http\Middleware\OnceBasicAuthMiddleware;
use App\Models\Project;
use Illuminate\Support\Facades\Route;

Route::view('/', 'portfolio', ['projects' => Project::all()]);
Route::get('/projects/{project_id}', function (Project $project) {
    return view('project', ['project' => $project]);
})->middleware(OnceBasicAuthMiddleware::class)->name('project');
