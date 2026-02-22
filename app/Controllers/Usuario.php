<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Usuario extends BaseController
{
    public function index()
    {
        return view('welcome_message');
    }

    public function login()
    {
        return view('login');
    }

    public function ingresar()
    {
        return view('');
    }

    public function registrar()
    {
        return view('registrar');
    }

    public function registrar_nuevo_usuario()
    {
        
    }
}
