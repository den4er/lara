<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //main
    public function mainPage()
    {
        return view('welcome', [
           'title' => 'Главная страница',
        ]);
    }

    // deals
    public function todosPage()
    {
        return view('todos', [
           'title' => 'Список дел',
        ]);
    }
}
