<?php 
    
    include('sql/connection.php');
    include('sql/functions.php');
    $read = read_data('ccc_category');   // select records
    $sql = "$read";
    $result = mysqli_query($conn, $sql);    

    echo '<!doctype html>
        <html lang="en">
        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
            <title>Category List</title>
        </head>
        <body>
            <h1 class="my-4 text-center">Product Table</h1>
            <table class="table table-striped">
            <thead class="thead-dark">
                <tr>
                <th scope="col">Category id</th>
                <th scope="col">Category Name</th>
                </tr>
            </thead>
            <tbody>
        ';

        // if there are records available 
        if (mysqli_num_rows($result)> 0){
            // fetch each row as an associative array
            while ($row = mysqli_fetch_assoc($result)){
                echo '<tr>';
                echo '<td>' . $row['cat_id'] . '</td>';
                echo '<td>' . $row['name'] . '</td>';
                echo '</tr>';
            }
        } else {
                echo '<tr><td colspan="3">Data Not Available</td></tr>';
        }
    

    echo '</tbody>
        </table>
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        </body>
        </html>';


?>