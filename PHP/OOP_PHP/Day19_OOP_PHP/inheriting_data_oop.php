<?php

    require_once('./oop.php');

    class Customer extends User{
        private $user_relation; // can't access from the method

        public function __construct($name , $location){
            // parent::__construct($name , $location);
            // $this->user_relation = $relation;
        }
        
        public function relate($relation){
            $this->$user_relation = $relation;
            return "He is" . $this->$user_relation;
        }
    }

    $customerOne = new Customer('Pa Pa', 'Mandalay'); // need parameter, otherwise error

    // print_r($customerOne);
    print_r($customerOne->relate('My PuKyi KwiKyi'));