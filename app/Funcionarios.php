<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Funcionarios extends Model
{
    public function Rota()
    {
    	return $this->hasMany(Rotas::class, 'id');
    }
}
