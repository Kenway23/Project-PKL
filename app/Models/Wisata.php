<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wisata extends Model
{
    use HasFactory;
    public $fillable = ['nama_wisata', 'alamat','deskripsi', 'foto'];
    public $timestamps = true;
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
