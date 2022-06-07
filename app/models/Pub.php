<?php 



        class Pub {

            private $db;

            public function __construct(){
                $this->db = new Database;
            }

            // requette select :
            public function getpubs(){
                $this->db->query("SELECT * FROM `publications`");
        
                // excute query 
        
               if($this->db->resultSet()){
                 return $this->db->resultSet();
               } else {
                 return false;
               }
               
            }
            // end requette select : 

            //  requette add :

            public function Addpub($data){

                $this->db->query("INSERT INTO `publications`(`Image`, `Title`, `Description`) 
                VALUES (:Image,:Title,:Description)");

                $this->db->bind(':Image' , $data['Image']);
                $this->db->bind(':Title' , $data['Title']);
                $this->db->bind(':Description' , $data['Description']);

                if ($this->db->execute()){
                    return true;
                } else {
                    return false;
                }
            }
            // end requette add


            // Start requette Delete  :

            public function deletepub($id){

                $this->db->query("DELETE FROM publications WHERE `id`= :id");
                $this->db->bind(':id',$id);
        
                if ($this->db->execute()) {
                  return true;
              } else {
                  return false;
              }
             }

           // End requette Delete :



        }