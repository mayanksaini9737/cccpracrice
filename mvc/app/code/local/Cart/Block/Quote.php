<?php 

class Cart_Block_Quote extends Core_Block_Template
{
    public function __construct()
    {
        $this->setTemplate('cart/quote/view.phtml');
    }

    public function getQuoteItems()
    {
        $session = Mage::getSingleton("core/session");
        $quoteId = $session->get("quote_id") ?? null;
        $products = Mage::getModel('sales/quote_item')
            ->getCollection()->addFieldToFilter('quote_id', $quoteId)->getData();

        // $products = Mage::getSingleton('sales/quote')->getItemCollection();
        return $products;
    }

}