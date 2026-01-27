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
}
