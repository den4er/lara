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

        <div class="list-group">
            @foreach($articles as $article)
            <a href="/article/{{ $article->id }}" class="list-group-item list-group-item-action" aria-current="true">
                <div class="d-flex w-100 justify-content-between">
                    <h5 class="mb-1">{{ $article->title }}</h5>
                    <small>{{ $article->created_at->format('d.m.Y') }}</small>
                </div>
                <p class="mb-1">{{ $article->body }}</p>
            </a>
            @endforeach
        </div>

    </body>
</html>
