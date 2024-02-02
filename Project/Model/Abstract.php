<?php 
    class Model_Abstract {
        public function getQueryBuilder(){
            return new Library_Sql_Query_Builder();
        }
        public function getQueryExecuter(){
            $connection = new Library_Connection('localhost', 'root', '', 'ccc_practice');
            return new Library_Sql_Query_Executer($connection->getConnection());
        }
    }
?>