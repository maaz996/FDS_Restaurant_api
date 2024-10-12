<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Category::create([
            'name' => 'Burger',
            'restaurant_id' => 1,
        ]);
        Category::create([
            'name' => 'Pizza',
            'restaurant_id' => 1,
        ]);

        // Categories for Restaurant 2 (Burger World)
        Category::create([
            'name' => 'Shwarma',
            'restaurant_id' => 2,
        ]);
        Category::create([
            'name' => 'Paratha Roll',
            'restaurant_id' => 2,
        ]);
    }
}
