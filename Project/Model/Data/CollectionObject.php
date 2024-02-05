<?php 
    class Model_Data_CollectionObject {
        protected $_data = [];
        public function addData($row){
                $this->_data[] = new Model_Data_Object($row);
        }

        public function getData() {
            return $this->_data;
        }
    }
?>