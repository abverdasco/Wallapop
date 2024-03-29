<?php

namespace App\Controllers;
use App\Models\UsuariosModel;
use App\Models\ArticulosModel;
use CodeIgniter\CLI\Console;

/**
 * @class Usuarios
 * Implementa las funciones necesarias para la gestión de usuarios
 */
class Usuarios extends BaseController
{
    public function registro(): string
    {
        $data['nombre'] = 'Usuarios';

        return view('templates/header', $data).view('registro_usuario').view('templates/footer');
    }

    public function guardar()
    {
        $nombreCompleto = $this->request->getPost('nombreCompleto');
        $usuario = $this->request->getPost('usuario');
        $contra = $this->request->getPost('contra');

        $datos = ['nombreCompleto'=>$nombreCompleto, 'usuario'=>$usuario, 'contraseña'=>$contra];
        $modelo = model(UsuariosModel::class);
        $modelo -> save($datos);

        $data['usuRegistrado']=true;
        $session = session();
        $session->set('username', $usuario);
        return view('templates/header', $data).view('registro_usuario').view('templates/footer');
    }

    public function validar() {
        $session = session();
        $session->set('contra-error', false);
        $session->set('usuario-error', false);

        $usuario = $this->request->getPost('usuario');
        $contra = $this->request->getPost('contra');

        $modelo = model(UsuariosModel::class);
        $usuariosExistentes = $modelo->getUsuarios();

        $usuario_ok = true;
        $contra_ok = true;

        for ($i=0; $i < count($usuariosExistentes); $i++) { 

            if ($usuariosExistentes[$i]['usuario'] == $usuario) {
                if ($usuariosExistentes[$i]['contraseña'] == $contra) {
                    $session->set('username', $usuario);
                    return redirect()->to(base_url());
                } else {
                    $session->set('contra-error', true);
                    $contra_ok = false;
                }
            } else {
                $session->set('usuario-error', true);
                $usuario_ok = false;
            }
        }

        if(!$usuario_ok || !$contra_ok) {
            return redirect()->to(base_url().'usuarios/iniciar');
        }
    }

    public function iniciar() {
        return view('templates/header').view('inicio_sesion').view('templates/footer');
    }

    public function cerrar_sesion() {
        $session = session();
        $session->get('username');
        $session->remove('username');
        $session->destroy();

        return redirect()->to(base_url());
    }
}
