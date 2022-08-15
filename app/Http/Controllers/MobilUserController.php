<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mobil;

class MobilUserController extends Controller
{
    //
    public function mobil(){
        $au = mobil::all();
        return view('frontend.mobil',compact("au"));
    }

    public function mobil2(){
        $au = mobil::all();
        return view('frontend.mobil_detail',compact("au"));
    }

    public function show($id) {
        $mobil = Mobil::findOrFail($id);
        return view('frontend.mobil_detail', compact('mobil'));
    }
}
