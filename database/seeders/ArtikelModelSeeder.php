<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArtikelModelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('artikel')->insert([
            [
                'id' => 'ar001',
                'judul' => ' Tips hidup sukses',
                'penulis' => 'Rifanti',
                'tgl_publish' => '2002-05-05'
            ],
            [
                'id' => 'ar002',
                'judul' => 'Menjadi milyader muda',
                'penulis' => 'Kurnia',
                'tgl_publish' => '2023-06-09'
            ],
            [
                'id' => 'ar003',
                'judul' => 'Wanita Independent',
                'penulis' => 'Adinda',
                'tgl_publish' => '2003-09-06'
            ],
            [
                'id' => 'ar004',
                'judul' => 'Belajar Ngoding',
                'penulis' => 'Kevin',
                'tgl_publish' => '2002-05-01'
            ],
            [
                'id' => 'ar005',
                'judul' => 'Rumah Minimalis',
                'penulis' => 'Dimas',
                'tgl_publish' => '2003-08-12'
            ]
        ]);
    }
}
