<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artikel;
use App\Models\Wisata;
use App\Models\Mobil;
use App\Models\Kategori;

class ArtikelUserController extends Controller
{
    //
    public function artikel(){
        $au = artikel::all();
        return view('frontend.blog',compact("au"));
    }
    public function artikel2(){
        $au = artikel::all();
        return view('frontend.blog_detail',compact("au"),[
            "title" => "Blog Detail"
        ]);
    }

    public function artikel3(){
        $au = artikel::all();
        return view('frontend.beranda',compact("au"));
    }


    
    
    public function kategori(){
        $au = kategori::all();
        $ws = wisata::all();
        return view('frontend.wisata_alam',compact("au","ws"));
    }

    public function show($id) {
        $artikel =Artikel::FindOrFail($id);
        $title = "Blog Detail";

        return view('frontend.blog_detail', compact('artikel','title'));
    }
}
