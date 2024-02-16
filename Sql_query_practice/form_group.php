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

    // function update($table, $values,$con){
    //     foreach($con as $column_name => $val ){
    //         $column_name = 
    //     }
    //     echo "UPDATE {$table} SET WHERE ";
    // }
    ?>
    <div class="container">
        <h1 class="text-center my-3"> Product Details </h1>
        <form action="submit_grouping.php" method="post" class=" p-4 form-horizontal">
        <div class="form-group">
            <label for="product_name">Pruduct Name:</label>
            <input type="text" class="form-control" id="product_name" name="group1[product_name]">
        </div>
        <div class="form-group">
            <label for="sku">SKU:</label>
            <input type="text" class="form-control" id="sku" name="group1[sku]">
        </div>
        <div class="form-group">
            <label for="product_type">Product Type:</label>
            <div class="form-check form-check-inline">
                <input class="form-check-input mx-2" type="radio" name="group1[product_type]" id="product_type" value="simple" checked>
                <label class="form-check-label" for="inlineRadio1">Simple</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="group1[product_type]" id="product_type2" value="bundle">
                <label class="form-check-label" for="inlineRadio2">Bundle</label>
            </div>
        </div>
        <div class="form-group">
            <label for="category_name">Category:</label>
            <select class="form-control" id="category_name" name="group1[category_name]">
                <option>Bar & Game Room</option>
                <option>Bedroom</option>
                <option>Decor</option>
                <option>Dining & Kitchen</option>
                <option>Lighting</option>
                <option>Living Room</option>
                <option>Mattresses</option>
                <option>Office</option>
                <option>Outdoor</option>
            </select>
        </div>
        <div class="form-group">
            <label for="manufacturer_cost">Manufacturer cost:</label>
            <input type="text" class="form-control" id="manufacturer_cost" name="group1[manufacturer_cost]">
        </div>
        <div class="form-group">
            <label for="shipping_cost">Shipping cost:</label>
            <input type="text" class="form-control" id="shipping_cost" name="group1[shipping_cost]">
        </div>
        <div class="form-group">
            <label for="total_cost">Total cost:</label>
            <input type="text" class="form-control" id="total_cost" name="group1[total_cost]">
        </div>
        <div class="form-group">
            <label for="price">Price:</label>
            <input type="text" class="form-control" id="price" name="group1[price]">
        </div>
        <div class="form-group">
            <label for="status">Status:</label>
            <select class="form-control" id="status" name="group1[status]">
                <option>Enabled</option>
                <option>Disbaled</option>
            </select>
        </div>
        <div class="form-group">
            <label for="created_at">Created At:</label>
            <input type="date" class="form-control" id="created_at" name="group1[created_at]">
        </div>
        <div class="form-group">
            <label for="updated_at">Updated At:</label>
            <input type="date" class="form-control" id="updated_at" name="group1[updated_at]">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    -->
  </body>
</html>