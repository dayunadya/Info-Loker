<?php

class muser_model {
    private $db;
    private $table = 'data_pengguna';
    private $table2 = 'loker'; // Ubah tabel menjadi 'siswa'

    public function __construct() {
        $this->db = new Database;
    }
    public function getAllmuser(){
        $this->db->query('SELECT * FROM data_pengguna');
        return $this->db->resultSet();
    }
    public function getRecordCount() {
        $this->db->query('SELECT * FROM data_pengguna WHERE akses = "User"');
        return $this->db->resultSet();
    }
    // public function getRecordCount2() {
    //     $this->db->query('SELECT * FROM data_pengguna WHERE akses = "Perusahaan"');
    //     return $this->db->resultSet();
    // }
    public function getRecordCount2() {
        $this->db->query('SELECT * FROM perusahaan');
        return $this->db->resultSet();
    }
    public function getRecordCount3() {
        $this->db->query('SELECT * FROM data_pengguna WHERE akses = "Perusahaan"');
        return $this->db->resultSet();
    }
    
    public function getAllperu(){
        $this->db->query('SELECT * FROM data_pengguna WHERE akses = "Perusahaan"');
    return $this->db->resultSet();
    }
    public function getAlluser(){
        $this->db->query('SELECT * FROM data_pengguna');
    return $this->db->resultSet();
    }
    public function tambahDatamuser($data) {
        if (isset($data['username']) && isset($data['nama']) && isset($data['deskripsi']) && isset($data['jenis_kelamin']) && isset($data['tanggal_lahir']) && isset($data['email']) && isset($data['telepon']) && isset($data['alamat']) && isset($data['CV']) && isset($data['password']) && isset($data['akses'])) {
            $query = "INSERT INTO users (username, nama, deskripsi, jenis_kelamin, tanggal_lahir, email, telepon, alamat, CV, password, akses) VALUES (:username, :nama, :deskripsi, :jenis_kelamin, :tanggal_lahir, :email, :telepon, :alamat, :CV, :password, :akses)";
    
            $this->db->query($query);
    
            $this->db->bind('username', $data['username']);
            $this->db->bind('nama', $data['nama']);
            $this->db->bind('deskripsi', $data['deskripsi']);
            $this->db->bind('jenis_kelamin', $data['jenis_kelamin']);
            $this->db->bind('tanggal_lahir', $data['tanggal_lahir']);
            $this->db->bind('email', $data['email']);
            $this->db->bind('telepon', $data['telepon']);
            $this->db->bind('alamat', $data['alamat']);
            $this->db->bind('CV', $data['CV']);
            $this->db->bind('password', $data['password']);
            $this->db->bind('akses', $data['akses']);
    
            $this->db->execute();
    
            return $this->db->rowCount();
        } else {
            // Handle the case where some keys are missing in the $data array
            // You can throw an exception, log an error, or return an error code, as needed.
        }
    }
    public function hapusDatamuser($id)
    {
        $query = "DELETE FROM data_pengguna WHERE id = :id";
        
        $this->db->query($query);
        $this->db->bind('id', $id);

        $this->db->execute();

        return $this->db->rowCount();
    }
    public function ubahDatamuser($data) {
        $query = "UPDATE data_pengguna SET 
            username = :username,
            nama = :nama,
            jenis_kelamin = :jenis_kelamin,
            tanggal_lahir = :tanggal_lahir,
            email = :email,
            telepon = :telepon,
            alamat = :alamat,
            CV = :CV
        WHERE id = :id";
    
        $this->db->query($query);
    
        $this->db->bind('username', $data['username']);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('jenis_kelamin', $data['jenis_kelamin']);
        $this->db->bind('tanggal_lahir', $data['tanggal_lahir']);
        $this->db->bind('email', $data['email']);
        $this->db->bind('telepon', $data['telepon']);
        $this->db->bind('alamat', $data['alamat']);
        $this->db->bind('CV', $data['CV']);
        $this->db->bind('id', $data['id']);
      
    
        $this->db->execute();
    
        return $this->db->rowCount();
    }
    public function getMuserById($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }
    
    // public function getperuById($id)
    // {
    //     $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
    //     $this->db->bind('id', $id);
    //     return $this->db ->single();
    // }
    // public function getmuserById($id)
    // {
    //     $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
    //     $this->db->bind('id', $id);
    //     return $this->db ->single();
    // }
    // public function getuserById($id)
    // {
    //     $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
    //     $this->db->bind('id', $id);
    //     return $this->db ->single();
    // }

    // function untuk menambahkan data user di dashboard admin
 
    // public function tambahDataperu($data) {
    //     if (isset($data['nama']) && isset($data['deskripsi']) && isset($data['alamat']) && isset($data['email']) && isset($data['telepon'])) {
    //         $query = "INSERT INTO users ( nama, deskripsi, alamat, email, telepon) VALUES (:nama, :deskripsi, :alamat, :email, :telepon)";
    
    //         $this->db->query($query);
    
         
    //         $this->db->bind('nama', $data['nama']);
    //         $this->db->bind('deskripsi', $data['deskripsi']);
    //         $this->db->bind('alamat', $data['alamat']);
    //         $this->db->bind('email', $data['email']);
    //         $this->db->bind('telepon', $data['telepon']);
          
    
    //         $this->db->execute();
    
    //         return $this->db->rowCount();
    //     } else {
    //         // Handle the case where some keys are missing in the $data array
    //         // You can throw an exception, log an error, or return an error code, as needed.
    //     }
    // }
 
   

}

