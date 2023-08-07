<?php

   /* register controller file */

   class Register extends Controller {

        public function index() {
            // the code 
            $errors = array();
            if(count($_POST) > 0){
                $user = new User();
                if($user->validate($_POST)){
                    $_POST['date'] = date("Y-m-d H:i:s");
                    $user->insert($_POST);
                    $this->redirect('login');
                }else{
                    // errors
                    $errors = $user->errors;
                }
            }
            $this->view("register", ['errors'=>$errors]);
        }

    }