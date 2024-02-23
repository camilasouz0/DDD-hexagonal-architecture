<?php

namespace Src\Domain\UseCases;

use Src\Domain\Entities\Usuario;
use Src\Domain\InputOutput\SalvarUsuarioInput;

interface UsuarioUseCaseInterface
{
    public function salvar(SalvarUsuarioInput $usuario):array;
}