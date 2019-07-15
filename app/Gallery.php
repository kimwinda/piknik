<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    protected $table = "gallery";
    protected $fillable = [
        'judul','foto',
    ];
    protected $primaryKey = 'id_gallery';
}
