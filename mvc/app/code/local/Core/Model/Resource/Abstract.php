<?php
class Core_Model_Resource_Abstract
{
    protected $_tableName = "";
    protected $_primaryKey = "";
    public function init($tableName, $primaryKey)
    {
        $this->_tableName = $tableName;
        $this->_primaryKey = $primaryKey;
    }

    public function getTableName()
    {
        return $this->_tableName;
    }

    public function load($id, $column = null)
    {
        $sql = "SELECT * FROM {$this->_tableName} WHERE {$this->_primaryKey}= '{$id}' LIMIT 1";
        return $this->getAdapter()->fetchRow($sql);
    }
    public function save(Core_Model_Abstract $abstract)
    {
        $data = $abstract->getData();
        $primaryKey = $this->getPrimaryKey();
        if (isset($data[$primaryKey]) && !empty($data[$primaryKey])) {
            $sql = $this->updateSql($this->getTableName(),
                $data,
                [$this->getPrimaryKey() => $abstract->getId()]
            );
            $this->getAdapter()->update($sql);
        } else {
            $sql = $this->insertSql($this->getTableName(), $data);
            $id = $this->getAdapter()->insert($sql);
            $abstract->setId($id);
        }
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

    public function delete(Core_Model_Abstract $abstract)
    {
        $data = $abstract->getId();
        $sql = $this->deleteSql($this->getTableName(), [$this->getPrimaryKey() => $data]);
        $this->getAdapter()->delete($sql);
    }

    public function deleteSql($table_name, $where)
    {
        $where_con = [];
        foreach ($where as $key => $val) {
            $where_con[] = "`$key` = '$val'";
        }
        $where_con = implode(' AND ', $where_con);
        $sql_str = "DELETE FROM {$table_name} WHERE {$where_con}";
        return $sql_str;
    }

    function updateSql($table, $set, $where)
    {
        $set_value = [];
        foreach ($set as $key => $val) {
            $set_value[] = "`$key` = '$val'";
        }
        $set_value = implode(", ", $set_value);
        $where_con = [];
        foreach ($where as $key => $val) {
            $where_con[] = "`$key` = '$val'";
        }
        $where_con = implode(' AND ', $where_con);
        $sql_str = "UPDATE {$table} SET {$set_value} WHERE {$where_con}";
        return $sql_str;
    }

    public function getPrimaryKey()
    {
        return $this->_primaryKey;
    }

    public function getAdapter()
    {
        return new Core_Model_DB_Adapter();
    }
}
?>