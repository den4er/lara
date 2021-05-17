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
        * //Добавление записи в таблицу при обновлении страницы
        *
        *
        $todo = Todo::create([
           'title' => 'Прочитать книгу',
            'note' => 'Начиная со стр 66',
        ]);
        */

        /*
        // найти данные по идентификатору 1
        $todo = Todo::find(1);

        // изменение статуса
        $todo->status = 1;
        $todo->save();
        */

        /*
        // удаление строки по идентификатору
        $todo->delete();
        */

        // получение всех данных из таблицы
        $todos = Todo::All();

        return view('todos', [
           'title' => 'Список дел',
            'todos' => $todos,
        ]);
    }

    public function todosDone()
    {
        $todos = Todo::where('status', 1)->get();

        return view('todos_done', [
            'title' => 'Выполненные задачи',
            'todos' => $todos,
        ]);
    }

    public function todosNotDone()
    {
        $todos = Todo::where('status', 0)->get();

        return view('todos_not_done', [
            'title' => 'Не выполненные задачи',
            'todos' => $todos,
        ]);
    }

}
