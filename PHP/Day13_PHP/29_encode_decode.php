<?php

    echo '<pre>';

    // json encode
    // json decode

    $user_data = [
        'name' => 'sithu',
        'age' => '27',
        'job' => 'programmer'
    ];

    print_r($user_data);

    $json_userData = json_encode($user_data); // array => json

    print_r($json_userData);

    $original_userData = json_decode($json_userData);

    echo '<br>';
    print_r($original_userData);

    echo $user_data['name'];

    echo $original_userData->name;
    // echo $json_userData->name; // error #can't directly access data from Json