<?php

class User extends Controller {
    public function index()
    {
        $data['judul'] = 'Profile Pengguna';
        $data['user'] = $this->model('User_model')->getAllUser();

        if(empty($_SESSION['akses'])){
                        
            header('Location: '. BASEURL .'welcome/login');

        }else if($_SESSION['akses'] == 'Admin'){
            header('Location: '. BASEURL .'/admin');
        }else if($_SESSION['akses'] == 'Perusahaan'){
            header('Location: '. BASEURL .'/perusahaan');
        }

        $this->view('templates/header', $data);
        $this->view('user/index', $data);
        $this->view('templates/footer');
    }

    // public function getUbah()
    // {
    //     echo json_encode($this->model('User_model')->getUserById($_POST['id']));
    // }

    // public function ubah()
    // {
    //     if( $this->model('User_model')->ubahDataUser($_POST) > 0 ) {
    //         Flasher::setFlash('berhasil', 'diubah', 'success');
    //         header('Location: ' . BASEURL . '/user');
    //         exit;
    //     } else {
    //         Flasher::setFlash('gagal', 'diubah', 'danger');
    //         header('Location: ' . BASEURL . '/user');
    //         exit;
    //     }
    // }
}