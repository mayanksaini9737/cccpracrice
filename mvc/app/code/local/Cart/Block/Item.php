<?php 

class Cart_Block_Item extends Core_Block_Template
{
    
    public function __construct()
    {
        $this->setTemplate('cart/item/view.phtml');
    }

    public function getProduct()
    {
        return Mage::getModel('catalog/product')->load($this->getRequest()->getParams('product_id'));
    }
    public function getItemQuantity()
    {
        $quate_id = Mage::getSingleton('core/session')->get('quote_id');
        $quateItem = Mage::getModel('sales/quote_item')
                ->getCollection()->addFieldToFilter('product_id', $this->getRequest()->getParams('product_id'))
                ->addFieldToFilter('quote_id', $quate_id)
                ->getFirstItem();
        return $quateItem->getQty();
    }
}