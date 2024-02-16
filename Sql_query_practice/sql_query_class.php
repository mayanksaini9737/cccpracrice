<?php 

    class SqlQuery{
         // 1) Insert SQL generate function 

        function insert_query($table, $data){
            $columns=[];
            $values=[];
            foreach ($data as $col => $val ){
                $columns[] = "`$col`";
                $values[] = "'". addslashes($val) ."'";
            }
            $columns = implode(",", $columns);
            $values = implode(",", $values);
            $sql_str ="INSERT INTO `{$table}` ({$columns}) VALUES ({$values})";
            return $sql_str;
        }


        // 2) Update SQL generate function 
        
        function update_query($table, $set, $where){
            // set values
            $set_value = [];
            foreach ($set as $key => $val){
                $set_value[] = "`$key` = '$val'";
            } 
            $set_value = implode(", ", $set_value);
            // where conditions
            $where_con = [];
            foreach($where as $key => $val){
                $where_con[] = "`$key` = '$val'";
            }
            $where_con = implode(' AND ', $where_con);  // AND, OR
            $sql_str = "UPDATE {$table} SET {$set_value} WHERE {$where_con}";
            return $sql_str;
        }


        // 3) Delete SQL generate function

        function delete_query($table, $where){
            // where con 
            $where_con = [];
            foreach($where as $key => $val){
                $where_con[] = "`$key` = '$val'";
            }
            $where_con = implode(' AND ', $where_con);  // AND, OR
            $sql_str =  "DELETE FROM {$table} WHERE {$where_con}";
            return $sql_str;
        }


        // 4) Read data(fetch records) SQL generate function

        function select_query($table, $columns = ['*'], $where = []){
            // columns -- > (if columns are not given then it takes *)
            $columns_name = implode(', ', $columns);
            // where con 
            $where_con = [];
            foreach($where as $key => $val){
                $where_con[] = "`$key` = '$val'";
            }
            $where_con = implode(' AND ', $where_con);  // AND, OR
            $sql_str = "SELECT {$columns_name} FROM {$table}";
            if(!empty($where_con)){
                $sql_str .= " WHERE {$where_con}";
            }
            return $sql_str;
        }
    }
    
    class QueryExecution{
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