<?php

namespace Src\Domain\Repositories;

use Src\Domain\Entities\Usuario;

interface UsuarioRepositoryInterface
{
   public function salvar(Usuario $usuario): bool;
   public function listarTodosUsuarios(): array;
}