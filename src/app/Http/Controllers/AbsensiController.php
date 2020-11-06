<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use \App\Models\Absensi;

class AbsensiController extends Controller
{
    //
    public function index(){
        return view('absensi',[
            "absensi" => Absensi::all()
        ]);
    }

    public function tampil($id){
        
        $absensi = Absensi::find($id);
        
        return view('absensi',[
            "absensi" => Absensi::all(),
            "data" => $absensi
        ]);
    }
}
