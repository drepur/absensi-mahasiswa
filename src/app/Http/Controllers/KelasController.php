<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use \App\Models\Kelas;

class KelasController extends Controller
{
    //
    public function index(){
        return view('kelas',[
            "kelas" => Kelas::all()
        ]);
    }

    public function tampil($id){
        
        $kelas = Kelas::find($id);
        
        return view('kelas',[
            "kelas" => Kelas::all(),
            "data" => $kelas
        ]);
    }
}
