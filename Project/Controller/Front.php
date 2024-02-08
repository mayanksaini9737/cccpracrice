<?php
class Controller_Front{
    public function __construct()
    {
        
    }

    public function init(){
        $modelproduct = new Model_Product();
        $request = new Model_Request();
        $url=$request->getRequestUri();
        $url="View_".ucwords(str_replace('/','_',$url),'_');
        
        if (!isset($_POST['submit'])){
            $Layout = new $url();
            echo $Layout->toHtml();
        } else{
            $modelproduct->insert($request->getPostData('group'));
            $url2 = substr($url,0,strpos($url,"?")).'List';
            $Layout2 = new $url2();    
            $products = $modelproduct->selectAll();
            echo $Layout2->showList($products);
        }
    }
}
?>