<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use \App\Models\Mahasiswa;

class MahasiswaController extends Controller
{
    //
    public function index(){
        return view('mahasiswa',[
            "mahasiswa" => Mahasiswa::all()
        ]);
    }

    public function tampil($id){
        
        $mahasiswa = Mahasiswa::find($id);
        
        return view('mahasiswa',[
            "mahasiswa" => Mahasiswa::all(),
            "data" => $mahasiswa
        ]);
    }
}
