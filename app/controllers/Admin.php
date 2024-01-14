<?php

class Admin extends Controller {
    public function index()
    {
        $data['judul'] = 'Dashboard Admin';
        $data['msr'] = $this->model('muser_model')->getAllmuser();
        $data['recordCount']  = $this->model('muser_model')->getRecordCount(); // user
        $data['recordCount2']  = $this->model('muser_model')->getRecordCount2(); // perusahaan
        $this->view('templates/admin-header', $data);
        $this->view('admin/index' , $data);
        // $this->view('templates/footer', $data);
    }
    public function pengguna()
    {

        $data['judul'] = 'Management User';
        $data['msr'] = $this->model('muser_model')->getAllmuser();   
        if(empty($_SESSION['akses'])){
                        
            header('Location: '. BASEURL .'/login');

        }else if($_SESSION['akses'] == 'User') {
            
            header('Location: '. BASEURL .'/home');
        }else if($_SESSION['akses'] == 'Perusahaan') {
            
            header('Location: '. BASEURL .'/perusahaan');
        }

        $this->view('templates/admin-header', $data);
        $this->view('admin/pengguna', $data);
    }
    public function admin()
    {
        $data['judul'] = 'Profil Admin';
        $data['msr'] = $this->model('muser_model')->getAllmuser (); // getalluntuk?

        if(empty($_SESSION['akses'])){
                        
            header('Location: '. BASEURL .'/login');

        }else if($_SESSION['akses'] == 'User') {
            
            header('Location: '. BASEURL .'/home');
        }else if($_SESSION['akses'] == 'Perusahaan') {
            
            header('Location: '. BASEURL .'/perusahaan');
        }

        $this->view('templates/admin-header', $data);
        $this->view('admin/admin' , $data);
        // $this->view('templates/footer', $data);
    }


    public function perusahaan()
    {
        $data['judul'] = 'Manajemen Perusahaan';
        $data['Prs'] = $this->model('prs_model')->getAllPerusahaan();

        if(empty($_SESSION['akses'])){
                        
            header('Location: '. BASEURL .'/login');

        }else if($_SESSION['akses'] == 'User') {
            
            header('Location: '. BASEURL .'/home');
        }else if($_SESSION['akses'] == 'Perusahaan') {
            
            header('Location: '. BASEURL .'/perusahaan');
        }

        $this->view('templates/admin-header', $data);
        $this->view('admin/perusahaan' , $data);
        // $this->view('tamplates/footer', $data);
    }

    public function detail($id)
    {
        $data['title'] = 'Detail Perusahaan';
        $data['Prs'] = $this->model('prs_model')->getAllPerusahaanById($id);

        if(empty($_SESSION['akses'])){
                        
            header('Location: '. BASEURL .'/login');

        }else if($_SESSION['akses'] == 'User') {
            
            header('Location: '. BASEURL .'/home');
        }else if($_SESSION['akses'] == 'Perusahaan') {
            
            header('Location: '. BASEURL .'/perusahaan');
        }

        $this->view('templates/admin-header', $data);
        $this->view('admin/detail', $data);
    }
    public function edit($id){

		$data['title'] = 'Detail Perusahaan';
		$data['Prs'] = $this->model('prs_model')->getAllPerusahaanById($id);
        $this->view('templates/admin-header', $data);
		$this->view('admin/edit', $data);
	}
    public function updatePerusahaan()
    {	
		if( $this->model('prs_model')->updateDataPerusahaan($_POST) > 0 ) {
			Flasher::setFlash('Berhasil','diupdate','success');
			header('location: '. BASEURL . '/admin/perusahaan');
			exit;			
		}else{
			Flasher::setFlash('Gagal','diupdate','danger');
			header('location: '. BASEURL . '/admin/perusahaan');
			exit;	
		}
	}
    public function getubahprs()
    {

        echo json_encode($this->model('prs_model')->getAllPerusahaanById($_POST['id_prs']));
    }
    public function hapusprs($id){
        if( $this->model('prs_model')->hapusDataPerusahaan($id) > 0 ) {
            Flasher::setFlash('Berhasil','dihapus','success');
            header('location: '. BASEURL . '/admin/perusahaan');
            exit;			
        }else{
            Flasher::setFlash('Gagal','dihapus','danger');
            header('location: '. BASEURL . '/admin/perusahaan');
            exit;	
        }
    }
    public function tambahprs()
    {
        if ($this->model('prs_model')->tambahDataPerusahaan($_POST) > 0) {
            Flasher::setFlash('berhasil', 'ditambahkan', 'success');
            header('location: ' . BASEURL . '/admin/perusahaan');
            exit;
        } else {
        Flasher::setFlash('gagal', 'ditambahkan', 'danger');
        header('location: ' . BASEURL . '/admin/perusahaan');
        exit;
        }
    }


