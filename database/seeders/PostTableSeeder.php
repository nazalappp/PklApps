<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $sampel = [
            ['title' => 'Tips cepat nikah', 'content' => 'assalaam studio'],
            ['title' => 'Harus menunda nikah?', 'content' => 'assalaam studio'],
            ['title' => 'Membangun visi misi keluarga', 'content' => 'assalaam studio'],
        ];
        // masukan data kedatabase
        DB::table('posts')->insert($sampel);
    }
}
