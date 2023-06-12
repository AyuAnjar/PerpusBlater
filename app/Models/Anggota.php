<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anggota extends Model
{
    use HasFactory;
    protected $fillable = ['id_anggota','nama','email','pass','telp','alamat'];
    protected $table = 'anggotas';
    protected $primaryKey = 'id_anggota';
    public $incrementing = false;
    public $timestamp = true;
}
