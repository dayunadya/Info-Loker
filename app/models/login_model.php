<?php 
class login_model {
    private $table = 'pengguna';
    private $db;

        public function __construct()
        {
            $this->db = new Database;
        }

        public function cekUserTrue($email)
        {
            $this->db->query('SELECT * FROM ' . $this->table . ' WHERE email =:email');
            $this->db->bind('email', $email);

            $this->db->execute();
            return $this->db->rowCount();
        }

        public function ambilDataUser($email)
        {
            $this->db->query('SELECT * FROM ' . $this->table . ' WHERE email =:email');
            $this->db->bind('email', $email);
            return $this->db->single();
        }

        public function getRole($email)
        {
            $this->db->query('SELECT akses FROM ' . $this->table . ' WHERE email =:email');
            $this->db->bind('email', $email);

            $this->db->execute();
            return $this->db->single()['akses'];
        }

}