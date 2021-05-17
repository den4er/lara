<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
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

Route::get('/', [PagesController::class, 'mainPage']);
Route::get('/todos', [PagesController::class, 'todosPage']);
Route::get('/todos/done', [PagesController::class, 'todosDone']);
Route::get('/todos/not-done', [PagesController::class, 'todosNotDone']);

Route::get('/students', [PagesController::class, 'studentsPage']);
Route::get('/students/first-cource', [PagesController::class, 'studentsFirst']);
Route::get('/students/second-cource', [PagesController::class, 'studentsSecond']);
Route::get('/students/third-cource', [PagesController::class, 'studentsThird']);
