<?php
    # three class keywords
    // 1) public
    // 2) private
    // 3) protected

    class User{
        // declare property outside the constructor
        public $user_name;
        private $user_location;

        public function __construct($name , $location){
            $this->user_name = $name;
            $this->user_location = $location;
        }

        public function getName(){
            echo "User name is $user_name";
        }

        // getting private property (getter)
        public function getLocation(){
            return $this->user_location;
        }

        // setting private property (setter)
        public function setLocation($location){
            $this->user_location = $location;
        }
    }

    $userOne = new User('rola', 'tgi');
    // $userTwo = new User();
    // $userThree = new User();

    echo '<pre>';
    print_r($userOne);
    print_r($userOne->user_name);
    echo $userOne->getLocation(); // can use echo to display return data
    echo $userOne->setLocation('Mandalay');
    echo $userOne->getLocation();