<?php
    namespace app\dao;
    use app\models;

    class ProdutoDao extends Dao {

        public function __constructor(){
            parent::__constructor();
        }

        public function include(Produto $entity){
            $result = $this->db->query("INSERT INTO Produto (nome, descricao, valor) VALUES('$entity->getNome()')");
        }
    }