<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class NewUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
        [
            'username' => 'farhan',
            'name' => 'M Farhan Riza Putra',
            'email' => 'farhan@gmail.com',
            'password' => Hash::make('password')
        ]
        ];
        DB::table('users')-> insert($data);
    }
}