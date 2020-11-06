<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use \App\Models\Dosen;

class DosenController extends Controller
{
    //
    public function index(){
        return view('dosen',[
            "dosen" => Dosen::all()
        ]);
    }

    public function tampil($id){
        
        $mahasiswa = Mahasiswa::find($id);
        
        return view('dosen',[
            "dosen" => Dosen::all(),
            "data" => $dosen
        ]);
    }
}
