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

<div class="card mt-5 shadow rounded border-2 border-success" style="width: 300px;" @class(['hightlight'=> $highlight])>
   <div class="card-body">
    {{ $slot }}
    <a {{ $attributes }} class="btn btn-success"> [ View Details ] </a>
   </div>
</div>