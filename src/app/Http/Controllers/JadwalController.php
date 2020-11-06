<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use \App\Models\Jadwal;

class JadwalController extends Controller
{
    //
    public function index(){
        return view('jadwal',[
            "jadwal" => Jadwal::all()
        ]);
    }

    public function tampil($id){
        
        $jadwal = Jadwal::find($id);
        
        return view('jadwal',[
            "jadwal" => Jadwal::all(),
            "data" => $jadwal
        ]);
    }
}
