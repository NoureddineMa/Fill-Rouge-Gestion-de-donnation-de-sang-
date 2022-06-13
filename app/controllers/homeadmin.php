<?php 
    class Homeadmin extends Controller{
        public function __construct(){

            $this->donnateurmodel = $this->model('Donnateur');
            $this->messagesmodel = $this->model('Message');
            $this->patientmodel = $this->model('Patient');
            $this->pubmodel = $this->model('Pub');


            
            }        
        public function showStatistiques(){
            $data = [
                "donnateuracceptercount"=>$this->donnateurmodel->getDonnateurAccepterNumber(),
                "donnateurenattentecount"=>$this->donnateurmodel->getDonnateurwaiting(),
                "messagescountcount"=>$this->messagesmodel->getMessagescount(),
                "Patientcount"=>$this->patientmodel->getPatientscount(),
                "Publicationscount"=>$this->pubmodel->getPubscount(),
            ];
            $this->view('pages/adminhome',$data);


        }
    }
?>