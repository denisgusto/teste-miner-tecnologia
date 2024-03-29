<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            'name' => 'Categoria 1',
            'status' => true,
        ]);

        Category::create([
            'name' => 'Categoria 2',
            'status' => false,
        ]);

        Category::create([
            'name' => 'Categoria 3',
            'status' => false,
        ]);
    }
}
