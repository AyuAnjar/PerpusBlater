<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peminjaman extends Model
{
    use HasFactory;
    protected $fillable = ['id_peminjaman','id_anggota','id_buku','tgl_pinjam','tgl_jatuh_tempo'];
    protected $table = 'peminjamans';
    protected $primaryKey = 'id_peminjaman';
    public $incrementing = false;
    public $timestamp = true;

    public function bukus()
    {
        return $this->belongsTo(Buku::class, 'id_buku');
    }

    public function anggotas()
    {
        return $this->belongsTo(Anggota::class, 'id_anggota');
    }
}
