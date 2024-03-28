<?php

class Core_Model_Resource_Collection_Abstract
{
    protected $_resource = null, $_model = null, $_select = [], $_data = [];
    public function __construct()
    {
    }
    public function setResource($resource)
    {
        $this->_resource = $resource;
        return $this;
    }
    public function setModel($model)
    {
        $this->_model = $model;
        return $this;
    }
    public function select()
    {
        $this->_select['FROM'] = $this->_resource->getTableName();
        return $this;
    }
    public function addFieldToFilter($field, $value)
    {
        $this->_select['WHERE'][$field][] = $value;
        return $this;
    }
    public function addGroupBy($groupBy)
    {
        $this->_select['GROUP BY'] = $groupBy;
        return $this;
    }

    public function addHaving($having)
    {
        $this->_select['HAVING'] = $having;
        return $this;
    }

    public function addOrderBy($field, $direction = 'ASC')
    {
        $this->_select['ORDER BY'][] = array(
            'field' => $field,
            'direction' => strtoupper($direction)
        );
        return $this;
    }

    public function addLimit($limit)
    {
        $this->_select['LIMIT'] = $limit;
        return $this;
    }

    public function load()
    {
        $sql = "SELECT * FROM {$this->_select['FROM']}";
        if (isset($this->_select["WHERE"])) {
            $whereCondition = [];
            foreach ($this->_select["WHERE"] as $column => $value) {
                foreach ($value as $_value) {
                    if (!is_array($_value)) {
                        $_value = array('eq' => $_value);
                    }
                    foreach ($_value as $_condition => $_v) {
                        if (is_array($_v)) {
                            $_v = array_map(function ($v) {
                                return "'{$v}'";
                            }, $_v);
                            $_v = implode(',', $_v);
                        }
                        switch ($_condition) {
                            case 'eq':
                                $whereCondition[] = "{$column} = '{$_v}'";
                                break;
                            case 'in':
                                $whereCondition[] = "{$column} IN ({$_v})";
                                break;
                            case 'not in':
                                $whereCondition[] = "{$column} NOT IN ({$_v})";
                                break;
                            case 'like':
                                $whereCondition[] = "{$column} LIKE '{$_v}'";
                                break;
                            case 'not like':
                                $whereCondition[] = "{$column} NOT LIKE '{$_v}'";
                                break;
                        }
                    }
                }
            }
            $sql .= " WHERE " . implode(" AND ", $whereCondition);
        }
        // Add GROUP BY clause
        if (isset($this->_select['GROUP BY'])) {
            $sql .= " GROUP BY {$this->_select['GROUP BY']}";
        }

        // Add HAVING clause
        if (isset($this->_select['HAVING'])) {
            $sql .= " HAVING {$this->_select['HAVING']}";
        }

        // Add ORDER BY clause
        if(isset($this->_select['ORDER BY'])){
            $orderBy = [];
            foreach ($this->_select['ORDER BY'] as $order) {
                $orderBy[] = "{$order['field']} {$order['direction']}";
            }
            $sql .= " ORDER BY " . implode(', ', $orderBy);
        }

        // Add LIMIT clause
        if (isset($this->_select['LIMIT'])) {
            $sql .= " LIMIT {$this->_select['LIMIT']}";
        }
        // echo $sql;

        $result = $this->_resource->getAdapter()->fetchAll($sql);
        foreach ($result as $row) {
            $this->_data[] = Mage::getModel($this->_model)->setData($row);
        }
    }
    public function getData()
    {
        $this->load();
        return $this->_data;
    }

    public function getFirstItem() 
    {
        $this->load();
        return (isset($this->_data[0])) ? $this->_data[0] : null;
    }
}
