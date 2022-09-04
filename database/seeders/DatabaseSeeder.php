<?php

namespace Database\Seeders;

use App\Models\jeniskerjasama;
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
        Jeniskerjasama::create([
            'jenis' => 'Pelaksanaan Praktek Kerja Lapangan (PKL) Siswa'
        ]);
    }
}
