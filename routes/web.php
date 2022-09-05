<?php

use App\Http\Controllers\ProjectController;
use App\Http\Controllers\TaskController;
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

// Route::get('/', function () {
//     return view('main');
// });
Route::get('/', [ProjectController::class, 'index']);
Route::get('/get/all/projects', [ProjectController::class, 'getAllProjects'])->name('projects.fetch');
Route::post('/save/project', [ProjectController::class, 'save'])->name('save.project');
Route::post('/save/task', [TaskController::class, 'save'])->name('save.task');
Route::get('/get/task', [TaskController::class, 'get'])->name('get.task');
Route::post('/check/task', [TaskController::class, 'check'])->name('check.task');
Route::get('/get/task/detail/{id}', [TaskController::class, 'detail'])->name('get.task.details');
