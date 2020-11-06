<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use \App\Models\Matakuliah;

class MatakuliahController extends Controller
{
    //
    public function index(){
        return view('matakuliah',[
            "matakuliah" => Matakuliah::all()
        ]);
    }

    public function tampil($id){
        
        $matakuliah = Matakuliah::find($id);
        
        return view('matakuliah',[
            "matakuliah" => Matakuliah::all(),
            "data" => $matakuliah
        ]);
    }
}
