<?php

   /* home controller file */

   class Home extends Controller {

        public function index() {
            // the code 
            // $user = $this->load_model('User');
            $user = new User();
            $data = $user->findAll();
            // $data = $user->where("id", 2);

            $this->view("home", ['rows'=>$data]);
        }

    }