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

{{--  форма для изменения статьи  --}}
<form class="m-3" method="post" action="/article/update">
    @csrf
    <input type="hidden" name="id" value="{{ $article->id }}">
    <div class="mb-3">
        <label for="title" class="form-label">Title</label>
        <input type="text" name="title" class="form-control" id="title" value="{{ $article->title }}">
    </div>
    <div class="mb-3">
        <label for="body" class="form-label">Content</label>
        <textarea name="body" class="form-control" id="body" rows="3">{{ $article->body }}</textarea>
    </div>
    <button type="submit" class="btn btn-success">Save changes</button>
</form>

</body>
</html>
