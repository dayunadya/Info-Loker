<?php

class muser_model {
    private $db;
    private $table = 'pengguna';
    private $table2 = 'loker'; // Ubah tabel menjadi 'siswa'

    public function __construct() {
        $this->db = new Database;
    }
    public function getAllmuser(){
        $this->db->query('SELECT * FROM pengguna WHERE akses = "User"');
        return $this->db->resultSet();
    }
    public function getAlldb(){
        $this->db->query('SELECT * FROM pengguna WHERE akses = "Admin"');
        return $this->db->resultSet();
    }
    public function getRecordCount() {
        $this->db->query('SELECT * FROM pengguna WHERE akses = "User"');
        return $this->db->resultSet();
    }
    public function getRecordCount2() {
        $this->db->query('SELECT * FROM pengguna WHERE akses = "Perusahaan"');
        return $this->db->resultSet();
    }
    // public function getRecordCount2() {
    //     $this->db->query('SELECT * FROM perusahaan');
    //     return $this->db->resultSet();
    // }
    public function getRecordCount3() {
        $this->db->query('SELECT * FROM  pengguna WHERE akses = "Perusahaan"');
        return $this->db->resultSet();
    }
    
    public function getAllperu(){
        $this->db->query('SELECT * FROM pengguna WHERE akses = "Perusahaan"');
    return $this->db->resultSet();
    }
    public function getAlluser(){
        $this->db->query('SELECT * FROM pengguna');
    return $this->db->resultSet();
    }
    public function tambahDatamuser($data) {
        if (isset($data['username']) && isset($data['nama']) && isset($data['deskripsi']) && isset($data['jenis_kelamin']) && isset($data['email']) && isset($data['no_telp']) && isset($data['alamat']) && isset($data['password']) && isset($data['akses'])) {
            $query = "INSERT INTO pengguna (username, nama, deskripsi, jenis_kelamin, email, no_telp, alamat,  password, akses) VALUES (:username, :nama, :deskripsi, :jenis_kelamin, :email, :no_telp, :alamat,  :password, :akses)";
    
            $this->db->query($query);
    
            $this->db->bind('username', $data['username']);
            $this->db->bind('nama', $data['nama']);
            $this->db->bind('deskripsi', $data['deskripsi']);
            $this->db->bind('jenis_kelamin', $data['jenis_kelamin']);
            $this->db->bind('email', $data['email']);
            $this->db->bind('no_telp', $data['no_telp']);
            $this->db->bind('alamat', $data['alamat']);
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
        $query = "DELETE FROM pengguna WHERE id = :id";
        
        $this->db->query($query);
        $this->db->bind('id', $id);

        $this->db->execute();

        return $this->db->rowCount();
    }
    public function ubahDatamuser($data) {
        $query = "UPDATE pengguna SET 
            username = :username,
            nama = :nama,
            jenis_kelamin = :jenis_kelamin,
            email = :email,
            no_telp = :no_telp,
            alamat = :alamat,
            password = :password,
            akses = :akses
        WHERE id = :id";
    
        $this->db->query($query);
    
        $this->db->bind('id', $data['id']);  // Add this line to bind the 'id' parameter
        $this->db->bind('username', $data['username']);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('jenis_kelamin', $data['jenis_kelamin']);
        $this->db->bind('email', $data['email']);
        $this->db->bind('no_telp', $data['no_telp']);
        $this->db->bind('alamat', $data['alamat']);
        $this->db->bind('password', $data['password']);
        $this->db->bind('akses', $data['akses']);
    
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

