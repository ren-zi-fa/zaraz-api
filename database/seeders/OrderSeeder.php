<?php

namespace Database\Seeders;

use App\Models\Order;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $orders = [
            [
                'user_id'=>1,
                'total_amount'=>1,
                'status'=>'success'
            ],
            [
                'user_id'=>2,
                'total_amount'=>2,
                'status'=>'success'
            ],
            [
                'user_id'=>3,
                'total_amount'=>1,
                'status'=>'success'
            ],
        ];

        foreach($orders as $order){
            Order::create($order);
        }
    }
}
