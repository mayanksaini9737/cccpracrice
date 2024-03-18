<?php 

class Cart_Block_Quote extends Core_Block_Template
{
    public function __construct()
    {
        $this->setTemplate('cart/quote/view.phtml');
    }

    public function getQuoteItems()
    {
        $quoteId = Mage::getSingleton('core/session')->get("quote_id");
        $products = Mage::getModel('sales/quote_item')
            ->getCollection()->addFieldToFilter('quote_id', $quoteId)->getData();

        // $products = Mage::getSingleton('sales/quote')->getItemCollection();
        return $products;
    }

}