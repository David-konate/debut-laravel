<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    //chargerment auto de l'utilisateur a chaque fois que lon recupere un message
    protected$with = ['user'];

    //nom de la fonvtion au singulier une seul relation
    //cardinalité 1,1
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    //nom au pluriel car un message peut regrouper plusieurs commentaires
    //cardinalité 0,n
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
