<?php 
    namespace app\controllers;
    use app\core\Controller;

    class ProdutoController extends Controller {

        public function index(){
            $this->load("index","produto");
        }

        public function detail(){
            $data["nome"] = "Joao Santos";
            $data["email"] = "estudoti@hotmail.com";
            $this->load("detail","produto", $data);
        }

        public function create(){
            $this->load("create","produto");
        }

        public function delete(){
            $data["nome"] = "Joao Santos";
            $data["email"] = "estudoti@hotmail.com";
            $this->load("delete","produto", $data);
        }

    }