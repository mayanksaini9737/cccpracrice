<?php
class Model_Product extends Model_Abstract
{
    public $tableName = "ccc_product";

    public function __construct()
    {
        // echo "hello guys";
    }

    public function insert($data){
        $insert_sql = $this->getQueryBuilder()->insert_query($this->tableName, $data);
        // echo $insert_sql;
        $execute_sql = $this->getQueryExecuter()->executeQuery($insert_sql);
        // echo $execute_sql;
    }

    public function selectAll(){
        $select_sql = $this->getQueryBuilder()->select_query($this->tableName);
        $execute_sql  = $this->getQueryExecuter()->executeQuery($select_sql);
        $data = $this->getQueryExecuter()->selectFetch($execute_sql);
        return $data;
    }


}