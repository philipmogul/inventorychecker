<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Store Items</title>
</head>
<body>
   <h2>STORE ITEMS</h2>
   <hr />

     <?php 
    /*
        Blade directive is a way to add logic within views 
        eg Conditional statements manipulations of data 
        To use it, start with @ and end with @
    */
    ?>
    




    <h3>Available Items</h3>
    <ul>
        <li><a href="/storeitems/{{$storeitems[0]["id"]}}">{{ $storeitems[0]["name"] }}</a></li>
        <li><a href="/storeitems/{{$storeitems[1]["id"]}}">{{ $storeitems[1]["name"] }}</a></li>
        <li><a href="/storeitems/{{$storeitems[2]["id"]}}">{{ $storeitems[2]["name"] }}</a></li>
        <li><a href="/storeitems/{{$storeitems[3]["id"]}}">{{ $storeitems[3]["name"] }}</a></li>
    </ul>



</body>
</html>