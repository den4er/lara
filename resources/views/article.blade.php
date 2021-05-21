<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $article->title }}</title>
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
        .article{
            width: 1100px;
            margin: 0 auto;
            background: #daecf8;
        }
    </style>
</head>
<body class="antialiased">

    <div class="article">
        <h1>{{ $article->title }}</h1>
        <p>{{ $article->body }}</p>

        <ul class="list-group">
            @foreach($article->comments as $comment)
                <li class="list-group-item">{{ $comment->body }}</li>
            @endforeach
        </ul>
    </div>
</body>
</html>
