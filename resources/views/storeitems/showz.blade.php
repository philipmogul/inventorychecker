<x-layout>
    

    <style> .custom-card {
      border: 2px solid #28a745; /* Green border */
      width: 600px; min-height: 350px; margin: 20px auto; /* Centered with margin */
      padding: 20px; /* Padding inside the card */
    }
  </style>

    <div class="card custom-card shadow-sm">
        <div class="card-body">
        <h2 class="card-title">{{ $storeitem->name }}</h2>
         <p class='card-text'>Price: ${{ $storeitem->price }}</p>
         <p class='card-text'>Quantity: {{ $storeitem->quantity }}</p>
         <p class='card-text'>Description: {{ $storeitem->description }}</p>
          <?php 
                 // Deleting Store Items
          ?>
          <form id="delete-form" action="{{ route('storeitems.destroy', $storeitem->id) }}" method="POST">
              @csrf
              @method('DELETE')
              <input type="submit" class="btn btn-danger" value="Delete {{ $storeitem->name }}" onclick="event.preventDefault(); if(confirm('Are you sure you want to delete this item?')) { document.getElementById('delete-form').submit(); }">
          </form>
        </div>
    </div>

    <div class="card">
        
    </div>

</x-layout>