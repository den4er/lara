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

        <a href="/">Главная страница</a>
        <a href="/todos">Все задачи</a>
        <a href="/todos/done">Выполнено</a>
        <a href="/todos/not-done">Не выполнено</a>

        <ul class="list-group">
            @foreach($todos as $todo)
            <li class="list-group-item d-flex justify-content-between align-items-center">
                <div>
                    {{ $todo->title }}
                    <p style="font-size: 12px; color: #6d6d6d;">{{ $todo->note }}</p>
                </div>
                @if($todo->status)
                    <span class="alert alert-success">Выполнено</span>
                @else
                    <span class="alert alert-danger">Не выполнено</span>
                @endif
            </li>
            @endforeach
        </ul>

    </body>
</html>
