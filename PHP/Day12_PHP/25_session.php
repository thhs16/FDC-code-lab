<?php
    
    echo '<h1>Session Lesson</h1>' . '<hr>';
    session_start();

    $_SESSION['name'] = 'testing';
    
    echo '<pre>';
    print_r( $_SESSION); // can output cuz of Arr + string
    print_r( '<br>' . $_SESSION['name']); // this is okay cuz of string + string