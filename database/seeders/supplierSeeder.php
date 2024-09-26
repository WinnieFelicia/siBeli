<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class supplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create('id_ID');
        for ($i = 0; $i <= 30; $i++){
        DB::table('suppliers')->insert([
            'kdSupplier' => 'KS1'. $i,
            'namaSupplier' => $faker ->name,
            'alamat' => $faker ->address,
        ]);
        }
    }
}
