<?php
class Admin_Controller_Import extends Core_Controller_Admin_Action
{
    public function formAction()
    {
        $layout = $this->getLayout();
        $layout->getChild('head')->addCss('import/form.css');
        $child = $layout->getChild('content');
        $bannerList = $layout->createBlock('admin/csv_import');
        $child->addChild('bannerList', $bannerList);
        $layout->toHtml();
    }

    public function saveAction()
    {
        $fileData = $this->getRequest()->getFileData('csvfile');
        $uploadedFileName = $fileData['name'];

        $importFilePath = Mage::getBaseDir('media/import/') . $uploadedFileName;

        if (file_exists($importFilePath)) {
            $pathInfo = pathinfo($importFilePath);
            $fileExtension = isset ($pathInfo['extension']) ? '.' . $pathInfo['extension'] : '';
            $counter = 1;
            while (file_exists($pathInfo['dirname'] . '/' . $pathInfo['filename'] . $counter . $fileExtension)) {
                $counter++;
            }
            $uploadedFileName = $pathInfo['filename'] . $counter . $fileExtension;

            $importFilePath = $pathInfo['dirname'] . '/' . $uploadedFileName;
        }
        move_uploaded_file(
            $fileData['tmp_name'],
            $importFilePath
        );

    }

    public function readAction()
    {
        $row = 0;
        $path = Mage::getBaseDir("media/import") . "/products.csv";
        if (!file_exists($path)) {
            echo "File not found: $path";
            exit;
        }

        if (($handle = fopen($path, "r")) !== FALSE) {
            while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
                if (!$row) {
                    $header = $data;
                    $row++;
                    continue;
                }

                $data1 = array_combine($header, $data);
                $jsonData = json_encode($data1);

                Mage::getModel("import/import")->setData(["data" => $jsonData])
                    ->save();

                $row++;
            }
            echo $row;
            fclose($handle);
        } else {
            echo "Failed to open file: $path";
        }
    }

    public function importAction()
    {
        $importData = Mage::getModel('import/import')->getCollection()
            ->addFieldToFilter('status', 0)->getData();

        foreach ($importData as $importRow) {
            $data = json_decode($importRow->getData()['data'], true);

            $this->saveImport("catalog_product", $data);

            Mage::getModel('import/import')->setData($importRow->getData())
                ->addData('status', 1)->save();
        }
        echo "Records inserted successfully";
    }

    public function saveImport($tableName, $data)
    {
        $keys = array_keys($data);
        $values = array_map(function ($value) {
            return "'" . $value . "'";
        }, $data);

        $check = Mage::getModel('catalog/product')->getCollection()
            ->addFieldToFilter('sku', $data['sku'])->getFirstItem();

        if ($check) {
            $updateValues = array();
            foreach ($values as $key => $column) {
                $updateValues[] = "$key = " . $column;
            }
            $query = "UPDATE {$tableName} SET " . implode(", ", $updateValues) . " WHERE sku=" . "'" . $data['sku'] . "'";
        } else {
            $query = "INSERT INTO {$tableName} (" . implode(", ", $keys) . ") VALUES (" . implode(", ", $values) . ")";
        }

        $dbAdapter = new Core_Model_DB_Adapter();
        return $dbAdapter->execute($query);
    }
}

