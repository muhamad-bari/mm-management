<?php

namespace App\Controllers;

use App\Models\Galeri;
use App\Models\KtgGl;
use App\Controllers\BaseController;

class fr_index extends BaseController
{
    public function index()
    {
        $data['locale'] = $this->request->getLocale();
        echo view('fr/pages/index', $data);
    }

    public function login()
    {
        $data['locale'] = $this->request->getLocale();
        echo view('fr/pages/login', $data);
    }

    public function register()
    {
        $data['locale'] = $this->request->getLocale();
        echo view('fr/pages/register', $data);
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

    public function pagegaleriuser()
    {
        $ktgm = new Galeri();
        $ktgM = new KtgGl();
        $glar = array();
        $glr = (session()->get('logged_in')==true) ? $ktgm->join('mm_gl_ket','mm-galeri.kategori = mm_gl_ket.id_gl_ket','left')->findAll(): $ktgm->join('mm_gl_ket','mm-galeri.kategori = mm_gl_ket.id_gl_ket','left')->where('visibility', 0)->findAll();
        foreach($glr as $glrr)
        {
            $glar[] = $glrr;
        }
        return $this->response->setJSON($glar);
    }

    public function gallery()
    {
        $ktgM = new KtgGl();
        $glrM = new Galeri();
        $data['ktg'] = $ktgM->findAll();
        $data['galeri'] = [];
        foreach($data['ktg'] as $row)
        {
            $idKtg = $row['id_gl_ket'];
            $dataGl = [
                'kategori' => $idKtg,
                'visibility' => 0
            ];
            $data['galeri'][]= $glrM->where('kategori', $idKtg)->first();
            $data['tgaleri'][]= (session()->get('logged_in')==true) ? $glrM->where('kategori', $idKtg)->findAll() : $glrM->where($dataGl)->findAll();

        }
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
        $data['locale'] = $this->request->getLocale();
        echo view('fr/pages/details-service', $data);
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
        $data['locale'] = $this->request->getLocale();
        echo view('fr/pages/blog3', $data);
    }

    public function career()
    {
        $data['locale'] = $this->request->getLocale();
        echo view('fr/pages/career', $data);
    }

    public function dashboardUser()
    {
        $data['locale'] = $this->request->getLocale();
        echo view('fr/pages/user-dashboard', $data);
    }

    public function uiele()
    {
        $data['locale'] = $this->request->getLocale();
        echo view('fr/pages/ui-elements', $data);
    }
}
