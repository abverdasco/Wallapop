<?php

namespace App\Controllers;

class Inicio extends BaseController
{
    // public function index(): string
    // {
    //     $session = session();
    //     $session->set('username', 'Álvaro');
    //     return view('templates/header').view('mostrar_articulo').view('templates/footer');
    // }

    public function sobre_nosotros() {
        return view('templates/header').view('sobre_nosotros').view('templates/footer');
    }

    public function faq() {
        return view('templates/header').view('faq').view('templates/footer');
    }

}
