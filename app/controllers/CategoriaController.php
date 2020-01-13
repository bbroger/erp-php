<?php 
    namespace app\controllers;
    use app\core\Controller;

    class CategoriaController extends Controller {
        public function index(){
            echo "<div class='alert alert-success'>Invocando o método Index</div>";
        }

        public function novo(){
            $this->load("create","produto");
        }
    }