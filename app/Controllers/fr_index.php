<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class fr_index extends BaseController
{
    public function index()
    {   $data['locale'] = $this->request->getLocale();
        echo view('fr/pages/index', $data);
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
        $data['locale'] = $this->request->getLocale();
        echo view('fr/pages/about', $data);
    }

    public function blog()
    {
        $data['locale'] = $this->request->getLocale();
        echo view('fr/pages/blog', $data);
    }

    public function gallery()
    {
        $data['locale'] = $this->request->getLocale();
        echo view('fr/pages/gallery', $data);
    }

    public function contact()
    {
        $data['locale'] = $this->request->getLocale();
        echo view('fr/pages/contact', $data);
    }

    public function talent()
    {
        $data['locale'] = $this->request->getLocale();
        echo view('fr/pages/talent', $data);
    }

    public function details_talent()
    {
        $data['locale'] = $this->request->getLocale();
        echo view('fr/pages/details-talent', $data);
    }

    public function details_service()
    {
        echo view('fr/pages/details-service');
    }

    public function service()
    {
        $data['locale'] = $this->request->getLocale();
        echo view('fr/pages/service', $data);
    }

    public function post()
    {
        $data['locale'] = $this->request->getLocale();
        echo view('fr/pages/post', $data);
    }

    public function error()
    {
        $data['locale'] = $this->request->getLocale();
        echo view('fr/pages/error', $data);
    }

    public function terms()
    {
        $data['locale'] = $this->request->getLocale();
        echo view('fr/pages/terms', $data);
    }

    public function privacy()
    {
        $data['locale'] = $this->request->getLocale();
        echo view('fr/pages/privacy', $data);
    }

    public function forget()
    {
        $data['locale'] = $this->request->getLocale();
        echo view('fr/pages/forget', $data);
    }

    public function blog1()
    {
        $data['locale'] = $this->request->getLocale();
        echo view('fr/pages/blog1', $data);
    }

    public function blog2()
    {
        $data['locale'] = $this->request->getLocale();
        echo view('fr/pages/blog2', $data);
    }

    public function blog3()
    {
        echo view('fr/pages/blog3');
    }

    public function career()
    {
        echo view('fr/pages/career');
    }
}
