<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>STORE LAYOUT</title>
</head>
<body>
   <header>
    <nav>
        <h1>STORE LAYOUT</h1>
        <ul>
            <li><a href="/storeitems">All Items</a></li>
            <li><a href="/storeitems/create">Add Item</a></li>
        </ul>
   </header>


   <main>
       {{ $slot }}
   </main>



</body>
</html>