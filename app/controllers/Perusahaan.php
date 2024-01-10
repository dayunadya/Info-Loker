<?php
class Perusahaan extends Controller{
    private $db;
    private $table = 'loker';
// menampilkan]
    public function index()
    {
        $data['judul'] = 'Dashboard Perusahaan';
        $data['dbadmin'] = $this->model('perusahaan_model')->getAllloker();
        $data['recordCount']  = $this->model('perusahaan_model')->getRecordCount(); // loker
        $data['recordCount2']  = $this->model('perusahaan_model')->getRecordCount2(); // pelamar
            // $this->view('tamplates/header', $data);

            if(empty($_SESSION['akses'])){
                            
                header('Location: '. BASEURL .'welcome/login');

            }else if($_SESSION['akses'] == 'Admin') {
                
                header('Location: '. BASEURL .'/admin');
            } else if ($_SESSION['akses'] == 'User') {
                
                header('Location: '. BASEURL .'/home');
            }

            $this->view('perusahaan/index' , $data);
            $this->view('templates/admin-footer', $data);  
    }

    public function loker()
    {
        $data['judul'] = 'Manajemen Loker';
        $data['loker'] = $this->model('perusahaan_model')->getAllloker();   // memanggil getAllcompany di company_model
        
        if(empty($_SESSION['akses'])){
                            
            header('Location: '. BASEURL .'welcome/login');

        }else if($_SESSION['akses'] == 'Admin') {
            
            header('Location: '. BASEURL .'/admin');
        } else if ($_SESSION['akses'] == 'User') {
            
            header('Location: '. BASEURL .'/home');
        }

        $this->view('perusahaan/loker' , $data);
        $this->view('templates/admin-footer');  
        // $this->view('tamplates/header', $data);
    }
    
    public function profile()
    {
        $data['judul'] = 'Profil Perusahaan';
        $data['profiladmin'] = $this->model('perusahaan_model')->getAllcompany (); // get all untuk?
        // $this->view('templates/admin-header', $data);
        
        if(empty($_SESSION['akses'])){
                            
            header('Location: '. BASEURL .'welcome/login');

        }else if($_SESSION['akses'] == 'Admin') {
            
            header('Location: '. BASEURL .'/admin');
        } else if ($_SESSION['akses'] == 'User') {
            
            header('Location: '. BASEURL .'/home');
        }

        $this->view('perusahaan/profile' , $data);
        $this->view('templates/admin-footer', $data);
    }
   
    // manage user
    public function tambah()
    {
        if( $this->model('perusahaan_model')->tambahDatacompany($_POST) > 0 ) {
            Flasher::setFlash('berhasil', 'ditambahkan', 'success');
            header('Location: ' . BASEURL . '/perusahaan/loker');
            exit;
        } else {
            Flasher::setFlash('gagal', 'ditambahkan', 'danger');
            header('Location: ' . BASEURL . '/perusahaan/loker');
            exit;
        }
    }
    public function hapus($id)
    {
        if( $this->model('perusahaan_model')->hapusDatacompany($id) > 0 ) {
            Flasher::setFlash('berhasil', 'dihapus', 'success');
            header('Location: ' . BASEURL . '/perusahaan/loker');
            exit;
        } else {
            Flasher::setFlash('gagal', 'dihapus', 'danger');
            header('Location: ' . BASEURL . '/perusahaan/loker');
            exit;
        }
    }
    public function ubah()
    {
        if( $this->model('perusahaan_model')->ubahDatacompany($_POST) > 0 ) {
            Flasher::setFlash('berhasil', 'diubah', 'success');
            header('Location: ' . BASEURL . '/perusahaan/loker');
            exit;
        } else { 
            Flasher::setFlash('gagal', 'diubah', 'danger');
            header('Location: ' . BASEURL . '/perusahaan/loker');
            
            exit;
        } 
    }
    public function getubah()
    {
        echo json_encode($this->model('perusahaan_model')->getcompanyById($_POST['id']));
     }

    
}
