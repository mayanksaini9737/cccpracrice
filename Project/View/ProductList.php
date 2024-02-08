<?php 
    class View_ProductList {
        public function __construct()
        {
            // echo "Hello from ProductList";
        }

        public function showList($data = []){

            $table = '<div style="display:flex; align-item:center; justify-content:center">';
            $table .= '<table border="2px" style="border-collapse: collapse">';
            $table .= '<tr style="background-color: #A9A9A9">
                <th>Product Name</th>
                <th>SKU</th>
                <th>Product Type</th>
                <th>Category Name</th>
                <th>Manufactuer Cost</th>
                <th>Shipping Cost</th>
                <th>Total Cost</th>
                <th>Price</th>
                <th>Status</th>
                <th>Created Date</th>
                <th>Updated Date</th>
                <th></th>
                <th></th>
                </tr>';

            foreach ($data as $index=>$row){
                $table.= '<tr>';
                // unset($data[$index]['product_id']);
                foreach ($row as $key=> $value){
                    if($key !== 'product_id'){
                        $table.= '<td>';
                        $table .= $value;
                        $table.= '</td>';   
                    }
                }
                $Ops_id = '?id='. $data[$index]['product_id'];
                
                $table .= '<td><a href='.$Ops_id.'&operation=edit>Edit</a></td>';
                $table .= '<td><a href='.$Ops_id.'&operation=delete>Delete</a></td>';
                $table.= '</tr>';
            }
            $table.= '</table></div>';
            return $table;
        }
    }
?>