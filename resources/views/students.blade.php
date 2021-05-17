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

    <ul class="list-group">
        @foreach($students as $student)
            <li class="list-group-item d-flex justify-content-between align-items-center">

                    <p style="color: #6d6d6d;">{{ $student->first_name }}</p>

            </li>
        @endforeach
    </ul>

</body>
</html>
