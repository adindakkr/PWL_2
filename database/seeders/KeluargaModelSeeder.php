<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KeluargaModelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('keluarga')->insert([
            [
                'id' => 'kl001',
                'nama' => 'Anthony Kurniadi',
                'peran' => 'Kepala Keluarga',
                'tgl_lahir' => '18-08-1970',
                'pekerjaan' => 'Guru'
            ],
            [
                'id' => 'kl002',
                'nama' => 'Nurul Ciptari Arifianti',
                'peran' => 'Istri',
                'tgl_lahir' => '11-08-1977',
                'pekerjaan' => 'PNS'
            ],
            [
                'id' => 'kl003',
                'nama' => 'Adinda Kurnia Rifanti',
                'peran' => 'Anak',
                'tgl_lahir' => '09-06-2003',
                'pekerjaan' => 'Mahasiswa'
            ],
            [
                'id' => 'kl004',
                'nama' => 'Aqila Kurnia Nur F',
                'peran' => 'Anak',
                'tgl_lahir' => '11-06-2007',
                'pekerjaan' => 'Pelajar'
            ]
        ]);
    }
}
