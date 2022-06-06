<?php

class Pages extends Controller
{
    public function __construct(){

    }
    //  function rendring view for index  :
    public function index(){
        
        $this->view('pages/index');

    }
    //  function rendring view for Contact us   :
    public function contactus(){
        $this->view('pages/contactus');
    }
    
    public function donnateur(){
        $this->view('pages/donnateur');
    }
    public function donnateurrdv(){
        $this->view('pages/donnateurrdv');
    }
    public function donnateurpublication(){
        $this->view('pages/donnateurpublication');
    }
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
    public function adminmsg(){
        $this->view('pages/adminmsg');
    }
    public function adminpatients(){
        $this->view('pages/adminpatients');
    }
    public function adminpublications(){
        $this->view('pages/adminpublications');
    }
}
?>



  
