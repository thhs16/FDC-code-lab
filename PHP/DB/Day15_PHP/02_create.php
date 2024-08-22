<?php

    #id     name    age     job     created_at      updated_at

    require_once('./01_db_connection.php');

    # Read => select from where

    $sql = 'select * from datauser where id=? and name=?';

    # PDO first way
    // query fetchall
    // return sth
    // has to fetch this data into PDO::FETCH_ASSOC
    // fetch all for all data not a single row


    // $data = $connection->query($sql)->fetch(PDO::FETCH_ASSOC);
    // $data = $connection->query($sql)->fetchAll(PDO::FETCH_ASSOC);

    // echo '<pre>' ;
    // print_r($data);

    // foreach($data as $item){
    //     // print_r( $item );
    //     echo $item['name'].'<br>';
    // }

    
    #PDO second way
    // prepare execute fetchall
    $data = $connection->prepare($sql);
    $data->execute([1 , 'code laB']); // add ? variable with array here

    
    $data2 = $data->fetchAll(PDO::FETCH_ASSOC);
    
    echo '<pre>';
    print_r($data2);
    