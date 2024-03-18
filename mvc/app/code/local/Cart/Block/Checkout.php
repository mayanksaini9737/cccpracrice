<?php

class Cart_Block_Checkout extends Core_Block_Template
{

    public function __construct()
    {
        $this->setTemplate('cart/checkout.phtml');
    }

    public function customerAddress()
    {
        $customerId = Mage::getSingleton('core/session')
            ->get('logged_in_customer_id');
        return Mage::getModel('customer/address')
            ->getCollection()->addFieldToFilter('customer_id', $customerId);
    }
    public function getCustomerDetails()
    {
        $customerId = Mage::getSingleton('core/session')
            ->get('logged_in_customer_id');
        return Mage::getModel('customer/customer')->load($customerId);
    }
    public function getAllRegions()
    {
        $regions = [
            1 => "Europe",
            2 => "North America",
            3 => "Asia",
            4 => "Africa",
            5 => "South America",
            6 => "Oceania"
        ];
        return $regions;
    }

    public function getAllCountries()
    {
        $countries = [
            "Europe" => [
                "Germany" => 1,
                "France" => 2,
                "United Kingdom" => 3,
                "Italy" => 4,
                "Spain" => 5
            ],
            "North America" => [
                "United States" => 6,
                "Canada" => 7,
                "Mexico" => 8
            ],
            "Asia" => [
                "China" => 9,
                "India" => 10,
                "Japan" => 11,
                "South Korea" => 12
            ],
            "Africa" => [
                "Nigeria" => 13,
                "South Africa" => 14,
                "Egypt" => 15,
                "Kenya" => 16
            ],
            "South America" => [
                "Brazil" => 17,
                "Argentina" => 18,
                "Colombia" => 19,
                "Peru" => 20
            ],
            "Oceania" => [
                "Australia" => 21,
                "New Zealand" => 22,
                "Fiji" => 23,
                "Papua New Guinea" => 24
            ]
        ];
        return $countries;
    }
}