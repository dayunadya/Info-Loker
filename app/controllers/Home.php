<?php

class Home extends Controller {
    public function index()
    {
        $data['judul'] = 'Beranda';
        $data['loker'] = $this->model('perusahaan_model')->getLokerLimit3();

        if(empty($_SESSION['akses'])){
                        
            header('Location: '. BASEURL .'welcome/login');

        }else if($_SESSION['akses'] == 'Admin'){
            header('Location: '. BASEURL .'/admin');
        }else if($_SESSION['akses'] == 'Perusahaan'){
            header('Location: '. BASEURL .'/perusahaan');
        }

        $this->view('templates/header', $data);
        $this->view('home/index', $data);
        $this->view('templates/footer');
    }

    public function loker()
    {
        $data['judul'] = 'Lowongan Kerja';
        $data['loker'] = $this->model('perusahaan_model')->getAllLoker();
        
        if(empty($_SESSION['akses'])){
                        
            header('Location: '. BASEURL .'welcome/login');

        }else if($_SESSION['akses'] == 'Admin'){
            header('Location: '. BASEURL .'/admin');
        }else if($_SESSION['akses'] == 'Perusahaan'){
            header('Location: '. BASEURL .'/perusahaan');
        }

        $this->view('templates/header', $data);
        $this->view('home/loker', $data);
        $this->view('templates/footer');
    }

    public function detail($id_loker)
    {
        $data['judul'] = 'Detail Lowongan Kerja';
        $data['loker'] = $this->model('loker_model')->getLokerById($id_loker);

        if(empty($_SESSION['akses'])){
                        
            header('Location: '. BASEURL .'welcome/login');

        }else if($_SESSION['akses'] == 'Admin'){
            header('Location: '. BASEURL .'/admin');
        }else if($_SESSION['akses'] == 'Perusahaan'){
            header('Location: '. BASEURL .'/perusahaan');
        }

        $this->view('templates/header', $data);
        $this->view('home/detail', $data);
        $this->view('templates/footer');
    }

    public function cari()
    {
        $data['judul'] = 'Beranda';
        $data['loker'] = $this->model('loker_model')->cariLoker();

        if(empty($_SESSION['akses'])){
                        
            header('Location: '. BASEURL .'welcome/login');

        }else if($_SESSION['akses'] == 'Admin'){
            header('Location: '. BASEURL .'/admin');
        }else if($_SESSION['akses'] == 'Perusahaan'){
            header('Location: '. BASEURL .'/perusahaan');
        }

        $this->view('templates/header', $data);
        $this->view('home/index', $data);
        $this->view('templates/footer');
    }

}