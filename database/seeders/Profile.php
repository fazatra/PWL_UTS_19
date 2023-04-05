<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Profile extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data=[
        [
            'namaLengkap' => 'Muhammad Farhan Riza Putra',
            'tempatLahir' => 'Surabaya',
            'nim' => 2141720197,
            'absen' => 19
        ]
        ];
        DB::table('profile')->insert($data);
    }
}
