<?php

class prs_model
{
	// private $mhs = [
	// 	[
	// 		"nim" => "1118056",
	// 		"nama" => "HusnulM",
	// 		"jurusan" => "Teknik Informatika"
	// 	],
	// 	[
	// 		"nim" => "1118057",
	// 		"nama" => "Hikmah",
	// 		"jurusan" => "Teknik Industri"
	// 	]
	// ];



	private $table = 'pengguna';
	private $db;

	public function __construct()
	{
		$this->db = new Database;
	}

	public function getAllPerusahaan()
	{
		$this->db->query('SELECT * FROM pengguna WHERE akses = "Perusahaan"');

		return $this->db->resultSet();
	}

	public function getAllPerusahaanById($id)
	{
		$this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
		$this->db->bind('id', $id);
		return $this->db->single();
	}
	
	public function tambahDataPerusahaan($data)
	{
		$query = "INSERT INTO pengguna (id, username, nama, deskripsi, jenis_kelamin, email, no_telp, alamat, password, akses)
				  VALUES (null, :username, :nama, :deskripsi, :jenis_kelamin, :email, :no_telp, :alamat, :password, :akses)";
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
	}

	public function updateDataPerusahaan($data)
	{
		$query = "UPDATE pengguna SET 
		nama = :nama, 
		deskripsi = :deskripsi, 
		email = :email, no_telp = :no_telp, 
		alamat = :alamat 
		WHERE id = :id";

		$this->db->query($query);
		$this->db->bind('nama', $data['nama']);
		$this->db->bind('deskripsi', $data['deskripsi']);
		$this->db->bind('email', $data['email']);
		$this->db->bind('no_telp', $data['no_telp']);
		$this->db->bind('alamat', $data['alamat']);
		$this->db->bind('id', $data['id']);
		$this->db->execute();

		return $this->db->rowCount();
	}

	public function hapusDataPerusahaan($id)
	{
		$query = 'DELETE FROM ' . $this->table . ' WHERE id =:id';
		$this->db->query($query);
		$this->db->bind('id', $id);

		$this->db->execute();

		return $this->db->rowCount();
	}
}
