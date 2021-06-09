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

    Class Connection extends PDO {
        public static function Conectar() {
            $user = "postgres";
            $password = 123;
            $host = "localhost";
            $port = 5433;
            $dbname = "northwind";
            
            $connection = new PDO("pgsql:host={$host}; 
                                         port={$port}; 
                                         dbname={$dbname}; 
                                         user={$user}; 
                                         password={$password}");
            $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $connection;
        }
    }

    function executeQuery($sql) {
        $stmt = Connection::Conectar()->prepare($sql);
        return $stmt->execute();
    }

?>