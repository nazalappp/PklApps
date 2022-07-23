<?php

namespace App\Http\Controllers;
use App\Models\Mapel;

use Illuminate\Http\Request;

class TabelMapel extends Controller
{
    //
    public function mapel(){
        $mapel = Mapel::all();
        return view('post.mapel', compact('mapel'));
    }
}
