<?php 
// This is a Modal 
class Donnateur {

    private  $db;

    public function __construct(){

        $this->db = new Database;
      }


    //   function qui selectionne que les donnateur en attente
    
      public function getdonnateursNonaccepte(){
        $this->db->query("SELECT * FROM `donnateur` WHERE status = 'En attente' ");

        // excute query 

       if($this->db->resultSet()){
         return $this->db->resultSet();
       } else {
         return false;
       }
       
    }
        //   function qui selectionne que les donnateur Accepte

    public function getdonnateursaccepter(){
      $this->db->query("SELECT * FROM `donnateur` WHERE status = 'Accepter'");

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

      //  requette update  En attente --> Accepte 

        public function updatestatusdonnateur($id){
            $this->db->query("UPDATE `donnateur` SET `status`= 'Accepter' WHERE id = $id");
          
            if($this->db->resultSet()){
              return $this->db->resultSet();
            } else {
              return false;
            }
        
          }

      //  end  requette update status


      // Start requette Delete  :

      public function deletedonnateur($id){

        $this->db->query("DELETE FROM donnateur WHERE `id`= :id");
        $this->db->bind(':id',$id);

        if ($this->db->execute()) {
          return true;
      } else {
          return false;
      }
     }

   // End requette Delete !


  //  COUNT NUMBERS OF DONNATEURS  :
  public function getDonnateurAccepterNumber(){
    $this->db->query("SELECT COUNT(*) as count FROM donnateur WHERE status='Accepter'");

    return $this->db->resultSet();
   }

   //  COUNT AWAITING DONNATEURS
   public function getDonnateurwaiting(){
    $this->db->query("SELECT COUNT(*) as count  FROM donnateur WHERE status='En attente'");

    return $this->db->resultSet();
   }
   

}