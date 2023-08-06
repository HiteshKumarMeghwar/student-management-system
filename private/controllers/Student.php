<?php

   /* student controller file */

   class Student extends Controller {

        public function index() {
            echo $this->view("student");
        }

    }