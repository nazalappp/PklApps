<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class DetailTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $latihan7 = [
            ['id_dtl_transaksi' => '001', 'no_transaksi' => 01, 'no_kamar' => 111],
            ['id_dtl_transaksi' => '002', 'no_transaksi' => 02, 'no_kamar' => 112],
            ['id_dtl_transaksi' => '003', 'no_transaksi' => 03, 'no_kamar' => 113],
            ['id_dtl_transaksi' => '004', 'no_transaksi' => 04, 'no_kamar' => 114],
            ['id_dtl_transaksi' => '005', 'no_transaksi' => 05, 'no_kamar' => 115],
        ];
        // masukan data kedatabase
        DB::table('detail')->insert($latihan7);
    }
}
