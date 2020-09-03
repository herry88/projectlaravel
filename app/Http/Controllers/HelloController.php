<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    //ini tampilan function index
    public function index()
    {
        // echo "<h1>Hello World, Dari Controller !!</h1>";
        // $nama = "Herry Prasetyo";
        // $pelajaran = ["PWPB","Algoritma","PemDas","Basis Data","PBO"];
        // return view('hello.index', compact('nama','pelajaran'));
        
        // $nama = "Herry Prasetyo";
        // $pelajaran = ["PWPB","Algoritma","PemDas","Basis Data","PBO"];
        // return view('hello.index', ['nama'=> $nama, 'pelajaran'=> $pelajaran]);

        $d['nama'] = "Herry Prasetyo";
        $d['pelajaran'] = ["PWPB","Algoritma","PemDas","Basis Data","PBO"];
        return view('hello.index', $d);

    }
}
