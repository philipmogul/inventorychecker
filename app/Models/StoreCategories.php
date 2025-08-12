<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StoreCategories extends Model
{
    protected $fillable = [
        'name',
        'description',
        'location',
    ];

    /** @use HasFactory<\Database\Factories\StoreCategoriesFactory> */
    use HasFactory;

    // Telling the model that it belongs to the StoreCategories model 
    // Or Some models are connected. Below is how you do it. 
    public function stores()
    {
        return $this->hasMany(Store::class);
    }

    
}
