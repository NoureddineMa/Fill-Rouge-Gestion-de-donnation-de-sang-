<?php 
// This is a Modal 
class Patient {

    private  $db;

    public function __construct(){

        $this->db = new Database;
      }

      public function getpatients(){
        $this->db->query("SELECT * FROM `patient`");

        // excute query 

       if($this->db->resultSet()){
         return $this->db->resultSet();
       } else {
         return false;
       }
       
    }
    
    

      public function Addpatient($data) {

        $this->db->query("INSERT INTO `patient`(`Nom_patient`, `Prenom_patient`, `Adresse_patient`, `Ville_patient`, `Email_patient`, `Phone_patient`, `Sang_patient`, `date_de_naissance_p`) VALUES 
        (:Nom_patient,:Prenom_patient,:Adresse_patient,:Ville_patient,:Email_patient,:Phone_patient,:Sang_patient,:date_de_naissance_p)");

        $this->db->bind(':Nom_patient', $data['Nom_patient']);  
        $this->db->bind(':Prenom_patient', $data['Prenom_patient']);                 
        $this->db->bind(':Adresse_patient', $data['Adresse_patient']);                 
        $this->db->bind(':Ville_patient', $data['Ville_patient']);                 
        $this->db->bind(':Email_patient', $data['Email_patient']); 
        $this->db->bind(':Phone_patient', $data['Phone_patient']);      
        $this->db->bind(':Sang_patient', $data['Sang_patient']);      
        $this->db->bind(':date_de_naissance_p', $data['date_de_naissance_p']);      
     
        // var_dump($data);
        if ($this->db->execute()) {
          return true;
        } else {
          return false;
        }
    }
}