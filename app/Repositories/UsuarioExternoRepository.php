<?php

namespace App\Repositories;

use App\UsuarioExterno;
use Illuminate\Support\Env;

class UsuarioExternoRepository implements UsuarioExternoRepositoryInterface {

    public function getUsuarioExternoById($usuarioExternoId){
        return UsuarioExterno::find($usuarioExternoId);
    }

    public function getUsuarioExternoByDocumentoESenha($documento, $senha){
        $encryption_key = Env::get('ENCRYPTION_KEY', '');
        $hashSenha = md5($encryption_key.$senha);

        return UsuarioExterno::query()
                ->where('documento', $documento)
                ->where('senha', $hashSenha)
                ->first();
    }

}
