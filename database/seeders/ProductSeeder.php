<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create([
            'name' => 'Produto 1',
            'price' => 100.00,
            'status' => true,
        ]);

        Product::create([
            'name' => 'Produto 2',
            'price' => 200.00,
            'status' => true,
        ]);

        Product::create([
            'name' => 'Produto 3',
            'price' => 300.00,
            'status' => false,
        ]);
    }
}
