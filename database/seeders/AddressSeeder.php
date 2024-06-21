<?php

namespace Database\Seeders;

use App\Models\Addresses;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AddressSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $addresses = [
            [
                'user_id' => 1,
                'city' => 'batam',
                'postal_code' => '2638',
                'country' => 'indonesia',
            ],
            [
                'user_id' => 2,
                'city' => 'palangkaraya',
                'postal_code' => '2138',
                'country' => 'indonesia',
            ],
            [
                'user_id' => 3,
                'city' => 'gotham city',
                'postal_code' => '4338',
                'country' => 'amerika',
            ],

        ];

        foreach ($addresses as $address) {
            Addresses::create($address);
        }
    }
}
