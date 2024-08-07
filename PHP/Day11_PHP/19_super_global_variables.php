<?php

    // $_SERVER
    // $_GET
    // $_POST
    // $_SESSION
    // $_COOKIE

    // http://localhost:8080?name=sithu&location=pyay
    // API



    # $_GET
    echo "<pre>";
    print_r($_GET); // accessing data from API
    print_r($_GET['name']);
    

    # $_SERVER
    print_r($_SERVER);
    echo $_SERVER['HTTP_HOST'];
    echo '<hr>' . $_SERVER['SCRIPT_NAME'];


        // isset (if there is)
    if ( isset($_GET['name']) ) {

        echo '<hr>' . $_GET['name'];
    } else {

        echo '<hr>'.'There is no data' ;
    }



    if ( isset($_GET['name']) && isset($_GET['location']) ) {

        echo '<hr>' . $_GET['name'] ." ". $_GET['location'];
    } else {

        echo '<hr>'.'There is no data' ;
    }
    