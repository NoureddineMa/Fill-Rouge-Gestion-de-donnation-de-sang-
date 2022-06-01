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
    public function donnateurcontactus(){
        $this->view('pages/donnateurcontactus');
    }
    public function 
    
}



  
