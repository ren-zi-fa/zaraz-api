<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\ProductCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $category = [
            [
                'category_name' => 'Makanan'
            ],
            [
                'category_name' => 'Minuman'
            ],
            [
                'category_name' => 'Pakaian'
            ]
        ];

        foreach ($category as $item) {
            Category::create ($item);
        }

       
    }
}
