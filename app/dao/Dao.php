<?php 
    namespace app\dao;

    abstract class Dao {
        protected $db;
        public function __constructor(){
            $this->db = new \PDO("mysql:dbname=". DATABASE_APP .";host=". SERVER_DB, USER_DB, PASSWORD_DB);
        }
    }