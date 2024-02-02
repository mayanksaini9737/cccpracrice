<?php 
    class Library_Sql_Query_Builder {
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
?>