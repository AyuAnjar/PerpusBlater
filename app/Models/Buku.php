<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    use HasFactory;
    protected $fillable = ['gambar','id_buku','judul','pengarang','penerbit','thn_terbit','stok','lokasi'];
    protected $table = 'bukus';
    protected $primaryKey = 'id_buku';
    public $incrementing = false;
    public $timestamp = true;

    public function peminjaman()
    {
        return $this->hasMany(Peminjaman::class);
    }

    public function pengembalian()
    {
        return $this->hasMany(Pengembalian::class);
    }
}
