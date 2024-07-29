<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <title>{{ $title ?? 'Laravel 11' }}</title>
</head>

<body class="bg-gray-100">
    @include('layouts.navbar')

    {{ $slot }}

    @vite('resources/js/app.js')
</body>

</html>
