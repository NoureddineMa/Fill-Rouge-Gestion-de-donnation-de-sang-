<?php 



        class Pub {

            private $db;

            public function __construct(){
                $this->db = new Database;
            }


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
        }