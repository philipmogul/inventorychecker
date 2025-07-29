<x-layout>
<?php 
/*
Layouts are kinda like templates that can be reused across multiple views.
You can define a layout in a separate file and then use it in your views.
Check out the components/layout.blade.php file for the layout definition.
It helps to keep your code DRY (Don't Repeat Yourself) by allowing you to
reuse the same layout structure across different pages.
*/
?>



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
</x-layout>