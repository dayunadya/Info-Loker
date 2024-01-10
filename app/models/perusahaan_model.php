<?php

class perusahaan_model {
    private $db;
    private $table = 'loker';
    // private $table2 = 'loker'; // Ubah tabel menjadi 'siswa/?'

    public function __construct() {
        $this->db = new Database;
    }
    public function getAllloker(){
        $this->db->query('SELECT * FROM loker ');
        return $this->db->resultSet();
    }
    public function getLokerLimit3()
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' LIMIT 3');
        return $this->db->resultSet();
    }
    public function getAllcompany(){
        $this->db->query('SELECT * FROM pengguna WHERE akses ="perusahaan" ');
        return $this->db->resultSet();
    }
    public function getRecordCount() {
        $this->db->query('SELECT * FROM loker');
        return $this->db->resultSet();
    }
    public function getRecordCount2() {
        $this->db->query('SELECT * FROM pengguna WHERE akses = "user"');
        return $this->db->resultSet();
    }
    
    public function getAllperu(){
        $this->db->query('SELECT * FROM loker');
    return $this->db->resultSet();
    }
    public function getAlluser(){
        $this->db->query('SELECT * FROM loker');
    return $this->db->resultSet();
    }
    public function tambahDatacompany($data) {
        if (isset($data['posisi_loker']) && isset($data['deskripsi_loker']) && isset($data['syarat_loker']) && isset($data['lokasi']) && isset($data['gaji']) && isset($data['tanggal_post'])) {
            $query = "INSERT INTO loker (posisi_loker, deskripsi_loker, syarat_loker, lokasi, gaji, tanggal_post) VALUES (:posisi_loker, :deskripsi_loker, :syarat_loker, :lokasi, :gaji, :tanggal_post)";
    
            $this->db->query($query);
    
            $this->db->bind('posisi_loker', $data['posisi_loker']);
            $this->db->bind('deskripsi_loker', $data['deskripsi_loker']);
            $this->db->bind('syarat_loker', $data['syarat_loker']);
            $this->db->bind('lokasi', $data['lokasi']);
            $this->db->bind('gaji', $data['gaji']);
            $this->db->bind('tanggal_post', $data['tanggal_post']);
           
            if ($this->db->execute()) {
                return $this->db->rowCount();
            } else {
                // Log or print the error message
                echo "Error: " . $this->db->error();
            }
            
            // $this->db->execute();
    
            // return $this->db->rowCount();
        } else {
            // Handle the case where some keys are missing in the $data array
            // You can throw an exception, log an error, or return an error code, as needed.
        }
    }
    public function hapusDatacompany($id_loker)
    {
        $query = "DELETE FROM loker WHERE id_loker = :id";
        
        $this->db->query($query);
        $this->db->bind('id', $id_loker);

        $this->db->execute();

        return $this->db->rowCount();
    }
    public function ubahDatacompany($data) {
        $query = "UPDATE loker SET 
            posisi_loker = :posisi_loker,
            deskripsi_loker = :deskripsi_loker,
            syarat_loker = :syarat_loker,
            lokasi = :lokasi,
            gaji = :gaji,
            tanggal_post = :tanggal_post
        WHERE id_loker = :id";
    
        $this->db->query($query);
    
        $this->db->bind(':posisi_loker', $data['posisi_loker']);
        $this->db->bind(':deskripsi_loker', $data['deskripsi_loker']);
        $this->db->bind(':syarat_loker', $data['syarat_loker']);
        $this->db->bind(':lokasi', $data['lokasi']);
        $this->db->bind(':gaji', $data['gaji']);
        $this->db->bind(':tanggal_post', $data['tanggal_post']);
        $this->db->bind(':id', $data['id_loker']); // Sesuaikan penamaan parameter dengan query SQL
    
        $this->db->execute();
    
        return $this->db->rowCount();
    }
    
    
    // public function ubahDatacompany($data) {
    //     $query = "UPDATE loker SET 
    //         posisi_loker = :posisi_loker,
    //         deskripsi_loker = :deskripsi_loker,
    //         syarat_loker = :syarat_loker,
    //         lokasi = :lokasi,
    //         gaji = :gaji,
    //         tanggal_post = :tanggal_post
          
    //     WHERE id_loker = :id";
    
    //     $this->db->query($query);
    
    //     $this->db->bind('posisi_loker', $data['posisi_loker']);
    //     $this->db->bind('deskripsi_loker', $data['deskripsi_loker']);
    //     $this->db->bind('syarat_loker', $data['syarat_loker']);
    //     $this->db->bind('lokasi', $data['lokasi']);
    //     $this->db->bind('gaji', $data['gaji']);
    //     $this->db->bind('tanggal_post', $data['tanggal_post']);
    //     $this->db->bind('id_loker', $data['id_loker']);
      
    
    //     $this->db->execute();
    
    //     return $this->db->rowCount();
    // }
    public function getcompanyById($id)
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
    // public function getcompanyById($id)
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

