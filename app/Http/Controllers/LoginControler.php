<?php

namespace App\Http\Controllers;

use App\Repositories\UsuarioExternoRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;


class LoginControler extends Controller{

    private $usuarioExternoRepository;

    public function __construct(UsuarioExternoRepository $usuarioExternoRepository){
        $this->usuarioExternoRepository = $usuarioExternoRepository;
    }

    public function login(Request $request){
        $documento = $request->get('documento');
        $senha = $request->get('senha');
        $user = $this->usuarioExternoRepository->getUsuarioExternoByDocumentoESenha($documento, $senha);
        if(!$user)return Response::json(['erro'=>'Documento ou senha incorretos'], 401);
        return Response::json($user, 200);
    }

}
