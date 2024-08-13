<?php

    $password = 'code lab';

    // one way
    $hashPW = password_hash($password , PASSWORD_BCRYPT); // return hashed data

    echo '<pre>';
    // echo $password;
    // echo $hashPW;

    $hashPW2 = '$2y$10$8F5ei6i5w9gupHZNoJcm5..dWWijm3lmQP12g.btMSO91j.5dWDeC'; // fixed hash pw

    // echo '2' . $hashPW2;


    // echo '<br>';

    if( password_verify( $password , $hashPW2)){
        echo 'same password';
    } else {
        echo 'wrong password';
    }