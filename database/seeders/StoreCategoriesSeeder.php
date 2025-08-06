<?php

namespace Database\Seeders;

use App\Models\StoreCategories;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StoreCategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        StoreCategories::factory()->count(10)->create();
    }
}
