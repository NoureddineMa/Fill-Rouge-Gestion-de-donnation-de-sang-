<?php 

        class Patients extends Controller {

            public function __construct(){

                $this->patientmodel = $this->model('Patient');

            }

          public function showpatients(){
            if(isset($_SESSION['id'])){
            $data = $this->patientmodel->getpatients();
            $this->view('pages/adminpatients',$data);
            }else{
              redirect('pages/error');
            }
          }


                public function ajouterpatient() {
                    if(isset($_POST['submit'])){
              
                      $data = [
                        'Nom_patient' => trim($_POST['Nom_patient']),
                        'Prenom_patient' => trim($_POST['Prenom_patient']),
                        'Adresse_patient' => trim($_POST['Adresse_patient']),
                        'Ville_patient' => trim($_POST['Ville_patient']),
                        'Email_patient' => trim($_POST['Email_patient']),
                        'Phone_patient' => trim($_POST['Phone_patient']),
                        'Sang_patient' => trim($_POST['Sang_patient']),
                        'date_de_naissance_p' => trim($_POST['date_de_naissance_p']),
                      ];
                      
                      $data = $this->patientmodel->Addpatient($data);
                      redirect('pages/msgforpatient');
                }
              }
            }