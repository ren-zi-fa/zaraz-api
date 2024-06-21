<?php

namespace Database\Seeders;

use App\Models\OrderDetail;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OrderDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $orderDetails = [
            [
                'order_id'=>1,
                'product_id'=>1,
                'quantity'=>1,
                'price'=>50000
            ],
            [
                'order_id'=>2,
                'product_id'=>2,
                'quantity'=>1,
                'price'=>4000
            ],
            [
                'order_id'=>3,
                'product_id'=>3,
                'quantity'=>1,
                'price'=>20000
            ],

            ];

            foreach($orderDetails as $orderDetail){
                OrderDetail::create($orderDetail);
            }
    }
}
