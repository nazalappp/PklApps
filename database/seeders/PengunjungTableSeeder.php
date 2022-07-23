<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class PengunjungTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $latihan4 = [
            ['id_pengunjung' => '1001', 'nm_pengunjung' => 'Nazala', 'alamat' => 'Bandung', 'JK' => 'Wanita', 'no_tlp' => '089658428664', 'no_ktp' => 123456789],
            ['id_pengunjung' => '1002', 'nm_pengunjung' => 'Rizwan', 'alamat' => 'Bandung', 'JK' => 'Pria', 'no_tlp' => '089658428665', 'no_ktp' => 123456987],
            ['id_pengunjung' => '1003', 'nm_pengunjung' => 'Levi', 'alamat' => 'Bandung', 'JK' => 'Pria', 'no_tlp' => '089658428666', 'no_ktp' => 123456879],
            ['id_pengunjung' => '1004', 'nm_pengunjung' => 'Noval', 'alamat' => 'Bandung', 'JK' => 'Pria', 'no_tlp' => '089658428667', 'no_ktp' => 123456798],
            ['id_pengunjung' => '1005', 'nm_pengunjung' => 'Njan', 'alamat' => 'Bandung', 'JK' => 'Pria', 'no_tlp' => '089658428668', 'no_ktp' => 123456978],
        ];
        // masukan data kedatabase
        DB::table('pengunjung')->insert($latihan4);
    }
}
