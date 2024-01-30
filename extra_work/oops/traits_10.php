<?php 
    // traits
    // with help of traits we create a function that can be used in different classes
    // if you have to make any modification in that function then you have to modify only one function and change reflect in all classes
    
    
    trait hello{
        function sayhello(){
            echo "Hello Everyone";
        }
        function sayhi(){
            echo "Hii Everyone";
        }
    }
    trait bye{
        function saybye(){
            echo "Bye Everyone";
        }
    }
    class greet{
        // use hello;
        // use bye;
        use hello, bye;
    }

    class byeClass{
        use bye;
    }

    // $obj1 = new greet();
    // $obj1->sayhello();
    // $obj1->sayhi();

    $obj2 = new byeClass();
    $obj2->saybye();
?>