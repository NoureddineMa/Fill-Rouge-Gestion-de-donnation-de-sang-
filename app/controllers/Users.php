<?php
  class Users extends Controller {
    public function __construct(){
      $this->userModel = $this->model('User');
    }

    public function login() {
      // Check for POST
      if($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Process form
        // Sanitize POST data
        
        // Init data
        $data = [
          'Email' => trim($_POST['Email']),
          'Password' => trim($_POST['Password']),
          'Email_err' => '',
          'Password_err' => '',
        ];

        // Validate Email
        if(empty($data['Email'])){
          $data['Email_err'] = 'Veuillez entrer votre Adresse Mail';
        }

        // Validate Password
        if(empty($data['Password'])){
          $data['Password_err'] = 'Veuillez entrer votre mot de passe';
          
        }

       // Check for user/email
      

        // Make sure errors are empty
        if(empty($data['Email_err']) && empty($data['Password_err'])){
          // Validated
          // Check and set logged in 
          if(!$this->userModel->findUserByEmail($data['Email'])){
            // User found
            $data['Email_err'] = 'No user found';
          } 
          
          $loggedInUser = $this->userModel->login($data['Email'], $data['Password']);
         
          if($loggedInUser){
            // Create Session
            $this->createUserSession($loggedInUser);          
            // rendring views after login succes *********************
            // redirect('homeadmin/showStatistiques');
          } else {
            $data['Password_err'] = 'Password incorrect';
            $this->view('pages/login', $data);
          }
        } else {
          // Load view with errors
          $this->view('pages/login', $data);
        }
      } else {
        // Init data
        $data = [
          'Email' => '',
          'Password' => '',
          'Email_err' => '',
          'Password_err' => '',
        ];
        // Load view
        $this->view('pages/login', $data);
      }
    }
    public function createUserSession($user) {
      session_start();
      $_SESSION['id'] = $user->id;
      $_SESSION['Email'] = $user->Email;
      $_SESSION['Name'] = $user->Name;
      redirect('homeadmin/showStatistiques');
    }

    public function logout(){
      unset($_SESSION['id']);
      unset($_SESSION['Email']);
      unset($_SESSION['Name']);
      session_destroy();
      redirect('pages/login');
    }

    public function isLoggedIn(){
      if(isset($_SESSION['id'])){
        redirect('homeadmin/showStatistiques');
      } else {
        redirect('pages/index');
      }
    } 

  }