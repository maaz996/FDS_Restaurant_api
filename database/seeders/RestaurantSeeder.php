<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Restaurant;

class RestaurantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Restaurant::create([
            'name' => 'Food Bank',
            'image' => 'food_bank_image.jpg',
            'location' => '123 Main St',
            'contact' => '123-456-7890'
        ]);

        Restaurant::create([
            'name' => 'Burger World',
            'image' => 'burger_world_image.jpg',
            'location' => '456 Market Ave',
            'contact' => '987-654-3210'
        ]);
    }
}
