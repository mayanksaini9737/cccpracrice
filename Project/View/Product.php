<?php 
    class View_Product {
        public function __construct(){
            // echo "Hello from View_Product";
        }

        public function createForm(){
            $form = $this->createFormTitle("Product Table");
            $form .= '<form action="" method="post" >';
                $form .= '<div>';
                    $form .= $this->createTextField("group[product_name]", "Product Name: ");
                $form .= '</div>';
                $form .= '<div>';
                    $form .= $this->createTextField("group[sku]", "SKU: ");
                $form .= '</div>';
                $form .= '<div>';
                    $form.= '<span>Product Type:</span>';
                    $form .= $this->createRadioButton("group[product_type]", "Simple", "Simple", true);
                    $form .= $this->createRadioButton("group[product_type]", "Bundle", "Bundle");
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
                    $form .= $this->createSelect("Category Name: ","group[category_name]", $options1, "Decor");
                $form .= '</div>';
                $form .= '<div>';
                    $form .= $this->createTextField("group[manufacturer_cost]", "Manufacturer Cost: ");
                $form .= '</div>';
                $form .= '<div>';
                    $form .= $this->createTextField("group[shipping_cost]", "Shipping Cost: ");
                $form .= '</div>';
                $form .= '<div>';
                    $form .= $this->createTextField("group[total_cost]", "Total Cost: ");
                $form .= '</div>';
                $form .= '<div>';
                    $form .= $this->createTextField("group[price]", "Price: ");
                $form .= '</div>';
                $form .= '<div>';   
                    $options2 =["Enabled"=>"Enabled",
                        "Disabled" => "Disabled"];
                    $form .= $this->createSelect( "Status: " ,"group[status]", $options2, "Enabled");
                $form .= '</div>';
                $form .= '<div>';
                    $form .= $this->createDateInput("group[created_at]", "Created Date: ");
                $form .= '</div>';
                $form .= '<div>';
                    $form .= $this->createDateInput("group[updated_at]", "Updated Date: ");
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
        
        public function toHtml(){
            return $this->createForm();
        }

        
    }
?>