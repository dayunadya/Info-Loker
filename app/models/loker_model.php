<?php

class loker_model {
    private $table = 'loker';
    private $db;

    public function __construct() {
        $this->db = new Database;
    }

    public function getAllLoker()
    {
      $this->db->query('SELECT * FROM ' . $this->table);
      return $this->db->resultSet();
    }

    public function getLokerLimit3()
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' LIMIT 3');
        return $this->db->resultSet();
    }

    public function getLokerById($id_loker)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id_loker=:id_loker');
        $this->db->bind('id_loker', $id_loker);
        return $this->db->single();
    }

    public function tambahDataLoker($data)
    {
        $query = "INSERT INTO $this->table 
              (posisi_loker, nama_perusahaan, deskripsi_loker, syarat_loker, lokasi, gaji, tanggal_post) 
              VALUES 
              (:posisi_loker, :nama_perusahaan, :deskripsi_loker, :syarat_loker, :lokasi, :gaji, :tanggal_post)";

        $this->db->query($query);
        $this->db->bind('posisi_loker', $data['posisi_loker']);
        $this->db->bind('nama_perusahaan', $data['nama_perusahaan']);
        $this->db->bind('deskripsi_loker', $data['deskripsi_loker']);
        $this->db->bind('syarat_loker', $data['syarat_loker']);
        $this->db->bind('lokasi', $data['lokasi']);
        $this->db->bind('gaji', $data['gaji']);
        $this->db->bind('tanggal_post', $data['tanggal_post']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function hapusDataLoker($id_loker)
    {
        $query = "DELETE FROM loker WHERE id_loker = :id_loker";
        $this->db->query($query);
        $this->db->bind('id_loker', $id_loker);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function ubahDataLoker($data)
    {
        $query = "UPDATE loker SET
                    posisi_loker =  :posisi_loker, 
                    nama_perusahaan = :nama_perusahaan, 
                    deskripsi_loker = :deskripsi_loker, 
                    syarat_loker = :syarat_loker, 
                    lokasi = :lokasi, 
                    gaji = :gaji, 
                    tanggal_post = :tanggal_post
                  WHERE id_loker = :id_loker";

        $this->db->query($query);
        $this->db->bind('posisi_loker', $data['posisi_loker']);
        $this->db->bind('nama_perusahaan', $data['nama_perusahaan']);
        $this->db->bind('deskripsi_loker', $data['deskripsi_loker']);
        $this->db->bind('syarat_loker', $data['syarat_loker']);
        $this->db->bind('lokasi', $data['lokasi']);
        $this->db->bind('gaji', $data['gaji']);
        $this->db->bind('tanggal_post', $data['tanggal_post']);
        $this->db->bind('id_loker', $data['id_loker']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function cariLoker()
    {
        $keyword = $_POST['keyword'];

        $query = "SELECT * FROM loker WHERE posisi_loker LIKE :keyword";
        $this->db->query($query);
        $this->db->bind('keyword', "%$keyword%");

        return $this->db->resultSet();
    }

}