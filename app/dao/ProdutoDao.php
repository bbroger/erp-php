<?php
    namespace app\dao;
    use app\models;

    class ProdutoDao extends Dao {

        public function __constructor(){
            parent::__constructor();
        }

        public function include(Produto $entity){
            try {
                $result = $this->db->exec("INSERT INTO Produto (nome, descricao, valor) VALUES('$entity->getNome()', '$entity->getDescription()', $entity->getValor())");
            } catch (PDOException $ex) {
                throw $ex;
            }
        }

        public function update(Produto $entity){
            try {
                $query = "UPDATE Produto SET nome = '${$entity->getNome()}',";
                $query = $query . "descricao = '${$entity->getDescricao()}',";
                $query = $query . "valor = ${$entity->getValor()} ";
                $query = $query . "WHERE Id = ${$entity->getId()}";
                $result = $this->exec($query);
            } catch (PDOException $ex) {
                throw $ex;
            }
        }

        public function delete($id){
            try {
                $query = "DELETE FROM Produto WHERE id = ${$id}";
                $result = $this->exec($query);                
            } catch (PDOException $ex) {
                throw $ex;
            }
        }

        public function list(){
            try {
                $query = "SELECT * FROM Produto";
                $stmt = $this->query($query);
                $result = stmt->fetchAll();
            } catch (PDOException $ex) {
                throw $ex;
            }
        }
    }