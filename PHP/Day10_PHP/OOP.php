<?php

    class Car {

        public $color;
        public $model;

        public function __construct($color, $model) {
            $this->color = $color;
            $this->model = $model;
        }
        public function message() {
            return "My car is a" . $color . " " . $this-> model . "!";
        }
    }

    $myCar = new Car('white', 'Mark X Toyota');
    var_dump($myCar);
    print_r($myCar);