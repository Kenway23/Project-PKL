<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Wisata;

class WisataUserController extends Controller
{
    //
    public function wisata(){
        $au = wisata::all();
        return view('frontend.paket_wisata',compact("au"));
    }
    public function wisata2(){
        $au = wisata::all();
        return view('frontend.wisata_detail',compact("au"));
    }

    public function show($id) {
        $wisata =Wisata::FindOrFail($id);

        return view('frontend.wisata_detail', compact('wisata'));
    }
}
