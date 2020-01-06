<?php

    class Core {

        private $controller;
        private $action;
        private $params;

        public function __construct() {
            $this->initialize();
        }

        public function run(){
            $instance = $this->getController();
            $obj = new $instance;
            call_user_func_array(array($obj, $this->getAction()), array(""));
        }

        public function initialize(){
            $url = $_SERVER['PHP_SELF'];
            $url = explode("index.php", $url);
            $path = end($url);
            $structPath = explode("/", $path);
            array_shift($structPath);
            
            if($structPath != null && isset($structPath[0])){
                $this->setController($this->buildController($structPath[0]));

                array_shift($structPath);
                
                if(isset($structPath[0])){
                    $this->setAction($structPath[0]);
                    array_shift($structPath);
                }
                
                if(isset($structPath[0])){
                    $this->setParams(array_filter($structPath));
                }

            } else {
                $this->setController("IndexController");
            }
        }

        private function buildController($name){
            return "app\\controllers\\" . ucfirst($name) . "Controller";
        }

        // Getters
        public function getController(){
            return $this->controller;
        }

        public function getAction(){
            return $this->action;
        }

        public function getParams(){
            return $this->params;
        }

        // Setters
        public function setController($controller){
            $this->controller = $controller;
        }

        public function setAction($action){
            $this->action = $action;
        }

        public function setParams($params){
            $this->params = $params;
        }
    }