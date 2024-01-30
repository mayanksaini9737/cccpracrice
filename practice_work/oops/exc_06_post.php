<?php 
    class Post{
        public $title;
        public $content;

        public function __construct($tl, $con){
            $this->title = $tl;
            $this->content = $con;
        }

        public function displayInfo(){
            echo "Title: $this->title, Content: $this->content";
        }
    }

    class Blog{
        private $posts = [];

        public function addPost(Post $post){
            $this->posts[] = $post;
        }

        public function displayAllPost(){
            foreach ($this->posts as $post) {
                $post->displayInfo();
                echo "<br><br>";
            }
        }
    }

    $post1 = new Post("Intodunction to PHP", "This is a blog post about PHP");
    $post2 = new Post("Object-oriented Programming", "An Overview of OOP principles");

    $blog = new Blog();
    $blog->addPost($post1);
    $blog->addPost($post2);
    $blog->displayAllPost();
?>