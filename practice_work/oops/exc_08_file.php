<?php 
    class File{
        public $filename;
        public $size;

        public function __construct($fl_name, $sz){
            $this->filename = $fl_name;
            $this->size = $sz;
        }

        public function displayFileExtension(){
            $parts = explode('.', $this->filename);
            // reset() for access first element --> filename
            return end($parts);
        }

        public function displayInfo(){
            return "Filename: $this->filename, Size: $this->size <br>";
        }
    }

    $file = new File("document.php", 2048);
    echo "File Extension: ". $file->displayFileExtension(). "<br>";

?>