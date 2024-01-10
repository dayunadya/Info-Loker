<?php

class User_model {
    private $table = 'data_pengguna';
    private $db;

    public function __construct() {
        $this->db = new Database;
    }

    public function getAllUser()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    // public function getUserById()
    // {
    //     $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id_user=:id_user');
    //     $this->db->bind('id_user', $id_user);
    //     return $this->db->single();
    // }

    // public function ubahDataUser($data)
    // {
    //     $query = "UPDATE data_pengguna SET
    //                 tentang_saya = :tentang_saya,
    //                 nama_lengkap = :nama_lengkap,
    //                 nama_panggilan = :nama_panggilan,
    //                 tgl_lahir = :tgl_lahir,
    //                 no_telp = :no_telp,
    //                 alamat = :alamat
    //               WHERE id_user = :id_user";

    //     $this->db->query($query);
    //     $this->db->bind('tentang_saya', $data['tentang_saya']);
    //     $this->db->bind('nama_lengkap', $data['nama_lengkap']);
    //     $this->db->bind('nama_panggilan', $data['nama_panggilan']);
    //     $this->db->bind('tgl_lahir', $data['tgl_lahir']);
    //     $this->db->bind('no_telp', $data['no_telp']);
    //     $this->db->bind('alamat', $data['alamat']);
    //     $this->db->bind('id_user', $data['id_user']);

    //     $this->db->execute();

    //     return $this->db->rowCount();
    // }
}