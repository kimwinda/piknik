<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $table = "event";
    protected $fillable = [
        'judul', 'deskripsi','foto',
    ];
    protected $primaryKey = 'id_event';

}
