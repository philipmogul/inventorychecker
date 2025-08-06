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
