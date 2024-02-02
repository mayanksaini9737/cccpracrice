<?php 
    include('db_conn.php');
    include('sql_query_class.php');

    $ccc_practice = new Database('localhost', 'root', '', 'ccc_practice');
    // $conn = $ccc_practice->getConnection();

    // Grouping practice        -> array format of data
    $sql = new SqlQuery();
    $execute_sql = new QueryExecution($ccc_practice->getConnection());

    // select records
    $select_sql = $sql->select_query('ccc_product');
    $result = $execute_sql->executeQuery($select_sql);
    $selected_row = $execute_sql->selectFetch($result);
    echo "<pre>";
    print_r($selected_row);     // shows selected row in the form of array


    // for insert
    // if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    
    //     $inpdata = $_POST['group1'];
    //     $insert_query = $sql->insert_query('ccc_product', $inpdata);
    //     $result = $execute_sql->executeQuery($insert_query);
    //     header("Location:form_group.php");
    // }

    


    
?>
