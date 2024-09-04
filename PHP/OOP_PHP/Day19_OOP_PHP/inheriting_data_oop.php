<?php

    require_once('./oop.php');

    class Customer extends User{
        private $user_relation; // private can't access from the method

        public function __construct($name , $location, $relation){
            parent::__construct($name , $location);
            $this->user_relation = $relation;
            echo "This is from construct" . '<br>';
        }

        public function __destruct(){
            echo "This is from destruct" . '<br>';
        }
        
        public function relate(){
            //  can add data not changing
            return "He is " . $this->user_relation . '<br>'; // can show data from the method - private
        }

        public function getLocation(){
            return "He is from " . $this->user_location . '<br>';
        }
    }

    $customerOne = new Customer('Pa Pa', 'Mandalay', 'My PuKyi KwiKyi'); // need parameter, otherwise error

    // print_r($customerOne);
    // print_r($customerOne->relate());
    // print_r($customerOne->getLocation());

    unset($customerOne);
    print_r($customerOne);
