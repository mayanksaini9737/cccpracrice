<?php 
    // include('db_conn.php');


    // Grouping practice        -> array format of data that i am 
    // if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        
    //     echo "<pre>";
    //     $inpdata = $_POST['group1'];
    //     print_r($inpdata);
    //     echo "</pre>";

    // }


    // insert function 
    // ==================================================================================

    // function insert_sql($table, $data){
    //     $columns=[];
    //     $values=[];
    //     foreach ($data as $col => $val ){
    //         $columns[] = "`$col`";
    //         $values[] = "'". addslashes($val) ."'";
    //     }
    //     $columns = implode(",", $columns);
    //     $values = implode(",", $values);
    //     $sql_str ="INSERT INTO {$table} ({$columns}) VALUES ({$values})";
    //     return $sql_str;
    // }
    // if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        
    //     // echo "<pre>";
    //     // $inpdata = $_POST['group1'];
    //     // print_r($inpdata);
    //     // echo "</pre>";

    //     $inpdata = $_POST['group1'];
    //     echo insert_sql("product", $inpdata);

    // }


    // mysqli_close($conn);


    // Update function
    // ============================================================================================

    // UPDATE `ccc_product` SET `product_name` = 'Desktop' WHERE `ccc_product`.`sno` = 3;

    // function update_sql($table, $set, $where_cn){
    //     // set values
    //     $set_value = [];
    //     foreach ($set as $key => $val){
    //         $set_value[] = "`$key` = '$val'";
    //     } 
    //     $set_value = implode(", ", $set_value);
    //     // where conditions
    //     $where_con = [];
    //     foreach($where_cn as $key => $val){
    //         $where_con[] = "`$key` = '$val'";
    //     }
    //     $where_con = implode(' AND ', $where_con);  // AND, OR
    //     $sql_str = "UPDATE {$table} SET {$set_value} WHERE {$where_con}";
    //     return $sql_str;
    // }
    // $set =['name'=> "Mayank", 'enrollnum' => 6038];
    // $where =['id'=> 83];
    // echo update_sql('student', $set, $where);


    // Delete function
    // ==================================================================================

    // DELETE FROM ccc_product WHERE `ccc_product`.`sno` = 5

    // function delete_sql($table, $where_cn){
    //     // where con 
    //     $where_con = [];
    //     foreach($where_cn as $key => $val){
    //         $where_con[] = "`$key` = '$val'";
    //     }
    //     $where_con = implode(' AND ', $where_con);  // AND, OR
    //     $sql_str =  "DELETE FROM {$table} WHERE {$where_con}";
    //     return $sql_str;
    // }
    // $where =['area'=> 'bhuj', 'board' => 'gsseb'];
    // echo delete_sql('student', $where);

    
    // Read records
    // =============================================================================

    // SELECT name, email FROM your_table_name WHERE age > 25

    function read_data($table, $columns = ['*'], $where_cn = []){
        // columns -- > (if columns are not given then it takes *)
        $columns_name = implode(', ', $columns);

        // where con 
        $where_con = [];
        foreach($where_cn as $key => $val){
            $where_con[] = "`$key` = '$val'";
        }
        $where_con = implode(' AND ', $where_con);  // AND, OR
        $sql_str = "SELECT {$columns_name} FROM {$table}";
        if(!empty($where_con)){
            $sql_str .= " WHERE {$where_con}";
        }
        return $sql_str;
    }

    $where =['area'=> 'bhuj', 'board' => 'GSSEB'];
    $clmn = ['name', 'email'];
    // echo read_data('student');
    // echo read_data('student', ['*'], $where);
    echo read_data('student', $clmn , $where);
?>
