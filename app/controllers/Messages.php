<?php 

        class Messages extends Controller {

            public function __construct(){

                $this->messagesmodel = $this->model('Message');

            }

          public function adminmsg(){
            $data = $this->messagesmodel->getmessages();

          $this->view('pages/adminmsg',$data);
          }


                public function Addmsg() {
                    if(isset($_POST['submit'])){
              
                      $data = [
                        'Nom' => trim($_POST['Nom']),
                        'Prenom' => trim($_POST['Prenom']),
                        'Email' => trim($_POST['Email']),
                        'Contexte' => trim($_POST['Contexte']),
                        'Msg' => trim($_POST['Msg']),
                      ];
                      
                      $data = $this->messagesmodel->addmessages($data);
                      redirect('pages/msgformessages');
                }
              }
            }