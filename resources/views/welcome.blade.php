<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    @vite('resources/css/app.css')
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>
<body>
    <h1 class="success">WELCOME TO LARAVEL</h1>
    <hr />
    <p class="description">This is a simple Laravel application about checking inventory of a store.</p>
    <p><a href="/storeitems"> [ View my store items ] </a></p>
</body>
</html>