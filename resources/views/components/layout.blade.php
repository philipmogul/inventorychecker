<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>STORE LAYOUT</title>
    @vite('resources/css/app.css')
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>
<body>
   <header>
    <nav class="navbar navbar-expand bg-dark navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="#">MyShop</a>
            <ul class="navbar-nav ms-auto d-flex flex-row gap-3">
                <li class="nav-item">
                    <a class="nav-link active" href="/welcome">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/storeitems">All Items</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/storeitems/create">Add item</a>
                </li>
            </ul>
        </div>
    </nav>
</header>



   <main>
       {{ $slot }}
   </main>



</body>
</html>