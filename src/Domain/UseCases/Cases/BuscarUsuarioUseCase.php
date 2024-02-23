<?php

namespace Src\Domain\UseCases\Cases;

use Src\Domain\Entities\Usuario;
use Src\Domain\Repositories\UsuarioRepository;
use Src\Domain\UseCases\UsuarioUseCaseInterface;

class BuscarUsuarioUseCase implements UsuarioUseCaseInterface
{
    private UsuarioRepository $repository;

    public function __construct(UsuarioRepository $repository)
    {
        $this->repository = $repository;
    }

    public function handle(Usuario $usuario): array
    {
        $this->repository->salvar($usuario);

        return [
            'message' => 'success',
            'usuario' => $usuario->toArray()
        ];
    }
}