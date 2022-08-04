<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    use HasFactory;
    public $fillable = ['nama_kategori', 'deskripsi','foto', 'id_wisata'];
    public $timestamps = true;

    // membuat relasi one to one di model
    public function wisata()
    {
        // data dari model 'Kategori' bisa dimiliki
        // oleh model 'Wisata' melalui 'id_wisata'
        return $this->belongsTo(Wisata::class, 'id_wisata');
    }

    // method menampilkan image(foto)
    public function image()
    {
        if ($this->foto && file_exists(public_path('images/wisata/' . $this->foto))) {
            return asset('images/wisata/' . $this->foto);
        } else {
            return asset('images/no_image.jpg');
        }
    }
    // mengahupus image(foto) di storage(penyimpanan) public
    public function deleteImage()
    {
        if ($this->foto && file_exists(public_path('images/wisata/' . $this->foto))) {
            return unlink(public_path('images/wisata/' . $this->foto));
        }
    }
}
