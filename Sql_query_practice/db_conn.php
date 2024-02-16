<?php 

    class Database {
        private $__conn;

        public function __construct($server, $username, $password, $dbname){
            $this->__conn = new mysqli($server, $username, $password, $dbname);
            if ($this->__conn->connect_error) {
                die("Sorry! Failed to connect". $this->__conn->connect_error);
            }
        }

        public function getconnection(){
            return $this->__conn;
        }

        public function __destruct(){
            $this->__conn->close();
        }
    }
    
?>