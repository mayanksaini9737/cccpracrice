<?php
class Model_Product extends Model_Abstract
{
    public $tableName = "ccc_product";

    public function __construct(){
        // echo "hello guys";
    }

    public function insert($data){
        $insert_sql = $this->getQueryBuilder()->insert_query($this->tableName, $data);
        $execute_sql = $this->getQueryExecuter()->executeQuery($insert_sql);
        }

    public function selectAll(){
        $select_sql = $this->getQueryBuilder()->select_query($this->tableName);
        $execute_sql  = $this->getQueryExecuter()->executeQuery($select_sql);
        $data = $this->getQueryExecuter()->fetchAll($execute_sql);
        return $data;
    }

    public function update($data){
        $update_sql = $this->getQueryBuilder()->update_query($this->tableName,$data,['product_id' => $_GET['id']] );
        $execute_sql = $this->getQueryExecuter()->executeQuery($update_sql);
    }   

    public function delete($id){
        $delete_sql = $this->getQueryBuilder()->delete_query($this->tableName, ['product_id' => $id]);
        $execute_sql = $this->getQueryExecuter()->executeQuery($delete_sql);
    }

}