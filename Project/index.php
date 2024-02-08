<?php 
    include "Library/autoload.php";

    // $request = new Model_Request();
    // $viewProduct = new View_Product;
    // $modelProduct = new Model_Product();
    // if(!$request->isPost()) {
    //     echo $viewProduct->toHtml();
    //     if((isset($_GET['operation'])) && $_GET['operation'] == 'delete'){
    //         $id = $_GET['id'];
    //         $modelProduct->delete($id);
    //         header('Location:./');
    //     }
    //     $Products = $modelProduct->selectAll();
    //     if (!(empty($Products))){
    //         $product_list = new View_ProductList();
    //         echo $product_list->showList($Products);
    //     } else{
    //         echo "No products found";
    //     }
    // } 
    // else {
    //     $id = $request->getParams('id') ?? '';
    //     // echo $id;
    //     if (isset($_GET['id']) && $_GET['id'] > 0){
    //         $modelProduct->update($request->getPostData("group"));
    //     } 
    //      else {
    //         $modelProduct->insert($request->getPostData("group"));
    //     }
    //     header('Location:./');
    // }
    

    class Ccc{
        public static function init(){
            $frontControllerObj = new Controller_Front();
            $frontControllerObj->init();
        }
    }
    Ccc::init();
    
?>