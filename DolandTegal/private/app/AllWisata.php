<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AllWisata extends Model
{
    protected $table = 'wisata';
    protected $fillable = [
    	'nama_wisata','image','updated_at','deskripsi'
    ];
}
