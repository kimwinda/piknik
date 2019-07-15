<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{

	protected $table = "artikel";
    protected $fillable = [
        'judul', 'deskripsi','foto', 'id_kategori',
    ];
    protected $primaryKey = 'id_artikel';

    public function kategori ()
    {
    	return $this->belongsTo('App\Kategori', 'id_kategori');
    }
}
