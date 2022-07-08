<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::domain('pj{project}')->group(function () {
    Route::get('pj{project}', [\App\Http\Controllers\ProjectController::class, 'view_id'])->name('project')->where('project', '[0-9]+');
//});

Route::get('/', [\App\Http\Controllers\HomeController::class, 'view']);
