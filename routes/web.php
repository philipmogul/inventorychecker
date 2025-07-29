<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Create a store item
Route::get('/storeitems/create',function()
{
    return view('storeitems.create');
});


Route::get('/storeitems',function()
{
    $storeitems = [
        ["id" => 1, "name" => "Milk", "description" => "Description for Milk", "price" => 10.00, "quantity" => 10],
        ["id" => 2, "name" => "Bread", "description" => "Description for Bread", "price" => 20.00, "quantity" => 50],
        ["id" => 3, "name" => "Sugar", "description" => "Description for Sugar", "price" => 30.00, "quantity" => 7],
        ["id" => 4, "name" => "Eggs", "description" => "Description for Eggs", "price" => 40.00, "quantity" => 5],
        ["id" => 5, "name" => "Flour", "description" => "Description for Flour", "price" => 130.00, "quantity" => 35],
        ["id" => 6, "name" => "Soap", "description" => "Description for Soap", "price" => 45.00, "quantity" => 15],

    ];
    return view('storeitems.items', ["storeitems" => $storeitems], ["coder" => "Philip"]);
});

// Items clicked by id

Route::get('/storeitems/{id}',function($id)
{
    return view('storeitems.showz', ["id" => $id]);
});