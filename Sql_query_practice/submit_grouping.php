<?php 
    include('db_conn.php');
    include('sql_query_class.php');

    $ccc_practice = new Database('localhost', 'root', '', 'ccc_practice');
    $conn = $ccc_practice->getconnection();

    // Grouping practice        -> array format of data
    $sql = new SqlQuery();
    $execute_sql = new QueryExecution($ccc_practice->getconnection());

    // select records

    // $select_sql = $sql->select_query('ccc_product');
    // echo $select_sql.' ORDER BY product_id DESC' ;
    // echo $select_sql.' ORDER BY product_id ASC' ;
    // echo $select_sql.' ORDER BY product_id ASC LIMIT 10' ;
    // $select_sql .=' LIMIT 1' ;
    // $select_sql = 'SELECT COUNT(product_id), category_name FROM ccc_product GROUP BY category_name';
    // $select_sql = 'SELECT COUNT(product_name), product_type FROM ccc_product GROUP BY product_type';
    // $select_sql =' SELECT COUNT(product_name), product_type FROM ccc_product GROUP BY product_type ORDER BY product_type DESC' ;
    // $select_sql = 'SELECT SUM(total_cost) as sum_of_category, category_name FROM ccc_product GROUP BY category_name';
    // $select_sql .=' WHERE category_name="Office" AND price>= 6000' ;
    // $select_sql .=' WHERE price>=10000 AND (created_at BETWEEN "2024-01-01" AND "2024-01-31")' ;
    $select_sql = 'SELECT * FROM ccc_product AS p INNER JOIN ccc_category AS c ON p.cat_id = c.cat_id WHERE c.name="Office"';
    // $select_sql = 'SELECT * FROM ccc_product AS p JOIN ccc_category AS c ON p.cat_id = c.cat_id';
    // $select_sql = 'SELECT * FROM ccc_product AS p JOIN ccc_category AS c ON p.cat_id = c.cat_id WHERE c.name="Office"';
    // $select_sql = 'UPDATE ccc_product AS p INNER JOIN ccc_category AS c ON p.cat_id = c.cat_id SET p.product_type="Bundle" WHERE c.cat_id=2';
    // $select_sql = 'SELECT * FROM ccc_product AS p LEFT JOIN ccc_category AS c ON p.cat_id = c.cat_id';
    // $select_sql = 'SELECT * FROM ccc_product AS p RIGHT JOIN ccc_category AS c ON p.cat_id = c.cat_id';
    // $select_sql = 'SELECT * FROM ccc_product AS p LEFT JOIN ccc_category AS c ON p.cat_id = c.cat_id UNION SELECT * FROM ccc_product AS p RIGHT JOIN ccc_category AS c ON p.cat_id = c.cat_id';
    // echo $select_sql;

    // $data = $_POST['group1'];
    // $insert_sql = $sql->insert_query('ccc_product',$data);
    // $result = $execute_sql->executeQuery($select_sql);
    $result = $execute_sql->executeQuery($insert_sql);
    print_r($result);
    $fn_ins = "INSERT INTO `ccc_product` (`product_id`,`product_name`,`sku`,`product_type`,`category_name`,`manufacturer_cost`,`shipping_cost`,`total_cost`,`price`,`status`,`created_at`,`updated_at`) VALUES (37,'Table','JHDU8782','simple','Dining & Kitchen','10000','1000','11000','12000','Enabled','2024-02-04','2024-02-04') ON DUPLICATE KEY UPDATE product_name = VALUES(product_name), sku = VALUES(sku)";
    // $result = $execute_sql->executeQuery($fn_ins);

    // $selected_row = $execute_sql->selectFetch($result);
    // echo "<pre>";
    // print_r($selected_row);     // shows selected row in the form of array


    // for insert
    // if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    
    //     $inpdata = $_POST['group1'];
    //     $insert_query = $sql->insert_query('ccc_product', $inpdata);
    //     $result = $execute_sql->executeQuery($insert_query);
    //     header("Location:form_group.php");
    // }

    


    
?>
