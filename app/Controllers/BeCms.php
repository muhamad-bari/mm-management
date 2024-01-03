<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\User;
use App\Models\KtgGl;

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
}
