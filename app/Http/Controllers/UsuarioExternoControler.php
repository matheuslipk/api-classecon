<?php

namespace App\Http\Controllers;

use App\Repositories\UsuarioExternoRepository;
use Illuminate\Support\Facades\Response;

class UsuarioExternoControler extends Controller{

    private $usuarioExternoRepository;

    public function __construct(UsuarioExternoRepository $usuarioExternoRepository){
        $this->usuarioExternoRepository = $usuarioExternoRepository;
    }

    public function index(){
        $user = $this->usuarioExternoRepository->getUsuarioExternoByDocumentoESenha('01820853330', '12345678');
        return Response::json($user, 200);
    }

}
