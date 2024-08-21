<?php
    # server name || username(Only MAPP) || password(Only MAPP)

    # http://localhost/phpmyadmin/index.php?route=/sql&db=fdc&table=student&pos=0

    // root is default username for XAMPP and empty string for no password
    try{
    $connection = new PDO("mysql:host=localhost;dbname=fdc;" , 'root' , '');
    // echo 'connection success';
    } catch(PDOException $error) {
        echo '<pre>';
        // echo 'connection fail' . $error;

        /*more precise error message*/
        echo 'connection fail' . $error->getMessage();
    }
    // for MAPP
    // $connection = new PDO("mysql:host=localhost;port=8888;dbname=fdc");
