<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class ContadorModel extends Authenticatable
{
    protected $table = 'usuarios';

    protected $primaryKey = 'id_usuario';

    protected $fillable = ['nome_usuario', 'senha_usuario'];

    protected $hidden = ['senha_usuario'];

    public function getAuthPassword()
    {
        return $this->senha_usuario;
    }
}
