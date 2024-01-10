<?php

class Admin extends Controller {
    public function index()
    {
        $data['judul'] = 'Dashboard Admin';
        $data['msr'] = $this->model('muser_model')->getAllmuser();   
        if(empty($_SESSION['akses'])){
                        
            header('Location: '. BASEURL .'/login');

        }else if($_SESSION['akses'] == 'User') {
            
            header('Location: '. BASEURL .'/home');
        }else if($_SESSION['akses'] == 'Perusahaan') {
            
            header('Location: '. BASEURL .'/perusahaan');
        }

        $this->view('templates/admin-header', $data);
        $this->view('admin/index', $data);
    }
    public function dashboard()
    {
        $data['judul'] = 'Dashboard Admin';
        $data['msr'] = $this->model('muser_model')->getAllmuser();
        $data['recordCount']  = $this->model('muser_model')->getRecordCount(); // user
        $data['recordCount2']  = $this->model('muser_model')->getRecordCount2(); // perusahaan
        // $this->view('tamplates/header', $data);
        $this->view('admin/dashboard' , $data);
        // $this->view('templates/footer', $data);

        
    }
    public function admin()
    {
        $data['judul'] = 'Profil Admin';
        $data['msr'] = $this->model('muser_model')->getAllmuser (); // getalluntuk?
        // $this->view('tamplates/header', $data);
        $this->view('admin/admin' , $data);
        // $this->view('templates/footer', $data);
    }
    public function perusahaan()
    {
        $data['judul'] = 'Manajemen Perusahaan';
        $data['prs'] = $this->model('muser_model')->getAllperu();
        // $this->view('tamplates/header', $data);
        $this->view('admin/perusahaan' , $data);
        // $this->view('tamplates/footer', $data);
    }
    public function user()
    {
        $data['judul'] = 'user integrasi';
        $data['usr'] = $this->model('muser_model')->getAlluser();
        // $this->view('tamplates/header', $data);
        $this->view('admin/user' , $data);
        // $this->view('tamplates/footer', $data);
    }
    // manage user
    public function tambah()
    {
        if( $this->model('muser_model')->tambahDatamuser($_POST) > 0 ) {
            Flasher::setFlash('berhasil', 'ditambahkan', 'success');
            header('Location: ' . BASEURL . '/admin');
            exit;
        } else {
            Flasher::setFlash('gagal', 'ditambahkan', 'danger');
            header('Location: ' . BASEURL . '/admin');
            exit;
        }
    }
    public function hapus($id)
    {
        if( $this->model('muser_model')->hapusDatamuser($id) > 0 ) {
            Flasher::setFlash('berhasil', 'dihapus', 'success');
            header('Location: ' . BASEURL . '/admin');
            exit;
        } else {
            Flasher::setFlash('gagal', 'dihapus', 'danger');
            header('Location: ' . BASEURL . '/admin');
            exit;
        }
        

    }
    public function ubah()
    {
        if( $this->model('muser_model')->ubahDatamuser($_POST) > 0 ) {
            Flasher::setFlash('berhasil', 'diubah', 'success');
            header('Location: ' . BASEURL . '/muser');
            exit;
        } else { 
            Flasher::setFlash('gagal', 'diubah', 'danger');
            header('Location: ' . BASEURL . '/muser');
            
            exit;
        } 
    }
    public function getubah()
    {
        echo json_encode($this->model('muser_model')->getMuserById($_POST['id']));
     }
}