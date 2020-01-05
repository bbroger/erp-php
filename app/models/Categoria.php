<?php
    namespace app\models;
    
    class Categoria {

        private $nome;
        private $descricao;

        // Constructor
        public function __contructor($nome, $descricao){
            $this->nome = $nome;
            $this->descricao = $descricao;
        }

        // Setters
        public function setNome($nome){
            $this->nome = $nome;
        }

        public function setDescricao($descricao){
            $this->descricao = $descricao;
        }

        // Getters 
        public function getNome(){
            return $this->nome;
        }

        public function getDescricao(){
            return $this->descricao;
        }   
    }