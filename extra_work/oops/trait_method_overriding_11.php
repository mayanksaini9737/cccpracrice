<?php 
    // priority level - highest to low (selfclass method, trait method, base class method)

    trait hello{
        public function sayhello(){
            echo "Hello from hello trait";
        }
    }
    trait hii{
        public function sayhello(){
            echo "Hello from hii trait";
        }
    }

    class trtclass{
        // use hello, hii;  // it will throw error because of collision of same name method
        // use hello, hii{
        //     hello::sayhello insteadof hii; // it uses sayhello method from hello trait inplace of hii
        // }
        use hello, hii{
            // hello::sayhello as public    // if method is private in trait then use this style to use private method
            hello::sayhello insteadof hii;
            hii::sayhello as sayhii;    // you can use sayhello method of hii trait as sayhii
        }
    }
    $test = new trtclass();
    $test->sayhello();
    $test->sayhii();
?>