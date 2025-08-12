<x-layout>

<div class="card" style="width: 600px; min-height: 350px; margin: 20px auto; padding: 20px; border: 2px solid #28a745;">
    <h2 class="card-title">Create Store Item</h2>
    <hr />

    <form action="{{ route('storeitems.store') }}" method="POST">
        @csrf 
        <label for="name">Name: </label>
        <input type="text" value="{{ old('name') }}" name="name" id="name" class="form-control" placeholder="Enter item name" required>
        <br />
        <label for="skill">Quantity: </label>
        <input type="number" value="{{ old('quantity') }}" id="quantity" name="quantity" class="form-control" placeholder="Quantity (0 - 100)" />
        <br />
        <label for="price">Price: </label>
        <input type="number" id="price" value="{{ old('price') }}" name="price" class="form-control" placeholder="Price (0 - 1000)" />
        <br />
        <label for="store_categories_id">Store Category: </label>
        <input type="number" class="form-control" value="{{ old('store_categories_id') }}" id="store_categories_id" name="store_categories_id" placeholder="Category (1 - 10)" />
        <br />
        <label for="description">Description: </label>
        <textarea id="description" class="form-control" name="description" class="form-control" placeholder="Enter item description" rows="4">value="{{ old('description') }}"</textarea>
        <br />
        
        <button type="submit" class="btn btn-success">Create Item</button>


        <?php 
            // Validation errors
        ?>
        @if ($errors->any())
            <div class="alert alert-danger mt-3">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif


    </form>

    <?php 
    /*
        To post this: 
        I went to web.php and added a route for the store item creation.
        I created a controller method to handle the form submission.
    */
    ?>

</div>

</x-layout>