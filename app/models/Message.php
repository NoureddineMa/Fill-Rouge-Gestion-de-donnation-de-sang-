<?php 
// This is a Modal 
class Message {

    private  $db;

    public function __construct(){

        $this->db = new Database;
      }

      public function getmessages(){
        $this->db->query("SELECT * FROM `messages`");

        // excute query 

       if($this->db->resultSet()){
         return $this->db->resultSet();
       } else {
         return false;
       }

       
    }

      public function addmessages($data) {

        $this->db->query("INSERT INTO `messages` (`Nom` , `Prenom` , `Email`, `Contexte`, `Msg`)
                          VALUES (:Nom,:Prenom,:Email,:Contexte,:Msg)");

        $this->db->bind(':Nom', $data['Nom']);  
        $this->db->bind(':Prenom', $data['Prenom']);                 
        $this->db->bind(':Email', $data['Email']);                 
        $this->db->bind(':Contexte', $data['Contexte']);                 
        $this->db->bind(':Msg', $data['Msg']);      
        
        // var_dump($data);
   
        if ($this->db->execute()) {
          return true;
        } else {
          return false;
        }
    }
}