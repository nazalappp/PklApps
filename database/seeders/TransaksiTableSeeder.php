<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class TransaksiTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $latihan6 = [
            ['no_transaksi' => 01, 'id_pengunjung' => '1001', 'id_karyawan' => '001', 'jmlh_kamar' => 2, 'tgl_masuk' => '2022-10-01', 'tgl_keluar' => '2022-10-05', 'lama_nginap' => 4, 'total_harga' => 1500000],
            ['no_transaksi' => 02, 'id_pengunjung' => '1002', 'id_karyawan' => '002', 'jmlh_kamar' => 4, 'tgl_masuk' => '2022-11-02', 'tgl_keluar' => '2022-11-06', 'lama_nginap' => 4, 'total_harga' => 3000000],
            ['no_transaksi' => 03, 'id_pengunjung' => '1003', 'id_karyawan' => '003', 'jmlh_kamar' => 2, 'tgl_masuk' => '2022-12-03', 'tgl_keluar' => '2022-12-07', 'lama_nginap' => 4, 'total_harga' => 1500000],
            ['no_transaksi' => 04, 'id_pengunjung' => '1004', 'id_karyawan' => '004', 'jmlh_kamar' => 1, 'tgl_masuk' => '2022-01-10', 'tgl_keluar' => '2022-01-13', 'lama_nginap' => 4, 'total_harga' => 750000],
            ['no_transaksi' => 05, 'id_pengunjung' => '1005', 'id_karyawan' => '005', 'jmlh_kamar' => 2, 'tgl_masuk' => '2022-10-22', 'tgl_keluar' => '2022-10-25', 'lama_nginap' => 4, 'total_harga' => 1500000],
        ];
        // masukan data kedatabase
        DB::table('transaksi')->insert($latihan6);
    }
}
