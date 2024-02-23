<?php

namespace Src\Domain\Repositories;

use Illuminate\Database\Eloquent\Collection;
use Src\Domain\Entities\Usuario;
use Src\Domain\UseCases\UsuarioUseCaseInterface;


class UsuarioRepository implements UsuarioUseCaseInterface
{
   public function listarTodosUsuarios(): Collection
   {
      return Usuario::all();
   }

   public function salvar(array $data): Usuario
   {
      return Usuario::create($data);
   }
}