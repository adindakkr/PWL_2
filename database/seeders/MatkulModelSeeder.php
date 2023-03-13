<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MatkulModelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('matkul')->insert([
            [
                'id' => 'mk001',
                'nama_matkul' => 'PWL',
                'dosen' => 'Bapak Zawaruddin',
                'sks' => '6'
            ],
            [
                'id' => 'mk002',
                'nama_matkul' => 'ADBO',
                'dosen' => 'Ibu Retno Ririd',
                'sks' => '4'
            ],
            [
                'id' => 'mk003',
                'nama_matkul' => 'Proyek 1',
                'dosen' => 'Bapak Rudy Ariyanto',
                'sks' => '6'
            ],
            [
                'id' => 'mk004',
                'nama_matkul' => 'Jaringan Komputer',
                'dosen' => 'Bapak Kadek',
                'sks' => '4'
            ],
            [
                'id' => 'mk005',
                'nama_matkul' => 'Manajemen Proyek',
                'dosen' => 'Ibu Bella',
                'sks' => '3'
            ]
        ]);
    }
}
