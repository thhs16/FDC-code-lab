<?php

// echo | print
// var_dump() | print_r() // for array, obj

    $name = 'thhs';
    $arr = [100, 200, 300];

    // echo $arr; //not working because of the keyword
    // print $arr; //not working because of the keyword

    echo '<pre>'; // nothing changes from $name output because it is a simple variable
    var_dump($name);
    print_r($name);

    echo '<pre>'; // to make below array pretty
    var_dump($arr); // var_dump is more specific than print_r; it shows array length and data type
    print_r($arr); // to see arr or obj in the simple way, use print_r

    var_dump($arr[0]);
    print_r($arr[0]); // should use only print_r to generate arr or obj the value