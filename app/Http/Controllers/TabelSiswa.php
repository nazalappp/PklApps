<?php

namespace App\Http\Controllers;
use App\Models\Siswa;
use App\Models\Peserta;
use App\Models\Mapel;

use Illuminate\Http\Request;

class TabelSiswa extends Controller
{
    //
    public function siswa(){
        $siswa = Siswa::all();
        $peserta = Peserta::all();
        $mapel = Mapel::all();
        return view('post.siswa', compact('siswa','peserta','mapel'));
    }
}
