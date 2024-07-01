<?php

use App\Models\Project;
use Illuminate\Support\Facades\Route;

Route::view('/', 'portfolio', ['projects' => Project::all()]);
