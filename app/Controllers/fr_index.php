<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class fr_index extends BaseController
{
    public function index()
    {
        echo view('fr/pages/index');
    }

    public function login()
    {
        echo view('fr/pages/login');
    }
}