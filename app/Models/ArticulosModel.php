<?php

namespace App\Models;

use CodeIgniter\Model;

class ArticulosModel extends Model
{
    protected $table = 'articulos';
    protected $allowedFields = ['nombre', 'marca', 'precio', 'imagen1'];

    public function getArticulos()
    {
        return $this->findAll();
    }

    public function getArticulosUsuario($id)
    {
        $consulta = $this->db->query('')->getResult('array'); 
    }
}