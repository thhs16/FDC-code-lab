<?php

    // if
    // if else
    // short hand if
    // short hand if else
    // nested if

    // switch case

    if ( 5 > 3 ) { 
        
        echo 'Have a good day';
        echo '<br>';
    }

    if ( 5 > 3) echo 'Have a good day'; // short handed
    echo '<br>';

    $result = 13 > 5 ? 'greater' : 'less';
    echo $result;
    echo '<br>';

    $expNum = 1;

    switch ($expNum) {
        case 1 : echo 'this is num one'; break;
        case 2 : echo 'this is num two'; break;
        case 3 : echo 'this is num three'; break;
        default : echo 'none';
    }