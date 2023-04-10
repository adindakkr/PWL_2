<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\MatkulModel;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            ArtikelModelSeeder::class,
            HobiModelSeeder::class,
            KeluargaModelSeeder::class,
            MatkulModelSeeder::class,
        ]);
    }
}
