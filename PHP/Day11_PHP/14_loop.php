<?php

    // while
    // do while
    // for
    // for each

    $num = 1;
    while ( $num < 7 ) { // while

        echo $num;
        $num++;
    }



    $num2 = 1;
    do {    // do while

        echo $num2;
        $num2++;
    } while ( $num2 < 7 ) ;
    echo '<br>';


    $i = 1;
    for( $i ; $i <= 10 ; ++$i ) {
        echo $i;
    }
    echo '<br>';


    $num_arr = [100, 200, 300];

    foreach ($num_arr as $item) {
        echo "$item <br>" ;
    }