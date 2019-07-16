<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username', 'email','alamat', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    protected $primaryKey = 'id_users';

    public function roles()
    {
        Return $this->belongsToMany(Role::Class, '_role_admin', 'id_users', 'id_roles');
    }

    public function putRole($role)
    {
        if (is_string($role))
        {
            $role = Role::whereRoleName($role)->first();
        }
        return $this->roles()->Attach($role);
    }

    public function hasRole($roleName)
    {
        foreach ($this->roles As $role)
        {
            if ($role->role === $roleName) return true;
        }
        return false;
    }
}
