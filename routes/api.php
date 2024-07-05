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
    Route::put('{project_id}', function (string $projectId) {
        $project = Project::findOrFail($projectId);

        $validated = request()->validate([
            'title' => ['string'],
            'description' => ['string'],
            'languages' => ['array'],
            'languages.*' => ['string'],
            'links' => ['array'],
            'links.*' => ['url'],
        ]);

        $project->update($validated);

        return to_route('project', ['project_id' => $projectId]);
    });

    // Delete a project
    Route::delete('{project_id}', function (int $projectId) {
        Project::findOrFail($projectId)->delete();

        return response()->json();
    });
});
