<?php 
    // __wakeup()  - unserialize() checks if the class has a function with the magic name __wakeup(). If so, that function is executed prior to any unserialization.
    // arguments not required
    // intended use of __wakeup() is to reestablish any database connections that may have been lost during serialization and perform other reinitialization tasks

    class ConnWakeup {
        private $conn;

        public function __construct(){
            $this->conn = new mysqli();     // creating connection
        }

        public function __sleep(){
            $this->conn->close();           // connection close when object is serialized
        }

        public function __wakeup(){
            // echo "Object is unserialzed";
            $this->conn = new mysqli();     // creating connection when object is unserialized
        }
    }

?>