<?php
class Catalog_Model_Resource_Product
{
    protected $_tableName = "";
    protected $_primaryKey = "";
    public function init($tableName, $primaryKey)
    {
        $this->_tableName = $tableName;
        $this->_primaryKey = $primaryKey;
    }

    public function getTableName(){
        return $this->_tableName;
    }

    public function load($id, $column=null){
        $sql = "SELECT * FROM {$this->_tableName} WHERE {$this->_primaryKey}= {$id} LIMIT 1";
        // echo $sql;
        return $this->getAdapter()->fetchRow($sql);
    }
    public function save(Catalog_Model_Product $product){
        $data = $product->getData();
        if(isset($data[$this->getPrimaryKey()])){
            unset($data[$this->getPrimaryKey()]);
        }
        $sql = $this->insertSql($this->getTableName(), $data);
        $id = $this->getAdapter()->insert($sql);
        $product->setId($id);
        // var_dump($id);
    }
    public function insertSql($table_name, $data)
    {
        $columns = $values = [];
        foreach ($data as $column => $value) {
            $columns[] = sprintf("`%s`", $column);
            $values[] = sprintf("'%s'", addslashes($value));
        }
        $columns = implode(",", $columns);
        $values = implode(",", $values);
        $query = "INSERT INTO {$table_name} ({$columns}) VALUES ({$values})";
        return $query;
    }

    public function getPrimaryKey()
    {
        return $this->_primaryKey;  
    }

    public function getAdapter(){
        return new Core_Model_DB_Adapter();
    }
    //Above part is abstract
    public function __construct()
    {
        $this->init('catalog_product', 'product_id');
    }
}
