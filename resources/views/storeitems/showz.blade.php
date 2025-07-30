<x-layout>
    

    <style> .custom-card {
      border: 2px solid #28a745; /* Green border */
      width: 600px; height: 350px; margin: 20px auto; /* Centered with margin */
      padding: 20px; /* Padding inside the card */
    }
  </style>

    <div class="card custom-card shadow-sm">
        <div class="card-body">
        <h2 class="card-title">{{ $storeitem->name }}</h2>
         <p class='card-text'>Price: ${{ $storeitem->price }}</p>
         <p class='card-text'>Quantity: {{ $storeitem->quantity }}</p>
         <p class='card-text'>Description: {{ $storeitem->description }}</p>
        </div>
    </div>

    <div class="card">
        
    </div>

</x-layout>