<?php 
declare(strict_types=1); 

namespace Modules\Opex\Negocio\CasosUso\Casos;
use Src\Domain\Repositories\UsuarioRepositoryInterface;

class BaseCasoUso {

    public UsuarioRepositoryInterface $usuarioRepositoryInterface;

    public function __construct(UsuarioRepositoryInterface $usuarioRepositoryInterface){
        $this->usuarioRepositoryInterface = $usuarioRepositoryInterface;
    }
}