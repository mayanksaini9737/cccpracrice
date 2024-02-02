<?php 
    class Library_Sql_Query_Executer {
        private $conn;
        
        public function __construct($conn){
            $this->conn = $conn;
        }

        // execute any query
        function executeQuery($sql_query) {
            $result = $this->conn->query($sql_query);
            if ($result === false) {
                throw new Exception("Error: " . $this->conn->error);
            } else {
                return $result;
            }
        }

        // function fetch_assoc
        function selectFetch($result){
            $data =[];
            while ($row = $result->fetch_assoc()){
                $data[] = $row;
            }
            return $data;
        }

        // it returns affected row because the execution of this query
        public function executeUpdate($sql_query) {
            $result = $this->conn->query($sql_query);
            if ($result === false) {
                throw new Exception("Error: " . $this->conn->error);
            }
            return $this->conn->affected_rows;
        }
        
    }
?>