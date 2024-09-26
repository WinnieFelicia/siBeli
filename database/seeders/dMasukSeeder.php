<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class dMasukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('d_masuks')->insert([
            'idMasuk' => 'IDM01',
            'kdMasuk' => 'KM01',
            'kdBarangBeli' => 'BB01',
            'jumlah' => '5',
            'subTotal' => '5',
        ]);
        DB::table('d_masuks')->insert([
            'idMasuk' => 'IDM02',
            'kdMasuk' => 'KM02',
            'kdBarangBeli' => 'BB02',
            'jumlah' => '10',
            'subTotal' => '10',
        ]);
        DB::table('d_masuks')->insert([
            'idMasuk' => 'IDM03',
            'kdMasuk' => 'KM03',
            'kdBarangBeli' => 'BB03',
            'jumlah' => '15',
            'subTotal' => '15',
        ]);
        
        DB::table('d_masuks')->insert([
            'idMasuk' => 'IDM04',
            'kdMasuk' => 'KM04',
            'kdBarangBeli' => 'BB04',
            'jumlah' => '20',
            'subTotal' => '20',
        ]);
        
        DB::table('d_masuks')->insert([
            'idMasuk' => 'IDM05',
            'kdMasuk' => 'KM05',
            'kdBarangBeli' => 'BB05',
            'jumlah' => '25',
            'subTotal' => '25',
        ]);
        DB::table('d_masuks')->insert([
            'idMasuk' => 'IDM06',
            'kdMasuk' => 'KM06',
            'kdBarangBeli' => 'BB06',
            'jumlah' => '30',
            'subTotal' => '30',
        ]);
        DB::table('d_masuks')->insert([
            'idMasuk' => 'IDM07',
            'kdMasuk' => 'KM07',
            'kdBarangBeli' => 'BB07',
            'jumlah' => '35',
            'subTotal' => '35',
        ]);
        DB::table('d_masuks')->insert([
            'idMasuk' => 'IDM08',
            'kdMasuk' => 'KM08',
            'kdBarangBeli' => 'BB08',
            'jumlah' => '40',
            'subTotal' => '40',
        ]);
        DB::table('d_masuks')->insert([
            'idMasuk' => 'IDM09',
            'kdMasuk' => 'KM09',
            'kdBarangBeli' => 'BB09',
            'jumlah' => '45',
            'subTotal' => '45',
        ]);
        DB::table('d_masuks')->insert([
            'idMasuk' => 'IDM10',
            'kdMasuk' => 'KM10',
            'kdBarangBeli' => 'BB10',
            'jumlah' => '50',
            'subTotal' => '50',
        ]);
        DB::table('d_masuks')->insert([
            'idMasuk' => 'IDM11',
            'kdMasuk' => 'KM11',
            'kdBarangBeli' => 'BB11',
            'jumlah' => '55',
            'subTotal' => '55',
        ]);
        DB::table('d_masuks')->insert([
            'idMasuk' => 'IDM12',
            'kdMasuk' => 'KM12',
            'kdBarangBeli' => 'BB12',
            'jumlah' => '60',
            'subTotal' => '60',
        ]); 
        DB::table('d_masuks')->insert([
            'idMasuk' => 'IDM13',
            'kdMasuk' => 'KM13',
            'kdBarangBeli' => 'BB13',
            'jumlah' => '65',
            'subTotal' => '65',
        ]);
        DB::table('d_masuks')->insert([
            'idMasuk' => 'IDM14',
            'kdMasuk' => 'KM14',
            'kdBarangBeli' => 'BB14',
            'jumlah' => '70',
            'subTotal' => '70',
        ]);
        DB::table('d_masuks')->insert([
            'idMasuk' => 'IDM15',
            'kdMasuk' => 'KM15',
            'kdBarangBeli' => 'BB15',
            'jumlah' => '75',
            'subTotal' => '75',
        ]);
        DB::table('d_masuks')->insert([
            'idMasuk' => 'IDM16',
            'kdMasuk' => 'KM16',
            'kdBarangBeli' => 'BB16',
            'jumlah' => '80',
            'subTotal' => '400',
        ]);
        DB::table('d_masuks')->insert([
            'idMasuk' => 'IDM17',
            'kdMasuk' => 'KM17',
            'kdBarangBeli' => 'BB17',
            'jumlah' => '55',
            'subTotal' => '55',
        ]);
        DB::table('d_masuks')->insert([
            'idMasuk' => 'IDM18',
            'kdMasuk' => 'KM18',
            'kdBarangBeli' => 'BB18',
            'jumlah' => '9',
            'subTotal' => '9',
        ]);
        DB::table('d_masuks')->insert([
            'idMasuk' => 'IDM19',
            'kdMasuk' => 'KM19',
            'kdBarangBeli' => 'BB19',
            'jumlah' => '10',
            'subTotal' => '10',
        ]);
        DB::table('d_masuks')->insert([
            'idMasuk' => 'IDM20',
            'kdMasuk' => 'KM20',
            'kdBarangBeli' => 'BB20',
            'jumlah' => '50',
            'subTotal' => '50',
        ]);
        
    }
}
