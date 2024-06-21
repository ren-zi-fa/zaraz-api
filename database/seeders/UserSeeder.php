<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
            'username'=>'renzi',
            'email'=>'renzi@mail.com',
            'password'=>Hash::make('renzi123'),
            ],
            [
            'username'=>'user2',
            'email'=>'renzi2@mail.com',
            'password'=>Hash::make('renzi123'),
            ],
            [
            'username'=>'user3',
            'email'=>'renzi3@mail.com',
            'password'=>Hash::make('renzi123'),
            ],
        ];

        foreach ($users as $user ){
            User::create($user);
        }
    }
}
