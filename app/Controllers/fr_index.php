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

    public function register()
    {
        echo view('fr/pages/register');
    }

    public function about()
    {
        echo view('fr/pages/about');
    }

    public function blog()
    {
        echo view('fr/pages/blog');
    }

    public function gallery()
    {
        echo view('fr/pages/gallery');
    }

    public function contact()
    {
        echo view('fr/pages/contact');
    }

    public function talent()
    {
        echo view('fr/pages/talent');
    }

    public function details_talent()
    {
        echo view('fr/pages/details-talent');
    }

    public function details_service()
    {
        echo view('fr/pages/details-service');
    }

    public function service()
    {
        echo view('fr/pages/service');
    }

    public function post()
    {
        echo view('fr/pages/post');
    }

    public function error()
    {
        echo view('fr/pages/error');
    }

    public function terms()
    {
        echo view('fr/pages/terms');
    }

    public function privacy()
    {
        echo view('fr/pages/privacy');
    }

    public function forget()
    {
        echo view('fr/pages/forget');
    }
}