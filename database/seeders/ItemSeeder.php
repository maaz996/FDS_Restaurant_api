<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Item;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Item::create([
            'name' => 'Cheese Burger',
            'image' => 'cheese_burger.jpg',
            'description' => 'A delicious cheese burger',
            'price' => 5.99,
            'variations' => 'small,medium,large',
            'category_id' => 1,
        ]);

        Item::create([
            'name' => 'Veggie Burger',
            'image' => 'veggie_burger.jpg',
            'description' => 'A healthy veggie burger',
            'price' => 4.99,
            'variations' => 'small,medium,large',
            'category_id' => 1,
        ]);

        // Items for Category 2 (Pizza)
        Item::create([
            'name' => 'Pepperoni Pizza',
            'image' => 'pepperoni_pizza.jpg',
            'description' => 'A classic pepperoni pizza',
            'price' => 8.99,
            'variations' => 'small,medium,large',
            'category_id' => 2,
        ]);

        Item::create([
            'name' => 'Margherita Pizza',
            'image' => 'margherita_pizza.jpg',
            'description' => 'Fresh tomatoes, mozzarella, and basil',
            'price' => 7.99,
            'variations' => 'small,medium,large',
            'category_id' => 2,
        ]);
    }
}
