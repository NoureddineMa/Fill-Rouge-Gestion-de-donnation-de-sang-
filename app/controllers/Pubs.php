<?php 


    class Pubs extends Controller {

        public function __construct(){
            $this->pubmodel = $this->model('Pub');
        }

        public function ajouterpub(){
            if(isset($_POST['submit'])){

               
                $data = [
                    'Image' => $_POST['Image'],
                    'Title' => trim($_POST['Tilte']),
                    'Description' => trim($_POST['Description']),
                ];

                $data = $this->pubmodel->Addpub($data);
                redirect('pages/adminpublications');
            }
        }
    }