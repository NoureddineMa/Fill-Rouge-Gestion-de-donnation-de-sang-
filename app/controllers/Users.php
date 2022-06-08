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
        $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
        
        // Init data
        $data = [
          'Email' => trim($_POST['Email']),
          'Password' => trim($_POST['Password']),
          'Email_err' => '',
          'Password_err' => '',
        ];

        // Validate Email
        if(empty($data['Email'])){
          $data['Email_err'] = 'Pleae enter Email';
        }

        // Validate Password
        if(empty($data['Password'])){
          $data['Password_err'] = 'Please enter Password';
          redirect('pages/login');
        }

       // Check for user/email
       if(!$this->userModel->findUserByEmail($data['Email'])){
        // User found
        $data['Email_err'] = 'No user found';
      } 

        // Make sure errors are empty
        if(empty($data['Email_err']) && empty($data['Password_err'])){
          // Validated
          // Check and set logged in 
          
          $loggedInUser = $this->userModel->login($data['Email'], $data['Password']);
         
          if($loggedInUser){
            // Create Session
            $this->createUserSession($loggedInUser);




            
            // rendring views after login succes *********************
            redirect('pages/admindonnateurs');
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
        // session_start();
      $_SESSION['user_id'] = $user->id;
      $_SESSION['user_Email'] = $user->Email;
      $_SESSION['user_Name'] = $user->name;
      redirect('pages/login');
    }

    public function logout(){
      unset($_SESSION['user_id']);
      unset($_SESSION['user_Email']);
      unset($_SESSION['user_name']);
      session_destroy();
      redirect('pages/login');
    }

    public function isLoggedIn(){
      if(isset($_SESSION['user_id'])){
        return true;
      } else {
        return false;
      }
    }
  }