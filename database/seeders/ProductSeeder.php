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
        $products = [
            [
                'product_name'=>'coklat',
                'product_description'=>'enak, sehat, dan bergizi',
                'price'=>50000,
                'stock'=> 4,
            ],
            [
                'product_name'=>'ale ale',
                'product_description'=>'enak, sehat, dan bergizi',
                'price'=>4000,
                'stock'=> 10,
            ],
            [
                'product_name'=>'pop mie',
                'product_description'=>'enak, sehat, dan bergizi',
                'price'=>20000,
                'stock'=> 10,
            ],
        ];

        foreach($products as $product){
            Product::create ($product);
        }
    }
}
