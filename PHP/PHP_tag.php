<?php 

    require_once('');

    echo '<pre>';
    print_r('');


    $sql = "";
    $res = $pdo->prepare($sql);
    $res->execute([]);

    $data = $res->fetchAll(PDO::FETCH_ASSOC);
    
    $data = $res->fetch(PDO::FETCH_ASSOC);
    
?>

    <?php ?>