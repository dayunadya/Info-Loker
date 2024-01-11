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



	private $table = 'perusahaan';
	private $db;

	public function __construct()
	{
		$this->db = new Database;
	}

	public function getAllPerusahaan()
	{
		$this->db->query('SELECT * FROM ' . $this->table);
		return $this->db->resultSet();
	}

	public function getAllPerusahaanById($id_prs)
	{
		$this->db->query('SELECT * FROM ' . $this->table . ' WHERE id_prs=:id_prs');
		$this->db->bind('id_prs', $id_prs);
		return $this->db->single();
	}

	public function tambahDataPerusahaan($data)
	{
		$query = "INSERT INTO perusahaan (nama_perusahaan, deskripsi, email, telepon, alamat)
				VALUES (:nama_perusahaan, :deskripsi, :email, :telepon, :alamat)";
		$this->db->query($query);
		$this->db->bind('nama_perusahaan', $data['nama_perusahaan']);
		$this->db->bind('deskripsi', $data['deskripsi']);
		$this->db->bind('email', $data['email']);
		$this->db->bind('telepon', $data['telepon']);
		$this->db->bind('alamat', $data['alamat']);

		return $this->db->rowCount();
	}

	public function updateDataPerusahaan($data)
	{
		$query = "UPDATE perusahaan SET 
		nama_perusahaan = :nama_perusahaan, 
		deskripsi = :deskripsi, 
		email = :email, telepon = :telepon, 
		alamat = :alamat 
		WHERE id_prs = :id_prs";

		$this->db->query($query);
		$this->db->bind('nama_perusahaan', $data['nama_perusahaan']);
		$this->db->bind('deskripsi', $data['deskripsi']);
		$this->db->bind('email', $data['email']);
		$this->db->bind('telepon', $data['telepon']);
		$this->db->bind('alamat', $data['alamat']);
		$this->db->bind('id_prs', $data['id_prs']);
		$this->db->execute();

		return $this->db->rowCount();
	}

	public function hapusDataPerusahaan($id)
	{
		$query = 'DELETE FROM ' . $this->table . ' WHERE id_prs =:id_prs';
		$this->db->query($query);
		$this->db->bind('id_prs', $id);

		$this->db->execute();

		return $this->db->rowCount();
	}
}
