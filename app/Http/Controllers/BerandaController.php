<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BerandaController extends Controller
{
    //
    public function index(){
        $var_nama = "Fakultas Ushuludin";
        return view('HalamanDepan.Beranda', compact('var_nama'));
    }

    public function ebook(){
        return view ('Halaman.ebook');
    }

    public function journal(){
        return view ('Halaman.journal');
    }

    public function upebook(){
        return view ('Halaman.upebook');
    }
    public function upjournal(){
        return view ('Halaman.upjournal');
    }

    public function forbidden(){
        return view ('Halaman.forbiden');
    }

}
