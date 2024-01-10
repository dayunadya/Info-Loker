<?php

class Welcome extends Controller {
    public function index()
    {
        $data['judul'] = 'Info Loker';

        if (!empty($_SESSION['akses'])) {
            if($_SESSION['akses'] == 'Admin'){
                        
                header('Location: '. BASEURL .'/admin');
            }elseif ($_SESSION['akses'] == 'User'){
                
                header('Location: '. BASEURL .'/home');
            } else{
                
                header('Location: '. BASEURL .'/perusahaan');
            }
        }

        $this->view('welcome/index', $data);
    }

    public function login()
    {
        $data['judul'] = 'Masuk Info Loker';


        if (!empty($_SESSION['akses'])) {
            if($_SESSION['akses'] == 'Admin'){
                        
                header('Location: '. BASEURL .'/admin');
            }elseif ($_SESSION['akses'] == 'User'){
                
                header('Location: '. BASEURL .'/home');
            } else{
                
                header('Location: '. BASEURL .'/perusahaan');
            }
        }
        

        $this->view('welcome/login', $data);
        
    }

    public function register()
    {
        $data['judul'] = 'Daftar Info Loker';

        if (!empty($_SESSION['akses'])) {
            if($_SESSION['akses'] == 'Admin'){
                        
                header('Location: '. BASEURL .'/admin');
            }elseif ($_SESSION['akses'] == 'User'){
                
                header('Location: '. BASEURL .'/home');
            } else{
                
                header('Location: '. BASEURL .'/perusahaan');
            }
        }

        $this->view('welcome/register', $data);
    }

    //fungsi login dan register multi user

    //registrasi user
    public function Tambahregister()
    {
        $_POST['akses'] = in_array($_POST['akses'], ['User', 'Perusahaan']) ? $_POST['akses'] : 'User';
        
        // Hash password once
        $_POST['password'] = password_hash($_POST['password'], PASSWORD_DEFAULT);
        
        if ($this->model('register_model')->TambahDataRegister($_POST) > 0) {
            header('Location:' . BASEURL . '/welcome/login');
            exit;
        } else {
            echo 'Gagal Daftar!';
        }
    }




    //login 
    public function user()
    {
        $email = $_POST['email'];
        $password = $_POST['password'];
        
        if (!empty($email) && !empty($password)) {
            
            if ($this->model('login_model')->cekUserTrue($email) > 0) {
                $role = $this->model('login_model')->getRole($email);
                $data = $this->model('login_model')->ambilDataUser($email);
                $hashedPassword = $data['password'];
                
                if ($role === 'Admin') {
                    // Check without password hashing for admin
                    if ($password == $data['password']) {
                        session_start();
                        $_SESSION['akses'] = $role;
                        header('Location: ' . BASEURL . '/admin');
                    } else {
                        echo 'Password salah untuk Admin';
                    }
                } elseif ($role === 'User') {
                    // Check with password hashing for User and Perusahaan
                    if (password_verify($password, $hashedPassword)) {
                        session_start();
                        $_SESSION['password'] = $hashedPassword;
                        $_SESSION['akses'] = $role;
                        header('Location: ' . BASEURL . '/home');
                    } else {
                        echo 'Password salah untuk User';
                    }
                } elseif ($role === 'Perusahaan') {
                    if (password_verify($password, $hashedPassword)) {
                        session_start();
                        $_SESSION['password'] = $hashedPassword;
                        $_SESSION['akses'] = $role;
                        header('Location: ' . BASEURL . '/perusahaan');
                    } else {
                        echo 'Password salah untuk Perusahaan';
                    }
                }
            } else {
                header('Location: ' . BASEURL . '/welcome/login');
                echo 'Gagal menemukan User';
            }
        } else {
            echo 'Masukkan data terlebih dahulu';
        }
    }



    public function prosesLogout(){
        session_start();
        session_destroy();

        header('location: ' . BASEURL . '/welcome/login');
        exit();
    }
}
