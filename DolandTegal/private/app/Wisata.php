<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Wisata extends Model
{
    use SoftDeletes;
    protected $table = 'wisata';
    protected $fillable = [
    	'nama_wisata','id_kategori','lokasi','image','deskripsi'
    ];
    public function kategori(){
        return $this->belongsTo('App\Kategori', 'id_kategori');
    }
    public function scopeKategori($query, $id_kategori)
    {
        return $query->where('id_kategori', $id_kategori);
    }
}