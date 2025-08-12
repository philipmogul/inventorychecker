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
   

    <ul>
        @foreach ($storeitems as $item)
         <li>
            <? /*REPLACED DEFAULT ROUTES WITH NAMED ROUTES */ ?>
             <x-card href="{{ route('storeitems.show', $item->id) }}" :highlight="$item['price'] > 25">
                 <h4>{{ $item->name }}</h4>
                 <p>Price: ${{ $item->price }}</p>
                 <p>Quantity: {{ $item->quantity }}</p>
                <?php 
                    // How to access database items from models 
                    // use the syntax: $item->method_name->property_name
                    // In this case, we are accessing the storeCategory method from the Store model
                ?>

             </x-card>
         </li>   
        @endforeach
    </ul>

    <br /><br />
    
    <div class="pagination">
        {{ $storeitems->links() }} <!-- This will render pagination links -->
    </div>

    <br /><br />


</x-layout>