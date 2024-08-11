<?php

    $password = 'code lab';

    // one way
    $hashPW = password_hash($password , PASSWORD_BCRYPT); // return hashed data

    echo '<pre>';
    echo $password;
    echo $hashPW;