<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengembalian extends Model
{
    use HasFactory;
    protected $fillable = ['id_pengembalian','judul','id_anggota','id_buku','tgl_jatuh_tempo','tgl_kembali','terlambat','denda'];
    protected $table = 'pengembalians';
    protected $primaryKey = 'id_pengembalian';
    public $incrementing = false;
    public $timestamp = true;
}
