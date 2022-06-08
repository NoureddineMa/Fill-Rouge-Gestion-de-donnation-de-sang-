<?php 
// This is a Modal 
class Donnateur {

    private  $db;

    public function __construct(){

        $this->db = new Database;
      }


    //   function qui selectionne que les donnateur accepré
    
      public function getdonnateurs(){
        $this->db->query("SELECT * FROM `donnateur`");

        // excute query 

       if($this->db->resultSet()){
         return $this->db->resultSet();
       } else {
         return false;
       }
       
    }
    
    

      public function adddonnateurs($data) {

        $this->db->query("INSERT INTO `donnateur`(`Nom_donnateur`, `Prenom_donnateur`, `Adresse_donnateur`, `Ville_donnateur`, `Email_donnateur`, `Phone_donnateur`, `Sang_donnateur`, `date_de_naissance_d`) VALUES 
        (:Nom_donnateur,:Prenom_donnateur,:Adresse_donnateur,:Ville_donnateur,:Email_donnateur,:Phone_donnateur,:Sang_donnateur,:date_de_naissance_d)");

        $this->db->bind(':Nom_donnateur', $data['Nom_donnateur']);  
        $this->db->bind(':Prenom_donnateur', $data['Prenom_donnateur']);                 
        $this->db->bind(':Adresse_donnateur', $data['Adresse_donnateur']);                 
        $this->db->bind(':Ville_donnateur', $data['Ville_donnateur']);                 
        $this->db->bind(':Email_donnateur', $data['Email_donnateur']); 
        $this->db->bind(':Phone_donnateur', $data['Phone_donnateur']);      
        $this->db->bind(':Sang_donnateur', $data['Sang_donnateur']);      
        $this->db->bind(':date_de_naissance_d', $data['date_de_naissance_d']);      
        
     
        // var_dump($data);
        if ($this->db->execute()) {
          return true;
        } else {
          return false;
        }
    }
}