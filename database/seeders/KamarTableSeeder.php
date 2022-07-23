<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class KamarTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $latihan8 = [
            ['no_kamar' => 111, 'jenis_kamar' => 'Single Room', 'harga' => 15000000],
            ['no_kamar' => 112, 'jenis_kamar' => 'Twin Room', 'harga' => 20000000],
            ['no_kamar' => 113, 'jenis_kamar' => 'Single Room', 'harga' => 15000000],
            ['no_kamar' => 114, 'jenis_kamar' => 'Single Room', 'harga' => 15000000],
            ['no_kamar' => 115, 'jenis_kamar' => 'Date Room', 'harga' => 17000000],
        ];
        // masukan data kedatabase
        DB::table('kamar')->insert($latihan8);
    }
}
