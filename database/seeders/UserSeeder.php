<?php

namespace Database\Seeders;

use App\Models\Customer;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // User::truncate();
        $user = User::create([
            'name' => 'dito',
            'level' => 'admin',
            'email' => 'dito010504@gmail.com',
            'password' => Hash::make('12345678'),
            'remember_token' => Str::random(60),
        ]);

        Customer::create([
            'id_user' => $user->id
        ]);
        // User::create([
        //     'name' => 'sapri',
        //     'level' => 'customer',
        //     'email' => 'sapri123@gmail.com',
        //     'password' => hash::make('12345678'),
        //     'remember_token' => Str::random(60),
        // ]);
    }
}
