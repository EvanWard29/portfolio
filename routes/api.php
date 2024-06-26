<?php

use App\Http\Middleware\OnceBasicAuthMiddleware;
use App\Models\Project;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'projects', 'middleware' => OnceBasicAuthMiddleware::class], function () {
    // List projects
    Route::get('', function () {
        return Project::all();
    });

    // Create a project
    Route::post('', function () {
        return Project::create(request()->input());
    });

    // Update a project
    Route::put('{project_id}', function (int $projectId) {
        $project = Project::findOrFail($projectId);

        $project->update(request()->input());

        return $project;
    });

    // Delete a project
    Route::delete('{project_id}', function (int $projectId) {
        Project::findOrFail($projectId)->delete();

        return response()->json();
    });
});
