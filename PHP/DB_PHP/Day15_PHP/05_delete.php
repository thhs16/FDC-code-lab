<?php
    echo '<pre>';
    require_once('./01_db_connection.php');

    $qry = "delete from datauser where id = ?";
    $rp1 = $connection->prepare($qry);
    $rp1->execute([1]);
    
    echo 'delete success';