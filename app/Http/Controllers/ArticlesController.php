<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class ArticlesController extends Controller
{

    // метод обработки формы добавления статьи, ему передаем объект класса Request
    public function store(Request $request)
    {
        // берем только заголовок и текст статьи
        $data = $request->only(['title', 'body']);

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

    // метод для удаления статьи
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

    // запись изменения статьи в бд
    public function update(Request $request)
    {
        $data = $request->only(['id', 'title', 'body']);

        $article = Article::find($data['id']);

        if(!$article)
        {
            return abort(404);
        }

        $article->title = $data['title'];
        $article->body = $data['body'];
        $article->save();

        return redirect()->to('/articles');
    }
}
