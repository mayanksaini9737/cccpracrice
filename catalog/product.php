<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>Product form</title>
    <style>
        .form-horizontal{
            display:block;
            width:50%;
            margin:0 auto;
        }
    </style>
  </head>
  <body>

    <?php 
        include('sql/connection.php');
        include('sql/functions.php');
        
        $operation = isset($_GET['operation']) ? $_GET['operation'] : 'insert';
        $product_id = isset($_GET['product_id']) ? $_GET['product_id'] : '';
        $table_name = 'ccc_product';
        
        if ($operation == 'delete'){
            $wh= ["product_id" => $product_id];
            $delete_func_query = delete_sql($table_name,$wh);
            $delete = mysqli_query($conn, $delete_func_query);
            header("Location: product_list.php");
        } else{

            // shows data if it get data from database
            if (isset($_GET['product_id']) && isset($_GET['operation'])){
                $table_name = 'ccc_product';
                $product_id = $_GET['product_id'];
                $wh= ["product_id" => $product_id];
                $select_product = read_sql($table_name ,['*'], $wh);
                $read = "{$select_product}";
                $result = mysqli_query($conn,$read);
                $row = mysqli_fetch_assoc($result);
            }

            if ($_SERVER['REQUEST_METHOD'] == 'POST'){
                $data = $_POST['group'];

                // removes key from $data that is not in the table
                unset($data['operation']);

                if (isset($_POST['group']['operation']) && $_POST['group']['operation'] == 'update'){
                    $product_id = $_GET['product_id'];
                    $where = ['product_id'=>$product_id];
                    $update = update_sql($table_name, $data, $where);
                    // print_r($update);
                    $update_result = mysqli_query($conn, $update);
                    if ($update_result){
                        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong>Success!</strong> Your record updated successfully.
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                            </div>';
                    } else {
                        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <strong>Failed!</strong>Sorry! Update failed
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                            </div>';
                    }
                    // header('Location: product_list.php');
                } else{
                    $insert = insert_sql($table_name, $data);
                    $insert_result = mysqli_query($conn, $insert);
                    if ($insert_result){
                        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong>Success!</strong> Your product has been added successfully.
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                            </div>';
                    } else {
                        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <strong>Failed!</strong>We are facing some technical issue and Your entry was not submitted successfully. We regret the inconvinience caused!
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                            </div>';
                    }  
                }
            }
        }
        
        

        // mysqli_close($conn);
    ?>

    <div class="container">
        <h1 class="text-center my-3"> Product Details </h1>
        <form action="product.php?<?php echo isset($product_id)?'product_id='.$product_id:'' ?>" method="post" class=" p-4 form-horizontal">
        <div class="form-group">
            <label for="product_name">Pruduct Name:</label>
            <input type="text" value="<?php echo $row['product_name']?? " " ?>" class="form-control" id="product_name" name="group[product_name]" required>
        </div>
        <div class="form-group">
            <label for="sku">SKU:</label>
            <input type="text" value="<?php echo $row['sku']?? " " ?>" class="form-control" id="sku" name="group[sku]" required >
        </div>
        <div class="form-group">
            <label for="product_type">Product Type:</label>
            <div class="form-check form-check-inline">
                <input class="form-check-input mx-2" type="radio" name="group[product_type]" id="product_type" value="simple"<?php echo (isset($row['product_type']) && $row['product_type']=='simple')?'checked':'' ?> checked>
                <label class="form-check-label" for="inlineRadio1">Simple</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="group[product_type]" id="product_type2" value="bundle"<?php echo (isset($row['product_type']) && $row['product_type']=='bundle')?'checked':'' ?>>
                <label class="form-check-label" for="inlineRadio2">Bundle</label>
            </div>
        </div>
        <div class="form-group">
            <label for="category_name">Category:</label>
            <select class="form-control" id="category_name" name="group[category_name]" required>
                <!-- display category name from category table -->
                <?php 
                    $select_sql = read_sql('ccc_category',['*']);
                    $select_sql = "$select_sql ORDER BY name ASC";  
                    $res = mysqli_query($conn, $select_sql);
                    if(mysqli_num_rows($res)>0){
                        while($category = mysqli_fetch_assoc($res)){
                            $selected = (isset($row["category_name"]) && $row["category_name"]== $category["name"])?"selected":"";
                            echo '<option value="'.$category["name"];
                            echo '"'.$selected.'>';
                            echo $category['name'];
                            echo '</option>';
                        }
                    }
                ?>

                <!-- display category name directly -->
                <!-- <option value="Bar & Game Room"<?php echo (isset($row['category_name']) && $row['category_name']=='Bar & Game Room')?'selected':'' ?>>Bar & Game Room</option>
                <option value="Bedroom"<?php echo (isset($row['category_name']) && $row['category_name']=='Bedroom')?'selected':'' ?>>Bedroom</option>
                <option value="Decor"<?php echo (isset($row['category_name']) && $row['category_name']=='Decor')?'selected':'' ?>>Decor</option>
                <option value="Dining & Kitchen"<?php echo (isset($row['category_name']) && $row['category_name']=='Dining & Kitchen')?'selected':'' ?>>Dining & Kitchen</option>
                <option value="Lighting"<?php echo (isset($row['category_name']) && $row['category_name']=='Lighting')?'selected':'' ?>>Lighting</option>
                <option value="Living Room"<?php echo (isset($row['category_name']) && $row['category_name']=='Living Room')?'selected':'' ?>>Living Room</option>
                <option value="Mattresses"<?php echo (isset($row['category_name']) && $row['category_name']=='Mattresses')?'selected':'' ?>>Mattresses</option>
                <option value="Office"<?php echo (isset($row['category_name']) && $row['category_name']=='Office')?'selected':'' ?>>Office</option>
                <option value="Outdoor"<?php echo (isset($row['category_name']) && $row['category_name']=='Outdoor')?'selected':'' ?>>Outdoor</option> -->

            </select>
        </div>
        <div class="form-group">
            <label for="manufacturer_cost">Manufacturer cost:</label>
            <input type="text" value="<?php echo $row['manufacturer_cost']?? " " ?>" class="form-control" id="manufacturer_cost" name="group[manufacturer_cost]" required>
        </div>
        <div class="form-group">
            <label for="shipping_cost">Shipping cost:</label>
            <input type="text" value="<?php echo $row['shipping_cost']?? " " ?>" class="form-control" id="shipping_cost" name="group[shipping_cost]" required>
        </div>
        <div class="form-group">
            <label for="total_cost">Total cost:</label>
            <input type="text" value="<?php echo $row['total_cost']?? " " ?>" class="form-control" id="total_cost" name="group[total_cost]" required>
        </div>
        <div class="form-group">
            <label for="price">Price:</label>
            <input type="text" value="<?php echo $row['price']?? " " ?>" class="form-control" id="price" name="group[price]" required>
        </div>
        <div class="form-group">
            <label for="status">Status:</label>
            <select class="form-control" id="status" name="group[status]" required>
                <option value="Enabled"<?php echo (isset($row['status']) && $row['status']=='Enabled')?'selected':'' ?>>Enabled</option>
                <option value="Disabled"<?php echo (isset($row['status']) && $row['status']=='Disabled')?'selected':'' ?>>Disabled</option>
            </select>
        </div>
        <div class="form-group">
            <label for="created_at">Created At:</label>
            <input type="date" value="<?php echo $row['created_at']?? " " ?>" class="form-control" id="created_at" name="group[created_at]" required>
        </div>
        <div class="form-group">
            <label for="updated_at">Updated At:</label>
            <input type="date" value="<?php echo $row['updated_at']?? " " ?>" class="form-control" id="updated_at" name="group[updated_at]" required>
        </div>
        <input type="hidden" name=group[operation] value="<?php echo $operation ?>">
        <input type="submit" class="btn btn-primary"></input>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
  </body>
</html>
