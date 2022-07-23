<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class KaryawanTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $latihan5 = [
            ['id_karyawan' => '001', 'nm_karyawan' => 'Noval', 'JK' => 'Pria'],
            ['id_karyawan' => '002', 'nm_karyawan' => 'Levi', 'JK' => 'Pria'],
            ['id_karyawan' => '003', 'nm_karyawan' => 'Rizwan', 'JK' => 'Pria'],
            ['id_karyawan' => '004', 'nm_karyawan' => 'Ujang', 'JK' => 'Pria'],
            ['id_karyawan' => '005', 'nm_karyawan' => 'Mamen', 'JK' => 'Pria'],
        ];
        // masukan data kedatabase
        DB::table('karyawan')->insert($latihan5);
    }
}
