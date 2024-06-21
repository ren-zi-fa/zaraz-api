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

        $productCategories = [
            [
                'product_id'=>1,
                'category_id'=>1
            ],
            [
                'product_id'=>2,
                'category_id'=>2
            ],
            [
                'product_id'=>3,
                'category_id'=>1
            ],
        ];
        foreach ($productCategories as $productCategory){
            ProductCategory::create($productCategory);
        }
    }
}
