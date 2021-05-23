<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ArticlesController;
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


/*
 *
 *  маршруты списка дел
 *
 */
Route::get('/', [PagesController::class, 'mainPage']);
Route::get('/todos', [PagesController::class, 'todosPage']);
Route::get('/todos/done', [PagesController::class, 'todosDone']);
Route::get('/todos/not-done', [PagesController::class, 'todosNotDone']);


/*
 *
 *  маршруты списка студентов
 *
 */
Route::get('/students', [PagesController::class, 'studentsPage']);
Route::get('/students/first-cource', [PagesController::class, 'studentsFirst']);
Route::get('/students/second-cource', [PagesController::class, 'studentsSecond']);
Route::get('/students/third-cource', [PagesController::class, 'studentsThird']);


/*
 *
 *  маршруты блога
 *
 */
Route::get('/articles', [PagesController::class, 'blogPage']);
Route::get('/article/{id}', [PagesController::class, 'articlePage']);


/*
 *
 *  маршруты добавления постов
 *
 */
Route::post('/article', [ArticlesController::class, 'store']);
Route::post('/article/delete', [ArticlesController::class, 'destroy']);
