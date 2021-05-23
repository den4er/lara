<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use App\Models\Student;
use App\Models\Article;

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


    /*
     *
     * методы для работы со студентами
     *
     */

    public function studentsPage()
    {
        // выбираем все данные из таблицы
        $students = Student::all();

        return view('students', [
           'title' => 'Список студентов',
            'students' => $students,
        ]);
    }

    public function studentsFirst()
    {

        $students = Student::where('course_number', 1)->get();

        return view('students', [
            'title' => 'Список студентов 1 курса',
            'students' => $students,
        ]);
    }

    public function studentsSecond()
    {
        $students = Student::where('course_number', 2)->get();

        return view('students', [
            'title' => 'Список студентов 2 курса',
            'students' => $students,
        ]);
    }

    public function studentsThird()
    {
        $students = Student::where('course_number', 3)->get();

        return view('students', [
            'title' => 'Список студентов 3 курса',
            'students' => $students,
        ]);
    }

    /*
     *
     * методы для работы с блогом
     *
     */
    public function blogPage()
    {

        $articles = Article::all();

        return view('blog', [
           'title' => 'Список статей',
            'articles' => $articles,
        ]);
    }

    public function articlePage($id)
    {
        $article = Article::find($id);

        if(!$article)
        {
            return abort(404);
        }

        return view('article', [
            'article' => $article,
        ]);
    }

    public function articleUpdatePage($id)
    {
        $article = Article::find($id);

        if(!$article)
        {
            return abort(404);
        }

        return view('article_update', [
           'title' => 'Изменение статьи',
           'article' => $article,
        ]);
    }

}
