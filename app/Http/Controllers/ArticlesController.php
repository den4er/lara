<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class ArticlesController extends Controller
{

    // метод обработки формы, ему передаем объект класса Request
    public function store(Request $request)
    {
        // берем только заголовок и текст статьи
        $data = $request->only('title', 'body');

        // записываем данные в базу
        $article = Article::create([
            'title' => $data['title'],
            'body' => $data['body'],
        ]);

        // если все ок, возвращаемся обратно
        if($article)
        {
            return redirect()->back();
        }
    }

    public function destroy(Request $request)
    {
        // ищем статью в базе по идентификатору
        $article = Article::find($request->id);

        // если статьи нет в бд
        if(!$article)
        {
            // выводим ош 404
            return abort(404);
        }

        // удаляем статью
        $article->delete();

        // возвращаемся назад
        return redirect()->back();
    }
}
