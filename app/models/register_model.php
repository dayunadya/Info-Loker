<?php

class register_model{
    private $table = 'pengguna';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function TambahDataRegister($data)
    {
        $query = "INSERT INTO pengguna (id, username, email, password, akses)
                  VALUES (NULL, :username, :email, :password, :akses)";
        
        $this->db->query($query);
        
        $this->db->bind('username', $data['username']);
        $this->db->bind('email', $data['email']);
        $this->db->bind('password', $data['password']); // Use hashed password directly
        $this->db->bind('akses', $data['akses']);

        $this->db->execute();

        return $this->db->rowCount();
    }
}

?>