    public function user()
    {
        $data['judul'] = 'user integrasi';
        $data['usr'] = $this->model('muser_model')->getAlluser();
        $this->view('templates/admin-header', $data);
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


    //loker di admin
    public function loker()
    {
        $data['judul'] = 'Lowongan Pekerjaan';

        if (isset($_POST['keyword'])) {
            $data['loker'] = $this->model('loker_model')->cariLoker();
        } else {
            // Jika tidak ada pencarian, gunakan data asli reservasi
            $data['loker'] = $this->model('loker_model')->getAllLoker();
        }

        if(empty($_SESSION['akses'])){
                        
            header('Location: '. BASEURL .'/login');

        }else if($_SESSION['akses'] == 'User') {
            
            header('Location: '. BASEURL .'/home');
        }else if($_SESSION['akses'] == 'Perusahaan') {
            
            header('Location: '. BASEURL .'/perusahaan');
        }

        $this->view('templates/admin-header', $data);
        $this->view('admin/loker', $data); 
    }

    public function detaillkr($id)
    {
        $data['judul'] = 'Detail Loker';
        $data['loker'] = $this->model('loker_model')->getLokerById($id);

        if(empty($_SESSION['akses'])){
                        
            header('Location: '. BASEURL .'/login');

        }else if($_SESSION['akses'] == 'User') {
            
            header('Location: '. BASEURL .'/home');
        }else if($_SESSION['akses'] == 'Perusahaan') {
            
            header('Location: '. BASEURL .'/perusahaan');
        }

        $this->view('templates/admin-header', $data);
        $this->view('admin/detaillkr', $data);
    }

    public function tambahlkr()
    {
        if( $this->model('loker_model')->tambahDataLoker($_POST) > 0 ) {
            Flasher::setFlash('berhasil', 'ditambahkan', 'success');
            header('Location: ' . BASEURL . '/admin/loker');
            exit;
        } else {
            Flasher::setFlash('gagal', 'ditambahkan', 'danger');
            header('Location: ' . BASEURL . '/admin/loker');
            exit;
        }
    }

    public function hapuslkr($id_loker)
    {
        if( $this->model('loker_model')->hapusDataLoker($id_loker) > 0 ) {
            Flasher::setFlash('berhasil', 'dihapus', 'success');
            header('Location: ' . BASEURL . '/admin/loker');
            exit;
        } else {
            Flasher::setFlash('gagal', 'dihapus', 'danger');
            header('Location: ' . BASEURL . '/admin/loker');
            exit;
        }
    }

    public function getUbahlkr()
    {
        echo json_encode($this->model('loker_model')->getLokerById($_POST['id_loker']));
    }

    public function ubahlkr()
    {
        if( $this->model('loker_model')->ubahDataLoker($_POST) > 0 ) {
            Flasher::setFlash('berhasil', 'diubah', 'success');
            header('Location: ' . BASEURL . '/admin/loker');
            exit;
        } else {
            Flasher::setFlash('gagal', 'diubah', 'danger');
            header('Location: ' . BASEURL . '/admin/loker');
            exit;
        }
    }
}