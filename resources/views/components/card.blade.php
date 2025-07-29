<?php
/*
Layout for styling components like cards.
This file is used to define the structure of a card component that can be reused 
across different views
*/

/*
You can pass attributes using props, like in reactjs 
*/


/*
Accessing the highlight prop passed by the items page 
*/
?>
@props(['highlight' => false])

{{-- If highlight is true, add a special class for styling --}}

<div @class(['hightlight'=> $highlight]) style="border: 2px solid black; padding: 10px; margin: 10px;width: 200px;">
    {{ $slot }}
    <a {{ $attributes }} class="btn"> [ View Details ] </a>
</div>