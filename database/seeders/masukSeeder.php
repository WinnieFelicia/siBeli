<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class masukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('masuks')->insert([
            'kdMasuk' => 'KM01',
            'tglMasuk' => '2024-09-26',
            'kdAdmin' => 'AD01',
            'kdSupplier' => 'KS013',
            'totalMasuk' => '5',
        ]);
        DB::table('masuks')->insert([
            'kdMasuk' => 'KM02',
            'tglMasuk' => '2024-09-16',
            'kdAdmin' => 'AD01',
            'kdSupplier' => 'KS015',
            'totalMasuk' => '5',
        ]);
        DB::table('masuks')->insert([
            'kdMasuk' => 'KM03',
            'tglMasuk' => '2024-09-06',
            'kdAdmin' => 'AD01',
            'kdSupplier' => 'KS011',
            'totalMasuk' => '5',
        ]);
    }
}
