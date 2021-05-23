<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ $title }}</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
            .list-group{
                max-width: 800px;
                margin: 20px;
            }
        </style>
    </head>
    <body class="antialiased">
        <h1>{{ $title }}</h1>

        {{--  форма для добавления статьи в базу  --}}
        <form class="m-3" method="post" action="/article">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" name="title" class="form-control" id="title">
            </div>
            <div class="mb-3">
                <label for="body" class="form-label">Content</label>
                <textarea name="body" class="form-control" id="body" rows="3"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Add article</button>
        </form>

        {{-- вывод всех статей --}}
        <div class="list-group">
            @foreach($articles as $article)
            <a href="/article/{{ $article->id }}" class="list-group-item list-group-item-action" aria-current="true">
                <div class="d-flex w-100 justify-content-between">
                    <h5 class="mb-1">{{ $article->title }}</h5>
                    <small>{{ $article->created_at->format('d.m.Y') }}</small>
                </div>
                <p class="mb-1">{{ $article->body }}</p>
            </a>

            <div class="d-flex">
                {{-- изменение статьи  --}}
                <a href="/article/{{ $article->id }}/update" class="btn btn-success m-3" style="width: 100px">Update</a>
                {{-- форма для удаления статьи  --}}
                <form action="/article/delete" method="post">
                    @csrf
                    <input type="hidden" name="id" value="{{ $article->id }}">
                    <button class="btn btn-danger mt-3 mb-3" style="width: 100px">Delete</button>
                </form>

            </div>

            @endforeach
        </div>

    </body>
</html>
