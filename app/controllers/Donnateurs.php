<?php 

        class Donnateurs extends Controller {

            public function __construct(){

                $this->donnateurmodel = $this->model('Donnateur');

            }

          public function showDonnateurs(){
            $data = [];
            $data["accepted"] = $this->donnateurmodel->getdonnateursaccepter();
            $data["not-accepted"] = $this->donnateurmodel->getdonnateursNonaccepte();

            $this->view('pages/admindonnateurs',$data);

          }            

          

                public function ajouterDonnateurs() {
                    if(isset($_POST['submit'])){
              
                      $data = [
                        'Nom_donnateur' => trim($_POST['Nom_donnateur']),
                        'Prenom_donnateur' => trim($_POST['Prenom_donnateur']),
                        'Adresse_donnateur' => trim($_POST['Adresse_donnateur']),
                        'Ville_donnateur' => trim($_POST['Ville_donnateur']),
                        'Email_donnateur' => trim($_POST['Email_donnateur']),
                        'Phone_donnateur' => trim($_POST['Phone_donnateur']),
                        'Sang_donnateur' => trim($_POST['Sang_donnateur']),
                        'date_de_naissance_d' => trim($_POST['date_de_naissance_d']),
                      ];
                      
                      $data = $this->donnateurmodel->adddonnateurs($data);
                      redirect('pages/msgfordonnateurs');
                }
              }


               //  function delete 
        public function supprimerdonnateur($id){

          $this->donnateurmodel->deletedonnateur($id);
          redirect('donnateurs/showdonnateurs'); 
          }
      // end function delete 



      // update status for donnateurs :
      public function  updatedonnateurs($id){
        $this->donnateurmodel->updatestatusdonnateur($id);
        redirect('donnateurs/showdonnateurs');
      }
      // end function update for donnateurs
            }