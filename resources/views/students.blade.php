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

    <a href="/students">Все студенты</a>
    <a href="/students/first-cource">1 курс</a>
    <a href="/students/second-cource">2 курс</a>
    <a href="/students/third-cource">3 курс</a>

    <ul class="list-group" style="display: flex">
        @foreach($students as $student)
            <li class="list-group-item d-flex justify-content-between align-items-center" style="color: #6d6d6d; list-style: none; margin: 10px; padding: 10px; background: #ceebf8;">


                <p>Имя: {{ $student->first_name }}</p>
                <p>Фамилия: {{ $student->last_name }}</p>
                <p>Возраст: {{ $student->age }}</p>
                <p>Группа: {{ $student->group_number }}</p>
                <p>Курс: {{ $student->course_number }}</p>
                <p>Специальность: {{ $student->specialty }}</p>

            </li>
        @endforeach
    </ul>

</body>
</html>
