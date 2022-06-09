<?php

class Pages extends Controller
{
    public function __construct() {
        $this->messagesmodel = $this->model('Message');
        $this->patientmodel = $this->model('Patient');
        $this->donnateurmodel = $this->model('Donnateur');
    }
    //  function rendring view for index  :
    public function index() {

        $this->view('pages/index');
    }
    //  function rendring view for Contact us   :
    public function contactus() {
        $this->view('pages/contactus');
    }
    
    public function donnateur(){
        $data = $this->patientmodel->getpatients();
        
        $this->view('pages/donnateur' , $data);
    }
    public function donnateurrdv(){
        $this->view('pages/donnateurrdv');
    }
    // public function donnateurpublication(){
    //     $this->view('pages/donnateurpublication');
        
    // }
    public function patient(){

        $this->view('pages/patient');
    }
    public function patientrdv(){
        $this->view('pages/patientrdv');
    }
   
    public function login(){
        $this->view('pages/login');
    }
    
   


    public function admindonnateurs(){
        $this->view('pages/admindonnateurs');
    }
    // public function adminpatients(){
    //     $this->view('pages/adminpatients');
    // }
  
    public function msgforpatient(){
        $this->view('pages/msgforpatient');
    }
    public function msgformessages(){
        $this->view('pages/msgformessages');
    }
    public function msgfordonnateurs(){
        $this->view('pages/messagesfordonnateurs');
    }
    public function editpublications(){
        $this->view('pages/editpublications');
    }

}
?>



  
