<?php 
    class View_Product {
        public function __construct(){
            // echo "Hello from View_Product";
        }

        public function createForm($record = null){
            // print_r($record);
            // die;
            // echo $record['product_id'];
            $id = null ?? $record['product_id'] ?? 0;
            $form = $this->createFormTitle("Product Form");
            $form .= '<form action=?id='.(isset($id)?$id:"").' method="post" >';
                $form .= '<div>';
                    $form .= $this->createTextField("group[product_name]", "Product Name: ", isset($record['product_name'])? $record['product_name']: '');
                $form .= '</div>';
                $form .= '<div>';
                    $form .= $this->createTextField("group[sku]", "SKU: ", isset($record['sku'])? $record['sku']: '');
                $form .= '</div>';
                $form .= '<div>';
                    $form.= '<span>Product Type:</span>';
                    $form .= $this->createRadioButton("group[product_type]", "Simple", "Simple", true ?? (isset($record['product_type']) && $record['product_type']=='Simple')? 'Simple':'');
                    $form .= $this->createRadioButton("group[product_type]", "Bundle", "Bundle", (isset($record['product_type']) && $record['product_type']=='Bundle')? 'Bundle':'');
                $form .= '</div>';
                $form .= '<div>';
                    $options1 =["Bar & Game Room"=>"Bar & Game Room",
                        "Bedroom" => "Bedroom",
                        "Decor" => "Decor",
                        "Dining & Kitchen" => "Dining & Kitchen",
                        "Lighting" => "Lighting",
                        "Living Room" => "Living Room",
                        "Mattresses" => "Mattresses",
                        "Office" => "Office",
                        "Outdoor" => "Outdoor" ];
                    $form .= $this->createSelect("Category Name: ","group[category_name]", $options1,((isset($record['category_name'])) ? $record['category_name']:'')?? "Decor"  );
                $form .= '</div>';
                $form .= '<div>';
                    $form .= $this->createTextField("group[manufacturer_cost]", "Manufacturer Cost: ", isset($record['manufacturer_cost'])? $record['manufacturer_cost']: '' );
                $form .= '</div>';
                $form .= '<div>';
                    $form .= $this->createTextField("group[shipping_cost]", "Shipping Cost: ", isset($record['shipping_cost'])? $record['shipping_cost']: '');
                $form .= '</div>';
                $form .= '<div>';
                    $form .= $this->createTextField("group[total_cost]", "Total Cost: ", isset($record['total_cost'])? $record['total_cost']: '');
                $form .= '</div>';
                $form .= '<div>';
                    $form .= $this->createTextField("group[price]", "Price: ", isset($record['price'])? $record['price']: '');
                $form .= '</div>';
                $form .= '<div>';   
                    $options2 =["Enabled"=>"Enabled",
                        "Disabled" => "Disabled"];
                    $form .= $this->createSelect( "Status: " ,"group[status]", $options2, ((isset($record['status']))? $record['status']:'')??"Enabled" );
                $form .= '</div>';
                $form .= '<div>';
                    $form .= $this->createDateInput("group[created_at]", "Created Date: ", isset($record['created_at'])? $record['created_at']: '');
                $form .= '</div>';
                $form .= '<div>';
                    $form .= $this->createDateInput("group[updated_at]", "Updated Date: ", isset($record['updated_at'])? $record['updated_at']: '');
                $form .= '</div>';
                $form .= '<div>';
                    $form .= $this->createSubmitButton("submit", "Submit");
                $form .= '</div>';
            $form .= '</form>';
            return $form;
        }

        public function createFormTitle($title){
            $formHeading = "<h1>{$title}</h1>";
            return $formHeading;
        }

        public function createTextField($name, $title, $value = '', $id = '') {
            $inputField = '<label for="' . $name . '">' . $title . ':</label>';
            $inputField .= '<input type="text" name="' . $name . '" id="' . $id . '" value="' . $value . '" required >';
            return $inputField;
        }
        
        public function createRadioButton($name, $value, $label, $checked = false, $id = '') {
            $radioButton = '<input type="radio" name="' . $name . '" id="' . $id . '" value="' . $value . '"';
            if ($checked) {
                $radioButton .= ' checked';
            }
            $radioButton .= '>';
            $radioButton .= '<label for="' . $id . '">' . $label . '</label>';
            return $radioButton;
        }

        public function createSelect($labelText = '' ,$name, $options, $selectedValue = '', $id = '') {
            $selectMenu = '<label for="' . $id . '">' . $labelText . '</label>';
            $selectMenu .= '<select name="' . $name . '" id="' . $id . '" required>';
            foreach ($options as $value => $label) {
                $selectMenu .= '<option value="' . $value . '"';
                if ($value == $selectedValue) {
                    $selectMenu .= ' selected';
                }
                $selectMenu .= '>' . $label . '</option>';
            }
            $selectMenu .= '</select>';
            return $selectMenu;
        }

        public function createDateInput($name, $labelText, $value = '', $id = '') {
            $dateInput = '<label for="' . $id . '">' . $labelText . ':</label>';
            $dateInput .= '<input type="date" name="' . $name . '" id="' . $id . '" value="' . $value . '" required >';
            return $dateInput;
        }
        
        public function createPasswordInput($name, $labelText, $id = '') {
            $dateInput = '<label for="' . $id . '">' . $labelText . ':</label>';
            $dateInput .= '<input type="password" name="' . $name . '" id="' . $id . '" required >';
            return $dateInput;
        }

        public function createSubmitButton($name, $value, $id = '') {
            $submitButton = '<input type="submit" name="' . $name . '" id="' . $id . '" value="' . $value . '">';
            return $submitButton;
        }
        
        public function forSettingUpdatefield(){
            $request = new Model_Request();
            $id = $request->getQueryData('id');
            $modelProduct = new Model_Product();
            $query = $modelProduct->getQueryBuilder()->select_query('ccc_product',['*'], ['product_id'=>$id]);
            $singlerecord = $modelProduct->getQueryExecuter()->executeQuery($query);
            $result = $modelProduct->getQueryExecuter()->fetchSingleRecord($singlerecord);
            return $result;
        }
        public function toHtml(){
            $result = $this->forSettingUpdatefield();
            if (isset($result)){
                return $this->createForm($result);
            } else {
                return $this->createForm();
            }
        }

        
    }
?>