<?php

class Pages extends Controller
{
    public function __construct(){

    }

    //  hna kanpassew data ela chkel array :
    public function index(){
        
        $this->view('pages/index');

    }
    // function rend view page donnateur 

    public function Admindonnateur(){
        $this->view('pages/Admindonnateur');
    }

    public function contactus(){
        $this->view('pages/contactus');
    }
    

    
}



  
