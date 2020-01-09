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
                $this->setController($this->buildController(CONTROLLER_DEFAULT));
            }
        }

        private function buildController($name){
            return NAMESPACE_DEFAULT . ucfirst($name) . "Controller";
        }

        // Getters
        public function getController(){
            if(class_exists($this->controller)){
                return $this->controller;
            }
            return $this->buildController(CONTROLLER_DEFAULT);
        }

        public function getAction(){
            
            if(method_exists($this->controller, $this->action)){
                return $this->action;
            }

            return ACTION_DEFAULT;
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