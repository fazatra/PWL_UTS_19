<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PengalamanKuliah extends Seeder
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
            'namaPanggilan' => 'Farhan',
            'umur' => 20,
            'pesan' => 'Lelah letih'
        ]
        ];
        DB::table('pengalamankuliah')->insert($data);
    }
}
