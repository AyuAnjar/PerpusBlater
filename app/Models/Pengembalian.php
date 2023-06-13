<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengembalian extends Model
{
    use HasFactory;
    protected $fillable = ['id_pengembalian','id_peminjaman','tgl_kembali','denda'];
    protected $table = 'pengembalians';
    protected $primaryKey = 'id_pengembalian';
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

    public function peminjamans()
    {
        return $this->belongsTo(Peminjaman::class, 'id_peminjaman');
    }
}
