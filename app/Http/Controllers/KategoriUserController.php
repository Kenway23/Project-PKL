<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kategori;

class KategoriUserController extends Controller
{
    //
    public function alam() {
        $kategori =kategori::all();
        $kategori = $kategori->where("nama_kategori","Wisata alam");

        return view('frontend.wisata_alam', compact('kategori'));
    }

    public function religi() {
        $kategori =kategori::all();
        $kategori = $kategori->where("nama_kategori","Wisata religi");

        return view('frontend.wisata_religi', compact('kategori'));
    }

    public function budaya() {
        $kategori =kategori::all();
        $kategori = $kategori->where("nama_kategori","Wisata budaya");

        return view('frontend.wisata_budaya', compact('kategori'));
    }

    public function show($id) {
        $kategori =Kategori::FindOrFail($id);

        return view('frontend.alam_detail', compact('kategori'));
    }
}
