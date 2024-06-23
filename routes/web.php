<?php

use App\Models\Project;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('portfolio', ['projects' => Project::all()]);
});
