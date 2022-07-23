<?php

namespace App\Http\Controllers;
use App\Models\Peserta;

use Illuminate\Http\Request;

class TabelPeserta extends Controller
{
    //
    public function peserta(){
        $peserta = Peserta::all();
        return view('post.peserta', compact('peserta'));
    }
}
