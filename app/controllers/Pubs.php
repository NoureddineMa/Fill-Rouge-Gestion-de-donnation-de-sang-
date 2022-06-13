<?php 


    class Pubs extends Controller {

        public function __construct(){
            $this->pubmodel = $this->model('Pub');
        }

        // function affichage patients for admin

        public function showpubs(){
            $data = $this->pubmodel->getpubs();
            $this->view('pages/adminpublications',$data);
          }

         // end function affichage  


          // function affichage patients for User

        public function showpubsUser(){
            $data = $this->pubmodel->getpubs();
            $this->view('pages/donnateurpublication',$data);
          }

         // end function affichage  

        // function add Posts : 

        public function ajouterpub(){
            if(isset($_POST['submit'])){

               
                $data = [
                    'Image' => $_POST['Image'],
                    'Title' => trim($_POST['Title']),
                    'Description' => trim($_POST['Description']),
                ];

                $data = $this->pubmodel->Addpub($data);
                redirect('pubs/showpubs',$data);
            }
        }

        // end function add posts


        //  function delete 
        public function supprimerpost($id){

            $this->pubmodel->deletepub($id);
            redirect('pubs/showpubs'); 
            }
            
        // end function delete 



        // function update
        public function pubsedit($id) {

          if(isset($_POST['submit'])){
  
            $data = [
              'id' => $id,
              'Image' => $_POST['ImagLLe'],
              'Title' => trim($_POST['Title']),
              'Description' => trim($_POST['Description']),

            ];
    
            $this->pubmodel->editpubs($data);
    
            redirect('pubs/showpubs');
          }
  
         $data  = $this->pubmodel->getPubsbyId($id);
          
          $this->view('pages/editpublications',$data);
          
        }


        // end function Update
    }
