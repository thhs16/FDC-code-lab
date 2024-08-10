<?php

    echo '<h1>Process Page</h1>';

    echo '<pre>';
    print_r ($_POST); // has to use $_POST if form method is POST
    
    $userN = $_POST['userName'] ;
    $userAdd = $_POST['userAddress'] ;

    // '' also is counted as having data 
    // var_dump ( isset($userN) && isset($userAdd) ); // has to be false
    // var_dump ( isset($_POST['userName']) && isset($_POST['userAddress']) ); // has to be false

    // if ( isset($userN) && isset($userAdd) ) {
    if ( $userN != '' && $userAdd != '' ) {

        echo 'from true condition';
        echo $userN;
        echo $userAdd;
    } else {

        echo 'no data in URL';
    }

    // echo 'hello';

    #testing
    $test ;
    echo isset($test);