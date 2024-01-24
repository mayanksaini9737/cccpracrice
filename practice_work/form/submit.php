<?php 
    include('db_conn.php');

    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $product_name = $_POST['product_name'];
        $sku = $_POST['sku'];
        $product_type = $_POST['product_type'];
        $category_name = $_POST['category_name'];
        $manufacturer_cost = $_POST['manufacturer_cost'];
        $shipping_cost = $_POST['shipping_cost'];
        $total_cost = $_POST['total_cost'];
        $price = $_POST['price'];
        $status = $_POST['status'];
        $created_at = $_POST['created_at'];
        $updated_at = $_POST['updated_at'];

        // echo "INSERT INTO `ccc_product` (`product_name`, `sku`, `product_type`, `category_name`, `manufacturer_cost`, `shipping_cost`, `total_cost`, `price`, `status`, `created_at`, `updated_at`) VALUES ('$pruduct_name', '$sku', '$product_type', '$category_name', '$manufacturer_cost', '$shipping_cost', '$total_cost', '$price', '$status', '$created_at', '$updated_at')";

        $insert_sql = "INSERT INTO `ccc_product` (`product_name`, `sku`, `product_type`, `category_name`, `manufacturer_cost`, `shipping_cost`, `total_cost`, `price`, `status`, `created_at`, `updated_at`) VALUES ('$product_name', '$sku', '$product_type', '$category_name', '$manufacturer_cost', '$shipping_cost', '$total_cost', '$price', '$status', '$created_at', '$updated_at')";

        $result = mysqli_query($conn, $insert_sql);

        header("Location: form.php?result=$result");
        

    }
?>
