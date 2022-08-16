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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');//change to dashboard by Mahdi
Route::get('/tasksCalendar', [App\Http\Controllers\TasksController::class, 'tasksCalendar'])->name('tasksCalendar');//change by Mahdi
Route::get('/tasksList', [App\Http\Controllers\TasksController::class, 'list'])->name('tasksList');//change by Mahdi
Route::get('/tasksListDelete', [App\Http\Controllers\TasksController::class, 'listDelete'])->name('tasksListDelete');//change by Mahdi
Route::get('/task/{task_id}', [App\Http\Controllers\TasksController::class, 'edit'])->where('task_id', '[0-9]+')->name('taskEdit');//change by Mahdi
Route::get('/taskCreate', [App\Http\Controllers\TasksController::class, 'create'])->name('taskCreate');//change by Mahdi
Route::get('/tasksFullCalendar', [App\Http\Controllers\TasksController::class, 'tasksFullCalendar'])->name('tasksFullCalendar');//change by Mahdi

Route::get('/usersList', [App\Http\Controllers\UserController::class, 'list'])->name('usersList');//change by Mahdi

// Route::get('/fullcalendar', function () {//by Mahdi
//     return view('fullcalendar');
// });
