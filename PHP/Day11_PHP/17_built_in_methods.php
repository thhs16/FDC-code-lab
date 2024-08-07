<?php

    // string method
    // math method
    // array method
    // date method

    $x = 'hello world';
    #slicing strings
    echo substr($x, 6, 5); // positive => start
    echo $x;
    echo substr($x, -6, 5); // negative => end
    echo '<br>';
    
    #array length
    // count()

    #decimal to full num
    echo round(5.666); // 6
    echo '<br>';

    #random number
    echo rand(1,1000); // within 1 and 1000
    echo '<br>';

    #sorting array
    $arr1 = ['a', 'd', 'z', 'c' ]; // a to z
    sort($arr1);

    echo '<pre>';
    print_r ( $arr1 ); // only var_dump & print_r

    #date
    $current_date = date('d-m-Y');
    $current_date_chg = date('Y-m-d');

    echo date_default_timezone_get(); // Europe/Berlin
    date_default_timezone_set("Asia/Yangon");
    $current_time = date('h:i:s');

    echo '<pre>';
    echo $current_date;
    echo '<br>';
    echo $current_date_chg;
    echo '<br>';
    
    echo '<br>';
    echo $current_time;
    echo '<br>';

    #update date (fixed syntax, has to memorise)
    $update_date = strtotime( "+5days" , strtotime($current_date));
    echo $update_date; //1723138200
    echo '<br>';
    echo date("d/m/Y", $update_date); // 09/08/2024
