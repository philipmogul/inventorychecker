<?php

namespace App\Http\Controllers;

use App\Models\Store;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function index()
    {
        //fetch all records and pass to index view 
        // $storeitems = Store::orderBy('created_at','desc')->get(); 

        // LOAD WITH PAGINATION
         $storeitems = Store::orderBy('created_at','desc')->paginate(10); 

        // Assuming you have a Store model that interacts with the database

        return view('storeitems.items', ["storeitems" => $storeitems]);
    }

    public function show($id)
    {
        //fetch a single record by id and pass to show view
        $storeitem = Store::findOrFail($id);
        return view('storeitems.showz', ["storeitem" => $storeitem]);
    }

    public function create()
    {
        //return the create view for adding a new store item

        return view('storeitems.create');
    }

    public function store(Request $request)
    {
        //handle the form submission to create a new store item
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'price' => 'required|numeric|min:0|max:1000',
            'quantity' => 'required|integer|min:0|max:100',
            'store_categories_id' => 'required|numeric|min:0',
        ]);

        // Create a new store item
        Store::create($validated);

        // Redirect to the index page with a success message
        return redirect()->route('storeitems.index')->with('success', 'Store item created successfully.');

    }

    public function edit($id)
    {
        //fetch a single record by id and pass to edit view
        $storeitem = Store::findOrFail($id);
        return view('storeitems.edit', ["storeitem" => $storeitem]);
    }

    public function destroy($id)
    {
        //delete a store item by id
        $storeitem = Store::findOrFail($id);
        $storeitem->delete();

        return redirect()->route('store.index')->with('success', 'Store item deleted successfully.');
    }

}
