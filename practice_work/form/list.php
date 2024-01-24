<?php 
    
    include('db_conn.php');
    include('../sql_functions.php');
    $read = read_data('ccc_product');
    // echo $read;
    $sql = "$read ORDER BY product_id DESC LIMIT 10";
    // echo $sql;
    $result = mysqli_query($conn, $sql);    
    // return type object, that specifies field_count, num_rows, current_field, type 
    // print_r($result);
    // $rows = mysqli_num_rows($result);
    // echo $rows; // returns 5(int) --> num of records in your result


    echo '<!doctype html>
        <html lang="en">
        <head>
            <!-- Required meta tags -->
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        
            <!-- Bootstrap CSS -->
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
        
            <title>Product Table</title>
        </head>
        <body>
            <h1 class="text-center my-4">Product Table</h1>
            <table class="table table-striped">
            <thead class="thead-dark">
                <tr>
                <th scope="col">Product Name</th>
                <th scope="col">SKU</th>
                <th scope="col">Product Type</th>
                <th scope="col">Category</th>
                <th scope="col">Manufacturer Cost</th>
                <th scope="col">Shipping Cost</th>
                <th scope="col">Total Cost</th>
                <th scope="col">Price</th>
                <th scope="col">Status</th>
                <th scope="col">Created At</th>
                <th scope="col">Updated At</th>
                </tr>
            </thead>
            <tbody>
        ';

        // if there are records available 
        if (mysqli_num_rows($result)> 0){
            // fetch each row as an associative array
            while ($row = mysqli_fetch_assoc($result)){
                echo '<tr>';
                echo '<td>' . $row['product_name'] . '</td>';
                echo '<td>' . $row['sku'] . '</td>';
                echo '<td>' . $row['product_type'] . '</td>';
                echo '<td>' . $row['category_name'] . '</td>';
                echo '<td>' . $row['manufacturer_cost'] . '</td>';
                echo '<td>' . $row['shipping_cost'] . '</td>';
                echo '<td>' . $row['total_cost'] . '</td>';
                echo '<td>' . $row['price'] . '</td>';
                echo '<td>' . $row['status'] . '</td>';
                echo '<td>' . $row['created_at'] . '</td>';
                echo '<td>' . $row['updated_at'] . '</td>';
                echo '</tr>';
            }
        } else {
                echo '<tr><td colspan="11"></td></tr>';
        }
    

    echo '</tbody>
        </table>
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        </body>
        </html>';


?>