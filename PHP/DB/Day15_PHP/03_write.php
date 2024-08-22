<?php

    // data was added two times whenever it is reloaded, but not under htdocs folder

    require_once('./01_db_connection.php');
    
    $qry = "insert into datauser (name, age, job) values (?,?,?)";

    $rp = $connection->prepare($qry);
    $rp->execute(['honey', 18 , 'software developer']);

    $finalRP = $rp->fetchAll(PDO::FETCH_ASSOC);

    echo 'creation success';