<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use Illuminate\Http\Request;

class ArtikelController extends Controller
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
        //menampilkan semua data dari model artikel
        $artikel = Artikel::all();
        return view('artikel.index', compact('artikel'));
    }   

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('artikel.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validasi
        $validated = $request->validate([
            'nama_artikel' => 'required',
            'deskripsi' => 'required',
            'foto' => 'required|image|max:2048',
        ]);

        $artikel = new Artikel();
        $artikel->nama_artikel = $request->nama_artikel;
        $artikel->deskripsi = $request->deskripsi;
        if ($request->hasFile('foto')) {
            $image = $request->file('foto');
            $name = rand(1000, 9999) . $image->getClientOriginalName();
            $image->move('images/artikel/', $name);
            $artikel->foto = $name;
        }
        $artikel->save();
        return redirect()->route('artikel.index')
            ->with('success', 'Data berhasil dibuat!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $artikel = Artikel::findOrFail($id);
        return view('artikel.show', compact('artikel'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $artikel = Artikel::findOrFail($id);
        return view('artikel.edit', compact('artikel'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // Validasi
        $validated = $request->validate([
            'nama_artikel' => 'required',
            'deskripsi' => 'required|max:255',
            'foto' => 'image|max:2048',
        ]);

        $artikel = Artikel::findOrFail($id);
        $artikel->nama_artikel = $request->nama_artikel;
        $artikel->deskripsi = $request->deskripsi;
        if ($request->hasFile('foto')) {
            $artikel->deleteImage(); //menghapus foto sebelum di update melalui method deleteImage di model
            $image = $request->file('foto');
            $name = rand(1000, 9999) . $image->getClientOriginalName();
            $image->move('images/artikel/', $name);
            $artikel->foto = $name;
        }
        $artikel->save();
        return redirect()->route('artikel.index')
            ->with('success', 'Data berhasil diedit!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $artikel = Artikel::findOrFail($id);
        $artikel->delete();
        return redirect()->route('artikel.index')
            ->with('success', 'Data berhasil dihapus!');
    }
}