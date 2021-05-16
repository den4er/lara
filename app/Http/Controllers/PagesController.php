<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

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
        /*
        * Добавление записи в таблицу при обновлении страницы
        *
        *
        $todo = Todo::create([
           'title' => 'Прочитать книгу',
            'note' => 'Начиная со стр 66',
        ]);
        */

        $todos = Todo::All();

        return view('todos', [
           'title' => 'Список дел',
            'todos' => $todos,
        ]);
    }
}
