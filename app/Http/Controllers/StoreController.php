<?php

namespace App\Http\Controllers;

use App\Models\Store;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function index()
    {
        //fetch all records and pass to index view 
        $storeitems = Store::orderBy('created_at','desc')->get(); 
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


}
