<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $fillable = [
    	'role', 'created_at', 'updated_at'
    ];

    protected $primaryKey = 'id_roles';

    public function users()
    {
    	return $this->belongsToMany(User::Class)->using(RoleUser::Class);
    }
}
