<?php

    require_once('./01_db_connection.php');

    $sql = "update datauser set name=? , age = ? , job = ?  where id=? ";
    
    $rp = $connection->prepare($sql);
    $rp->execute(['code lab update' , 100 , 'doctor' , 1]);

    $rp2 = $rp->fetch(PDO::FETCH_ASSOC);