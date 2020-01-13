<?php
    namespace app\core;
    
    class Controller{
        protected function load($view, $folder, $data=array()){
            extract($data);
            include "app/views/" . $folder . "/" . $view . ".php";
        }        
    }