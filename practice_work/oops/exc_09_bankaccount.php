<?php 
    class BankAccount{
        private $accountNumber;
        private $accountHolder;
        private $balance;

        public function __construct($accountNumber, $accountHolder, $initialbalance ){
            $this->accountNumber = $accountNumber;
            $this->accountHolder = $accountHolder;
            $this->balance = $initialbalance;
        }

        public function deposit($amount){
            $this->balance += $amount; 
        }

        public function withdraw($amount){
            if ($amount <= $this->balance){
                $this->balance -= $amount;
            } else{
                echo "Insufficient funds for withdraw";
            }
        }
        
        public function displayInfo(){
            echo "Account Number: {$this->accountNumber}, Account Holder: {$this->accountHolder}, Balance: {$this->balance} USD";
        }
    }

    $shivam = new BankAccount("38929834", "Shivam Tripathi", 2000);

    // $shivam->withdraw(2001);
    $shivam->withdraw(500);
    $shivam->deposit(1000);
    $shivam->displayInfo();
?>