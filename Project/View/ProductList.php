<?php 
    class View_ProductList {
        public function __construct()
        {
            // echo "Hello from ProductList";
        }

        public function showList($data = []){
            $table= '<table border="2px" style="border-collapse: collapse">';
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
                </tr>';

            foreach ($data as $index=>$row){
                $table.= '<tr>';
                unset($data[$index]['product_id']);
                foreach ($data[$index] as $value){
                    $table.= '<td>';
                    $table .= $value;
                    $table.= '</td>';   
                }
                // $table .= '<td><a href=?id=></a></td>';
                $table.= '</tr>';
            }
            $table.= '</table>';
            return $table;
        }
    }
?>