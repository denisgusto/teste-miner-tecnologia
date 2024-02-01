<?php

namespace Database\Seeders;

use App\Models\Brand;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Brand::create([
            'name' => 'Marca 1',
            'status' => false,
        ]);

        Brand::create([
            'name' => 'Marca 2',
            'status' => true,
        ]);

        Brand::create([
            'name' => 'Marca 3',
            'status' => true,
        ]);
    }
}
