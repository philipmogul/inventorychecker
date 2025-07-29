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
    
    @if( $coder == "Philip" )
    <h3>Welcome, {{ $coder }}!</h3>
    <p>Here are your store items:</p>
    @endif 




    <h3>Available Items</h3>
    <ul>
        @foreach ($storeitems as $item)
         <li>
            <p>{{ $item['name'] }}</p>
            <a href="/storeitems/{{ $item['id'] }}">[ View {{ $item['name'] }} ]</a>
         </li>   
        @endforeach
    </ul>



</body>
</html>