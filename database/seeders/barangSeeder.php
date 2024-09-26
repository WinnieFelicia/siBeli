<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class barangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('barangs')->insert([
            'hargaJual' => '150000',
            'hargaBeli' => '100000',
            'stok' => '15',
            'status' => 'Tersedia',
            'satuan' => 'Pcs',
            'namaBarang' => 'Baju Kaos Gambar Beruang',
            'kdBarang' => 'BJ001',
        ]);
        DB::table('barangs')->insert([
            'hargaJual' => '100000',
            'hargaBeli' => '50000',
            'stok' => '10',
            'status' => 'Tersedia',
            'satuan' => 'Pcs',
            'namaBarang' => 'Rok Panjang',
            'kdBarang' => 'RP001',
        ]);
        DB::table('barangs')->insert([
            'hargaJual' => '90000',
            'hargaBeli' => '10000',
            'stok' => '10',
            'status' => 'Tersedia',
            'satuan' => 'Pcs',
            'namaBarang' => 'Kaos Kaki',
            'kdBarang' => 'KK001',
        ]);
        DB::table('barangs')->insert([
            'hargaJual' => '150000',
            'hargaBeli' => '100000',
            'stok' => '15',
            'status' => 'Tersedia',
            'satuan' => 'Pcs',
            'namaBarang' => 'Baju Kaos Gambar Gajah',
            'kdBarang' => 'BJ002',
        ]);
        DB::table('barangs')->insert([
            'hargaJual' => '100000',
            'hargaBeli' => '50000',
            'stok' => '10',
            'status' => 'Tersedia',
            'satuan' => 'Pcs',
            'namaBarang' => 'Rok Panjang',
            'kdBarang' => 'RP002',
        ]);
        DB::table('barangs')->insert([
            'hargaJual' => '90000',
            'hargaBeli' => '10000',
            'stok' => '10',
            'status' => 'Tersedia',
            'satuan' => 'Pcs',
            'namaBarang' => 'Kaos Kaki',
            'kdBarang' => 'KK002',
        ]);
        DB::table('barangs')->insert([
            'hargaJual' => '150000',
            'hargaBeli' => '100000',
            'stok' => '15',
            'status' => 'Tersedia',
            'satuan' => 'Pcs',
            'namaBarang' => 'Baju Kaos Gambar Bebek',
            'kdBarang' => 'BJ003',
        ]);
        DB::table('barangs')->insert([
            'hargaJual' => '100000',
            'hargaBeli' => '50000',
            'stok' => '10',
            'status' => 'Tersedia',
            'satuan' => 'Pcs',
            'namaBarang' => 'Rok Panjang',
            'kdBarang' => 'RP003',
        ]);
        DB::table('barangs')->insert([
            'hargaJual' => '90000',
            'hargaBeli' => '10000',
            'stok' => '10',
            'status' => 'Tersedia',
            'satuan' => 'Pcs',
            'namaBarang' => 'Kaos Kaki',
            'kdBarang' => 'KK003',
        ]);
        DB::table('barangs')->insert([
            'hargaJual' => '90000',
            'hargaBeli' => '10000',
            'stok' => '10',
            'status' => 'Tersedia',
            'satuan' => 'pcs',
            'namaBarang' => 'Kaos Kaki',
            'kdBarang' => 'KK004',
        ]);
        }
    }

