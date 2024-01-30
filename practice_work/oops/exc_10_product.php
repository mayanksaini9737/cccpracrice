<?php 
    class Product{
        private $productId;
        private $name;
        private $price;

        public function __construct($productId, $name, $price){
            $this->productId = $productId;
            $this->name = $name;
            $this->price = $price;
        }

        public function getPrice(){
            return $this->price;
        }
        public function displayProduct(){
            echo "Product Id: {$this->productId}, Product Name: {$this->name}, Price: {$this->price} USD<br>";
        }
    }

    class ShoppingCart{
        private $items = [];

        public function addItem(Product $product){
            $this->items[] = $product;
        }

        public function calculateTotal(){
            $total = 0;
            foreach($this->items as $item){
                $total += $item->getPrice();
            }
            return "Total Amount is: {$total}";
        }

        public function displayItems(){
            echo "Shopping cart Items: <br>";
            foreach ($this->items as $item) {
                $item->displayProduct();
            }
        }
    }

    $laptop = new Product("2345", "Lenovo ideapad slim 3", 500);  
    $phone = new Product("2737", "Redmi Note 13 ", 200);
    
    $mycart = new ShoppingCart();
    $mycart->addItem($laptop);
    $mycart->addItem($phone);

    $mycart->displayItems();
    echo $mycart->calculateTotal();

    
    
?>