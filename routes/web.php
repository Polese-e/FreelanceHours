<?php

use App\Http\Controllers\ProjectController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ProjectController::class, 'index']);
Route::get('/project/{project}', [ProjectController::class, 'show'])->name('projects.show');
