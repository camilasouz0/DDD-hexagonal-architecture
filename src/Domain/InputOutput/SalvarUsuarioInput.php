<?php
declare(strict_types=1); 
namespace Src\Domain\InputOutput;

use Illuminate\Support\Str;
use Src\Domain\Entities\Usuario;

class SalvarUsuarioInput
{
   protected Usuario $usuario;
   private $uuid;
   private $nome;
   private $email;
   private $senha;

   public function __construct(array $params) {
      $this->uuid = $params['uuid'] ?? Str::uuid()->toString();
      $this->nome = $params['nome'];
      $this->email = $params['email'];
      $this->senha = $params['senha'];
   }

   public function getUuid()
   {
      return $this->uuid;
   }

   public function getNome()
   {
      return $this->nome;
   }

   public function getEmail()
   {
      return $this->email;
   }

   public function getSenha()
   {
      return $this->senha;
   }

   public function toArray(): array
    {
        return [
            'uuid' => $this->uuid,
            'nome' => $this->nome,
            'email' => $this->email,
            'senha' => $this->senha
        ];
    }
}