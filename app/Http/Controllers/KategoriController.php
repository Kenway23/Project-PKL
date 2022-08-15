<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Wisata;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        // memanggil data Wali bersama dengan data siswa
        // yang dibuat dari method 'siswa' di model 'Wali'
        $kategori = Kategori::with('wisata')->get();
        // dd($wali);
        // return $wali;
        return view('kategori.index', ['kategori' => $kategori]);
    }

    public function create()
    {
        $wisata = Wisata::all();
        return view('kategori.create', compact('wisata'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_kategori' => 'required',
            'deskripsi' => 'required',
            'foto' => 'required|image|max:2048',
            'id_wisata' => 'required|unique:kategoris',
         ]);

        $kategori = new Kategori();
        $kategori->nama_kategori = $request->nama_kategori;
        $kategori->deskripsi = $request->deskripsi;
        if ($request->hasFile('foto')) {
            $image = $request->file('foto');
            $name = rand(1000, 9999) . $image->getClientOriginalName();
            $image->move('images/kategori/', $name);
            $kategori->foto = $name;
        }
        $kategori->id_wisata = $request->id_wisata;
        $kategori->save();
        return redirect()->route('kategori.index')
            ->with('success', 'Data berhasil dibuat!');
    }
 
    public function show($id)
    {
        $kategori = Kategori::findOrFail($id);
        return view('kategori.show', compact('kategori'));
    }

    public function edit($id)
    {
        $kategori = Kategori::findOrFail($id);
        $wisata = Wisata::all();
        return view('kategori.edit', compact('kategori', 'wisata'));
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'nama_kategori' => 'required',
            'deskripsi' => 'required',
            'foto' => 'image|max:2048',
            'id_wisata' => 'required',
        ]);

        $kategori = Kategori::findOrFail($id);
        $kategori->nama_kategori = $request->nama_kategori;
        $kategori->deskripsi = $request->deskripsi;
        if ($request->hasFile('foto')) {
            $kategori->deleteImage(); //menghapus foto sebelum di update melalui method deleteImage di model
            $image = $request->file('foto');
            $name = rand(1000, 9999) . $image->getClientOriginalName();
            $image->move('images/kategori/', $name);
            $kategori->foto = $name;
        }
        $kategori->id_wisata = $request->id_wisata;
        $kategori->save();
        return redirect()->route('kategori.index')
            ->with('success', 'Data berhasil dibuat!');
    }

    public function destroy($id)
    {
        $kategori = Kategori::findOrFail($id);
        $kategori->deleteImage();
        $kategori->delete();
        return redirect()->route('kategori.index')
            ->with('success', 'Data berhasil dihapus!');

    }
}