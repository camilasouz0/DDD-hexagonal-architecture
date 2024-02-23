<?php

namespace App\Http\Controllers;

use App\Http\Requests\SalvarUsuarioRequest;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Src\Domain\InputOutput\SalvarUsuarioInput;
use Src\Domain\UseCases\UsuarioUseCaseInterface;
use Symfony\Component\HttpFoundation\Response;

class UsuarioController extends ResponseController
{

    private UsuarioUseCaseInterface $usuarioUseCase;

    public function __construct(UsuarioUseCaseInterface $usuarioUseCase)
    {
        $this->usuarioUseCase = $usuarioUseCase;
    }

    public function salvar(SalvarUsuarioRequest $request): JsonResponse
    {
        try {
            $usuario = new SalvarUsuarioInput($request->all());

            $response = $this->usuarioUseCase->salvar($usuario);

            return $this->successResponse('salvar', $response);
        } catch (\Exception $e) {
            return $this->errorResponse($e, [], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }
}
