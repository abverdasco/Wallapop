<?php

namespace App\Controllers;
use App\Models\ArticulosModel;

class Articulos extends BaseController
{
    public function registro_articulos(): string
    {
        $session = session();
        helper('form');
        $data['nombre']='alta artículo';
        if ($session->get('username') != NULL) {
            return view('templates/header', $data).view('registro_articulos').view('templates/footer');
        } else {
            return 'Para registrar artículos debes haber iniciado sesión antes...<br><a href="'.base_url().'">Volver</a>';
        }
    }

    public function guardar()
    {
        $nombre = $this->request->getPost('nombre');
        $marca = $this->request->getPost('marca');
        $precio = $this->request->getPost('precio');

        $imagen = $this->request->getFile('imagen');
        $nombreImagen = $imagen->getRandomName();
        $imagen->move('../public/imagenes', $nombreImagen);

        $datos = ['nombre'=>$nombre, 'marca'=>$marca, 'precio'=>$precio, 'imagen1'=>$nombreImagen];
        $modelo = model(ArticulosModel::class);
        $modelo -> save($datos);

        $data['datosGuardados']=true;
        return view('templates/header', $data).view('registro_articulos').view('templates/footer');
        // session()->setFlashdata('mensaje', 'Artículo registrado correctamente');
        // $mensaje = session()->getFlashdata('mensaje');
        // if ($mensaje) {
        //     echo $mensaje;
        // }
    }

    public function listarTodo()
    {
        $modelo = model(ArticulosModel::class);
        $articulos = $modelo -> findAll();
        $data['articulos'] = $articulos;
        return view('templates/header', $data).view('mostrar_articulo').view('templates/footer');
    }

    public function listarUno($id_articulo)
    {
        $modelo = model(ArticulosModel::class);
        $articulo = $modelo -> find($id_articulo);
        $data['titulo'] = 'Detalle de artículo';
        return view('templates/header', $data).view('articulo').view('templates/footer');
        //En la vista de articulo que aparezca el artículo más detallado, imagen grande...etc. Se llama cuando se hace clic en la imagen del artículo en la lista.
    }

    public function prueba() {
        return view("pruebaAjax");
    }

    public function pruebaAjax() {
        echo "Funciona";
    }
}
