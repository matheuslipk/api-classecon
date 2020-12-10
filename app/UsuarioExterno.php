<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UsuarioExterno extends Model{
    protected $table = 'usuario_externo';
    public $timestamps = false;
    protected $hidden = ['senha'];
}
