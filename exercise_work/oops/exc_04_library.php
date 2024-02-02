<?php 
    class Book{
        public $title;
        public $author;

        public function __construct($tit, $aut){
            $this->title = $tit;
            $this->author = $aut;
        }

        public function displayInfo(){
            echo "Title: $this->title, Author: $this->author";
        }
    }

    class Library{
        private $books = [];

        public function addBook(Book $book){
            $this->books[] = $book;
        }

        public function displayAllBooks(){
            foreach($this->books as $book){
                $book->displayInfo();
                echo "<br>";
            }
        }
    }

    $book1 = new Book("The Catcher in the Rye", "J.D. Salinger");
    $book2 = new Book("To Kill a Mockingbird", "Harper Lee");
    // $book1->displayInfo();

    $library = new Library();
    $library->addBook($book1);
    $library->addBook($book2);
    $library->displayAllBooks();
     

?>