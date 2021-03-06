<?php
    namespace app\models;
    
    class Produto {

        private $nome;
        private $descricao;
        private $valor;
        private $imagem;

        // Constructor
        public function __contructor($nome, $descricao, $valor){
            $this->nome = $nome;
            $this->descricao = $descricao;
            $this->valor = $valor;
        }

        // Setters
        public function setNome($nome){
            $this->nome = $nome;
        }

        public function setDescricao($descricao){
            $this->descricao = $descricao;
        }

        public function setValor($valor){
            $this->valor = $valor;
        }

        public function setDescricao($imagem){
            $this->descricao = $descricao;
        }

        // Getters 
        public function getNome(){
            return $this->nome;
        }

        public function getDescricao(){
            return $this->descricao;
        }   

        public function getValor(){
            return $this->nome;
        }    

        public function getImagem(){
            return $this->imagem;
        }    
    }