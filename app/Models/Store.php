<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    protected $fillable = [
        'name',
        'description',
        'price',
        'quantity',
        'store_categories_id'
    ];

    /** @use HasFactory<\Database\Factories\StoreFactory> */
    use HasFactory;

    // Telling the model that it belongs to the StoreCategories model 
    // Or Some models are connected. Below is how you do it. 
    public function storecategories()
    {
        return $this->belongsTo(StoreCategories::class);
    }
}
