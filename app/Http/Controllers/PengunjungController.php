<?php

namespace App\Http\Controllers;
use App\Models\Pengunjung;
use App\Models\Karyawan;
use App\Models\Transaksi;
use App\Models\Detail;
use App\Models\Kamar;

use Illuminate\Http\Request;

class PengunjungController extends Controller
{
    //
    public function pengunjung(){
        $pengunjung = Pengunjung::all();
        $karyawan = Karyawan::all();
        $transaksi = Transaksi::all();
        $detail = Detail::all();
        $kamar = Kamar::all();
        return view('post.allinone', compact('pengunjung','karyawan','transaksi','detail','kamar'));
    }
}
