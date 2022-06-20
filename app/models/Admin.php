<?php
  class Admin {
    private $db;

    public function __construct(){
      $this->db = new Database;
    }



    // Login User
    public function login($Email, $Password){
      $this->db->query('SELECT * FROM admin WHERE Email = :Email AND Password = :Password ');
      $this->db->bind(':Email', $Email);
      $this->db->bind(':Password', $Password);

      $row = $this->db->single();

      if(empty($row)){
        return false;
      }
      return $row;
    }

    // Find user by Email
    public function findUserByEmail($Email){
      $this->db->query('SELECT * FROM admin WHERE Email = :Email');
      // Bind value
      $this->db->bind(':Email', $Email);

      $row = $this->db->single();

      // Check row
      if($this->db->rowCount() > 0){
        return true;
      } else {
        return false;
      }
    }

  }




