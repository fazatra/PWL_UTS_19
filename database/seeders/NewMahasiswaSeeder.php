<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NewMahasiswaSeeder extends Seeder
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
                'No_Urut' => 001,
                'Nama' => 'Farhan',
                'Tanggal_Lahir' => '04 April 2002',
                'Alamat' => 'Jl.xxx Surabaya',
                'Bb_lahir' => '3.8',
                'Tb_Lahir' => '48',
                'Nama_Ortu' => 'Gundala'
            ],
            [
                'No_Urut' => 002,
                'Nama' => 'Riza',
                'Tanggal_Lahir' => '04 April 2001',
                'Alamat' => 'Jl.xxx Surabaya',
                'Bb_lahir' => '3.0',
                'Tb_Lahir' => '45',
                'Nama_Ortu' => 'Zeus'
            ],
            [
                'No_Urut' => 003,
                'Nama' => 'Putra',
                'Tanggal_Lahir' => '10 Januari 2002',
                'Alamat' => 'Jl.xxx Sidoarjo',
                'Bb_lahir' => '3.8',
                'Tb_Lahir' => '48',
                'Nama_Ortu' => 'Baskoro'
            ],
            [
                'No_Urut' => 004,
                'Nama' => 'Naresh',
                'Tanggal_Lahir' => '29 Maret 2002',
                'Alamat' => 'Jl.xxx Jakarta',
                'Bb_lahir' => '3.8',
                'Tb_Lahir' => '50',
                'Nama_Ortu' => 'Agus'
            ],
            [
                'No_Urut' => 005,
                'Nama' => 'Farhan',
                'Tanggal_Lahir' => '04 April 2002',
                'Alamat' => 'Jl.xxx Surabaya',
                'Bb_lahir' => '3.8',
                'Tb_Lahir' => '48',
                'Nama_Ortu' => 'Gundala'
            ],
            [
                'No_Urut' => 006,
                'Nama' => 'Ega',
                'Tanggal_Lahir' => '14 Agustus 2002',
                'Alamat' => 'Jl.xxx Banyuangi',
                'Bb_lahir' => '3.8',
                'Tb_Lahir' => '48',
                'Nama_Ortu' => 'Sutejo'
            ],
            [
                'No_Urut' => 007,
                'Nama' => 'Endar',
                'Tanggal_Lahir' => '04 April 2002',
                'Alamat' => 'Jl.xxx Bandung',
                'Bb_lahir' => '3.1',
                'Tb_Lahir' => '40',
                'Nama_Ortu' => 'Darmanto'
            ],
            [
                'No_Urut' => 021,
                'Nama' => 'Yasmine',
                'Tanggal_Lahir' => '01 Juni 2003',
                'Alamat' => 'Jl.xxx Sidoarjo',
                'Bb_lahir' => '2.9',
                'Tb_Lahir' => '43',
                'Nama_Ortu' => 'Monika'
            ],
            [
                'No_Urut' => 022,
                'Nama' => 'Aan',
                'Tanggal_Lahir' => '23 Juli 2003',
                'Alamat' => 'Jl.xxx Nganjuk',
                'Bb_lahir' => '3.8',
                'Tb_Lahir' => '48',
                'Nama_Ortu' => 'Parman'
            ],
            [
                'No_Urut' => 010,
                'Nama' => 'Ahan',
                'Tanggal_Lahir' => '11 September 2001',
                'Alamat' => 'Jl.xxx Madura',
                'Bb_lahir' => '3.8',
                'Tb_Lahir' => '48',
                'Nama_Ortu' => 'Doni'
            ],
            [
                'No_Urut' => 011,
                'Nama' => 'Didin',
                'Tanggal_Lahir' => '13 Maret 2002',
                'Alamat' => 'Jl.xxx Palembang',
                'Bb_lahir' => '3.4',
                'Tb_Lahir' => '44',
                'Nama_Ortu' => 'Shiva'
            ],
            [
                'No_Urut' => 012,
                'Nama' => 'Arhan',
                'Tanggal_Lahir' => '04 April 2002',
                'Alamat' => 'Jl.xxx Surabaya',
                'Bb_lahir' => '3.8',
                'Tb_Lahir' => '48',
                'Nama_Ortu' => 'Surti'
            ],
            [
                'No_Urut' => 013,
                'Nama' => 'Farkhan',
                'Tanggal_Lahir' => '15 April 2002',
                'Alamat' => 'Jl.xxx Batu',
                'Bb_lahir' => '3.8',
                'Tb_Lahir' => '48',
                'Nama_Ortu' => 'Tarji'
            ],
            [
                'No_Urut' => 014,
                'Nama' => 'Farshan',
                'Tanggal_Lahir' => '15 April 2002',
                'Alamat' => 'Jl.xxx Batu',
                'Bb_lahir' => '3.8',
                'Tb_Lahir' => '48',
                'Nama_Ortu' => 'Tarji'
            ],
            [
                'No_Urut' => 015,
                'Nama' => 'Satine',
                'Tanggal_Lahir' => '06 September 2002',
                'Alamat' => 'Jl.xxx Surabaya',
                'Bb_lahir' => '3.2',
                'Tb_Lahir' => '51',
                'Nama_Ortu' => 'Gundala'
            ],
            [
                'No_Urut' => 016,
                'Nama' => 'Barjo',
                'Tanggal_Lahir' => '30 Februari 2002',
                'Alamat' => 'Jl.xxx Kediri',
                'Bb_lahir' => '3.0',
                'Tb_Lahir' => '40',
                'Nama_Ortu' => 'Tarjo'
            ],
            [
                'No_Urut' => 017,
                'Nama' => 'Osas',
                'Tanggal_Lahir' => '04 April 2002',
                'Alamat' => 'Jl.xxx Tulungagung',
                'Bb_lahir' => '3.8',
                'Tb_Lahir' => '48',
                'Nama_Ortu' => 'Gatot'
            ],
            [
                'No_Urut' => 023,
                'Nama' => 'Lutung',
                'Tanggal_Lahir' => '01 Januari 2003',
                'Alamat' => 'Jl.xxx Mojokerto',
                'Bb_lahir' => '34.0',
                'Tb_Lahir' => '48',
                'Nama_Ortu' => 'Kasarung'
            ],
            [
                'No_Urut' => 024,
                'Nama' => 'Farhana',
                'Tanggal_Lahir' => '19 Oktober 2003',
                'Alamat' => 'Jl.xxx Surabaya',
                'Bb_lahir' => '2.9',
                'Tb_Lahir' => '43',
                'Nama_Ortu' => 'Astri'
            ],
            [
                'No_Urut' => 020,
                'Nama' => 'Hanin',
                'Tanggal_Lahir' => '07 November 2003',
                'Alamat' => 'Jl.xxx Jogja',
                'Bb_lahir' => '3.9',
                'Tb_Lahir' => '49',
                'Nama_Ortu' => 'Darmaji'
            ]
        ];
        DB::table('mahasiswas')->insert($data);
    }
}
