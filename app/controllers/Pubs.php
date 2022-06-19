<?php 


    class Pubs extends Controller {

        public function __construct(){
          
            $this->pubmodel = $this->model('Pub');
            
            
        }

        // function affichage patients for admin

        public function showpubs(){
          if(isset($_SESSION['id'])){
            $data = $this->pubmodel->getpubs();
            $this->view('pages/adminpublications',$data);
          }else{
            redirect('pages/error');
          }
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

              $output_dir = "public/uploads";//Path for file upload

              $RandomNum = time();
    
              print_r($_FILES);
              $ImageName = str_replace(' ','-',strtolower($_FILES['Image']['name']));
             //"image/png", image/jpeg etc.
              $ImageExt = substr($ImageName, strrpos($ImageName, '.'));
              $ImageExt = str_replace('.','',$ImageExt);
              $ImageName = preg_replace("/.[^.\s]{3,4}$/", "", $ImageName);
              $NewImageName = $ImageName.'-'.$RandomNum.'.'.$ImageExt;
              $ret[$NewImageName]= $output_dir.$NewImageName; 
              move_uploaded_file($_FILES["Image"]["tmp_name"],"C:/xampp/htdocs/Fill-Rouge-Gestion-de-donnation-de-sang-" ."/".$output_dir."/".$NewImageName );

               
                $data = [
                    'Image' =>$NewImageName,
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
            
            $output_dir = "public/uploads";//Path for file upload

            $RandomNum = time();
  
            print_r($_FILES);
            $ImageName = str_replace(' ','-',strtolower($_FILES['Image']['name']));
           //"image/png", image/jpeg etc.
            $ImageExt = substr($ImageName, strrpos($ImageName, '.'));
            $ImageExt = str_replace('.','',$ImageExt);
            $ImageName = preg_replace("/.[^.\s]{3,4}$/", "", $ImageName);
            $NewImageName = $ImageName.'-'.$RandomNum.'.'.$ImageExt;
            $ret[$NewImageName]= $output_dir.$NewImageName; 
            move_uploaded_file($_FILES["Image"]["tmp_name"],"C:/xampp/htdocs/Fill-Rouge-Gestion-de-donnation-de-sang-" ."/".$output_dir."/".$NewImageName );


            $data = [
              'id' => $id,
              'Image' =>$NewImageName,
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
