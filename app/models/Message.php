<?php 
// This is a Modal 
class Message {

    private  $db;

    public function __construct(){

        $this->db = new Database;
      }

    // public function getmessages(){

    //    $this->db->query('SELECT * FROM `messages`');
       
    //      // execution de la query / fetch all
    //    $results = $this->db->resultSet(); 

    //    return $results;

    //   }

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