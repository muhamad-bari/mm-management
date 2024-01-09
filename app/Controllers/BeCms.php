<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\User;
use App\Models\KtgGl;
use App\Models\Galeri;

class BeCms extends BaseController
{
    public function index()
    {
        return view('cms/login');
    }
    public function check_login()
    {
        $userM = new User();
        $user = $this->request->getVar('user');
        $pass = $this->request->getVar('pass');
        $data = $userM->where('username',$user)->first();
        if($data)
        {
            $password=$data['password'];
            $cpass = password_verify($pass, $password);
            if($cpass)
            {
                $sess_data = [
                    'id' => $data['user_id'],
                    'user'=>$data['username'],
                    'nama'=>$data['nama_user'],
                    'level' => $data['level'],
                    'kd' =>$data['kd_user'],
                    'email' => $data['email'],
                    'logged_in' => TRUE
                ];
                session()->set($sess_data);
                $date = date('Y-m-d h:i:s');
                $userM->set('last_login', $date)->where('username', $user)->update();
                return redirect()->to('cms/dashboard');
            }
            else
            {
                session()->setFlashdata('pass', 'Password Salah');
                return redirect()->to('cms/');

            }
        }
        else
        {
            session()->setFlashdata('user', 'Username Tidak Ditemukan');
                return redirect()->to('cms/');
        }
    }

    public function dashboard()
    {
        $data['title'] = "Dashboard Page";
        return view('cms/pages/dashboard',$data );
    }
    public function logout()
    {
        session()->destroy();
        return redirect()->to('cms');
    }

    // Pages Load
    public function gallery()
    {
        $ktgm = new Galeri();
        $data['glr'] = $ktgm->findAll();
        $data['title'] = "Gallery Edit Page";
        return view('cms/pages/gallery', $data);
    }
    public function add_ktg_gl()
    {
        helper(['form']);
        $ktgm = new KtgGl();
        $ktg= $this->request->getVar('ktg');
        $lktg = $ktgm->where('nama_gl_ket', $ktg)->first();
        if(!$lktg)
        {
            $rules = [
                'ktg' => 'required|min_length[3]|max_length[15]'
            ];
            if($this->validate($rules)) {
            $data = ['nama_gl_ket' => $ktg];
                $ktgm->save($data);
                session()->setFlashdata('succ', 'Sukses Tambah Kategori');
                return redirect()->to('cms/galeri');
            }else{
                $data['validation'] = $this->validator;
                return  redirect()->to('cms/galeri')->withInput();
            }
        }
        else
        {
            session()->setFlashdata('err', 'Kategori Sudah Ada, Silahkan Pilih Kategori Lain');
            return redirect()->to('cms/galeri');
        }
    }

    public function addgaleri()
    {
        $totalFile = 0;
        $kategori = $this->request->getVar('kategori_gl');
        $deskripsi = $this->request->getVar('desc_gl');
        if($this->request->getFileMultiple('file_gl'))
        {
            $files = $this->request->getFileMultiple('file_gl');
            foreach($files as $file)
            {
                if($file->isValid() && ! $file->hasMoved())
                {
                    $name = $file->getRandomName();
                    $file->move('uploads/galeri/', $name);
                    $data = [
                        'kategori' => $kategori,
                        'desc' => $deskripsi,
                        'file' => $name
                    ];
                    $glM = new Galeri;
                    $insgl = $glM->save($data);
                    $totalFile++;
                }
            }
            if($totalFile <= 0 && !$insgl)
            {
                session()->setFlashdata('err',"Gagal Upload Data");
                return redirect()->to('cms/galeri');
                
            }
            else
            {
                session()->setFlashdata('succ', "Sukses Tambah $totalFile Item");
                return redirect()->to('cms/galeri');
            }
        }
        
    }

    public function pagegaleri()
    {
        $ktgm = new Galeri();
        $glar = array();
        $glr = $ktgm->findAll();
        foreach($glr as $glrr)
        {
            $glar[] = $glrr;
        }
        return $this->response->setJSON($glar);
    }

    public function delgaleri($id)
    {
        $glM = new Galeri;
        $gll = $glM->where('id_gl', $id)->delete();
        if($gll)
        {
            session()->setFlashdata('succ', "Sukses Hapus Data");
                return redirect()->to('cms/galeri');
        }
        else
        {
            session()->setFlashdata('err',"Gagal Hapus Data");
                return redirect()->to('cms/galeri');
        }
    }
}
