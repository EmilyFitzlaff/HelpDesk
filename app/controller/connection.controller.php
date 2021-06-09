<?php

    class Conexao extends PDO {

        private $username = 'root';
        private $password = '';
        private $banco = 'helpdesk';
        private $host = 'localhost';
        private $conn;

        public function __construct() {
            try {
                $conn = new PDO("mysql:host={$this->host};
                                       dbname={$this->banco}", 
                                       $this->username, 
                                       $this->password);
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                return $this->conn = $conn;
            } catch(PDOException $e) {
                echo 'Erro: ' . $e->getMessage();
            }
        }

        public function getConn() {
            return $this->conn;
        }

        public function getSelect($sql) {
            $stmt = $this->conn->prepare($sql);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_NUM);
        }

        public function returnSQL($sql) {
            $stmt = $this->conn->prepare($sql);
            $stmt->execute($sql);
            return $stmt;
        }
    }

?>