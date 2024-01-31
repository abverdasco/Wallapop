<?php

namespace App\Models;

use CodeIgniter\Model;

class UsuariosModel extends Model
{
    protected $table = 'usuarios';
    protected $allowedFields = ['nombreCompleto', 'usuario', 'contraseña'];

    public function getUsuarios()
    {
        return $this->findAll();
    }

    public function getUnUsuario($usuario, $contra)
    {
        $this->where('usuario',$usuario);
        $this->where('contraseña',$contra);
        return $this->first();
    }
}