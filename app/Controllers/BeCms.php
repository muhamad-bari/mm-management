<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class BeCms extends BaseController
{
    public function index()
    {
        return view('cms/login');
    }
}
