<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        @isset($title)
        {{ $title }} / Laravel 11
        @else
        Laravel 11
        @endisset
    </title>
</head>
<body>
<ul>
        <li><a href="/">home</a></li>
        <li><a href="/about">about</a></li>
        <li><a href="/contact">contact</a></li>
        <li><a href="/gallery">gallery</a></li>
    </ul>
    {{ $slot }}
</body>
</html>