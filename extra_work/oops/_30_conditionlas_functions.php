<?php 
    // Conditionla functions -> only returns true or false
    /*
    1. class_exists()
    2. interface_exists()
    3. method_exists()
    4. trait_exist()
    5. property_exists()
    6. is_a()
    7. is_subclass_of()
    */

    // 1. class_exists()
    class Myclass{
        public $name;
        function fun(){

        }
    }   
    if(class_exists('Myclass')){
        // echo "Class exists";
        // $obj = new Myclass;
    } else{
        echo "Class not exist";
    }


    // 2. interface_exists()
    interface Myinterface {

    }
    if (interface_exists("Myinterface")){
        // echo "Interface exists";
        class abc implements Myinterface{

        }
    } else {
        echo "Interface not exist";
    }

    // 3. method_exists()
    $obj = new Myclass();
    if (method_exists($obj, "fun")){
        // echo "Method is exists";
    } else {
        echo "Method is not exist";
    }


    // 4. trait_exist()
    trait newTrait{
        function greet(){}
    }
    if (trait_exists("newTrait")){
        // echo "Trait is exists";
        class abcd{
            use newTrait;
        }
    } else {
        echo "Trait is not exist";
    }    


    // 5. property_exists()
    if (property_exists("Myclass", "name")){
        // echo "Property is exists";
    } else {
        echo "Property is not exist";
    }  


    // 6. is_a()
    $obj = new Myclass();
    if (is_a($obj, "Myclass")){
        // echo "Object belong to Myclass"; 
    } else {
        echo "Object does not belong to Myclass";
    }

    // 7. is_subclass_of()
    class subclass extends Myclass{

    }
    $childobj = new subclass();
    if (is_subclass_of($childobj, "Myclass")){
        echo "childobj is object of subclass and parent of subclass is Myclass";
    } else {
        echo "childobj is object of subclass and parent class is not Myclass";
    }


?>