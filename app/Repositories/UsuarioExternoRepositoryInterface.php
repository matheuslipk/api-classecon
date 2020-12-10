<?php

namespace App\Repositories;

interface UsuarioExternoRepositoryInterface {
    public function getUsuarioExternoById($usuarioExternoId);

    public function getUsuarioExternoByDocumentoESenha($documento, $senha);
}
