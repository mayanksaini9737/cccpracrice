<?php 

    class Database {
        private $conn;

        public function __construct($server, $username, $password, $dbname){
            $this->conn = new mysqli($server, $username, $password, $dbname);
            if ($this->conn->connect_error) {
                die("Sorry! Failed to connect". $this->conn->connect_error);
            }
        }

        public function getConnection(){
            return $this->conn;
        }

        public function __destruct(){
            $this->conn->close();
        }
    }
    
?>