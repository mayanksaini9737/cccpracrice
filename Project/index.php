<?php 
    include "Library/autoload.php";

    $request = new Model_Request();

    if(!$request->isPost()) {
        $product = new View_Product;
        echo $product->toHtml();
    } else {
        $product = new Model_Product();
        $product->insert($request->getPostData("group"));

        $products = $product->selectAll();

        if (!(empty($products))){
            $product_list = new View_ProductList();
            echo $product_list->showList($products);
        } else{
            echo "No products found";
        }
    }
    
?>