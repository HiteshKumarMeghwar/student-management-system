<?php

   /* home controller file */

   class Home extends Controller {

        public function index() {
            // the code 
            echo $this->view("home");
        }

    }