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

    public function getPaymentMethods(){
        $paymentMethods = Sales_Model_Quote::PAYMENT_METHODS;
        return $paymentMethods;
    }

    public function getShippingMethods(){
        $shippingMethods = Sales_Model_Quote::SHIPPING_METHODS;
        return $shippingMethods;
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
            1 => [ // Europe
                "Germany" => 1,
                "France" => 2,
                "United Kingdom" => 3,
                "Italy" => 4,
                "Spain" => 5
            ],
            2 => [ // North America
                "United States" => 6,
                "Canada" => 7,
                "Mexico" => 8
            ],
            3 => [ // Asia
                "China" => 9,
                "India" => 10,
                "Japan" => 11,
                "South Korea" => 12
            ],
            4 => [ // Africa
                "Nigeria" => 13,
                "South Africa" => 14,
                "Egypt" => 15,
                "Kenya" => 16
            ],
            5 => [ // South America
                "Brazil" => 17,
                "Argentina" => 18,
                "Colombia" => 19,
                "Peru" => 20
            ],
            6 => [ // Oceania
                "Australia" => 21,
                "New Zealand" => 22,
                "Fiji" => 23,
                "Papua New Guinea" => 24
            ]
        ];

        return $countries;
    }

    public function getRegionName($key){
        $regions = [
            1 => "Europe",
            2 => "North America",
            3 => "Asia",
            4 => "Africa",
            5 => "South America",
            6 => "Oceania"
        ];
        return $regions[$key];
    }

    public function getCountryName($key){
        $countries = [
                1 => "Germany",
                2=> "France",
                3=> "United Kingdom",
                4=> "Italy",
                5=> "Spain",
                6=> "United States",
                7=> "Canada",
                8=> "Mexico",
                9=> "China",
                10=> "India",
                11=> "Japan",
                12=> "South Korea",
                13=> "Nigeria",
                14=> "South Africa",
                15=> "Egypt",
                16=> "Kenya",
                17=> "Brazil",
                18=> "Argentina",
                19=> "Colombia",
                20=> "Peru",
                21=> "Australia",
                22=> "New Zealand",
                23=> "Fiji",
                24=> "Papua New Guinea"
        ];
        return $countries[$key];
    }
}