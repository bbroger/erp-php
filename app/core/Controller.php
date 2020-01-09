<?php
    namespace app\core;
    
    class Controller{
        protected function load($view, $folder){
            include "app/views/" . $folder . "/" . $view . ".php";
        }        
    }