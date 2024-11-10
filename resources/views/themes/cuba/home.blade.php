<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('cuba/cuba.css') }}">
    <title>Главная</title>
</head>
<body>
    <h1>Главная страница - Cuba</h1>
    @include('nav.navbar')
    <form action="/save" method="POST">
        @csrf
        <select name="theme">
            <option value="classic">Classic</option>
            <option value="cuba" selected>Cuba</option>
        </select>
        <button type="submit">Сохранить</button>
    </form>
</body>
</html>