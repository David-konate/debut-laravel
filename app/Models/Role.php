<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{


    //pluriel car un role peut avoirplusieurs users
    //cardinalité 1,n
    public function users(){
        return $this->hasMany(User::class);
    }

    //nom au pluriel car un user peut poster plusieurs posts
    // 0,n
    public function posts()
    {
        return $this->hasMany(Comment::class);
    }

    //nom au singulier car 1 seul role
    public function role()
    {
        return $this->belongsTo(Role::class);
    }

    public function isAdmin()
    {
        return $this->role_id == 2;
    }
}
