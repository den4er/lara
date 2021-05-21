<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ $title }}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
        <h1>{{ $title }}</h1>

        <a href="/">Главная страница</a>
        <a href="/todos">Все задачи</a>
        <a href="/todos/done">Выполнено</a>
        <a href="/todos/not-done">Не выполнено</a>

        <a href="/students">Список студентов</a>

    </body>
</html>
