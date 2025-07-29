<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/storeitems',function()
{
    $storeitems = [
        ["id" => 1, "name" => "Milk", "description" => "Description for Milk", "price" => 10.00, "quantity" => 100],
        ["id" => 2, "name" => "Bread", "description" => "Description for Bread", "price" => 20.00, "quantity" => 50],
        ["id" => 3, "name" => "Sugar", "description" => "Description for Sugar", "price" => 30.00, "quantity" => 75],
        ["id" => 4, "name" => "Eggs", "description" => "Description for Eggs", "price" => 40.00, "quantity" => 25],

    ];
    return view('storeitems.items', ["storeitems" => $storeitems]);
});

// Items clicked by id

Route::get('/storeitems/{id}',function($id)
{
    return view('storeitems.showz', ["id" => $id]);
});