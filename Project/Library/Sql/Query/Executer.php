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

        // function Fetch all records
        function fetchAll($result){
            $data =[];
            while ($row = $result->fetch_assoc()){
                $data[] = $row;
            }
            return $data;
        }

        // function Single record
        function fetchSingleRecord($result){
            return ($result && $result->num_rows > 0)?$result->fetch_assoc(): "Result might have more than one reocrd or getting error in fetch that record"; 
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