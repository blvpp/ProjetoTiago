<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuarios extends Model
{
    public $timestamps = false;

    public function noticias()
    {
        return $this->hasMany(Noticias::class,'id_adm');
    } 
}
