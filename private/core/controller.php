<?php

   /* main controller file */

   class Controller {

        public function view($view, $data = array()) {
            // the code 
            extract($data);
            if(file_exists("../private/views/".$view.".view.php")){
                return file_get_contents("../private/views/".$view.".view.php");
            }else{
                return file_get_contents("../private/views/404.view.php");
            }
        }

    }