<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HobiModelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('hobi')->insert([
            [
                'id' => 'hb001',
                'jenis' => 'Kesenian',
                'nama_hobi' => 'Menyanyi',
                'status' => 'Aktif'
            ],
            [
                'id' => 'hb002',
                'jenis' => 'Kesenian',
                'nama_hobi' => 'Melukis',
                'status' => 'Tidak aktif'
            ],
            [
                'id' => 'hb003',
                'jenis' => 'Olahraga',
                'nama_hobi' => 'Taekwondo',
                'status' => 'Tidak aktif'
            ],
            [
                'id' => 'hb004',
                'jenis' => 'Olahraga',
                'nama_hobi' => 'Bulu Tangkis',
                'status' => 'Aktif'
            ],
            [
                'id' => 'hb005',
                'jenis' => 'Kesenian',
                'nama_hobi' => 'Fotografi & Videografi',
                'status' => 'Aktif'
            ],
            [
                'id' => 'hb006',
                'jenis' => 'Olahraga',
                'nama_hobi' => 'Renang',
                'status' => 'Aktif'
            ],
            [
                'id' => 'hb007',
                'jenis' => 'Sosial',
                'nama_hobi' => 'Memasak',
                'status' => 'Aktif'
            ]
        ]);
    }
}
