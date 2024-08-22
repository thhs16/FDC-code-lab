<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create From Form</title>
</head>
<body>
    <form action="" method="POST">
        <div>
            Name : <input type="text" name="name" value="<?php echo $_POST['name'] ?? ''; ?>">
        </div>
        <div>
            Age : <input type="text" name="age" value="<?php echo $_POST['age'] ?? ''; ?>">
        </div>
        <div>
            Job : <input type="text" name="job" value="<?php echo $_POST['job'] ?? ''; ?>">
        </div>
        <div>
            <input type="submit" value="Submit">
            <input type="reset" value="Reset">
        </div>
    </form>


    <?php 
    
        echo '<pre>';
        print_r ($_SERVER['REQUEST_METHOD']);

        $req = $_SERVER['REQUEST_METHOD'];

        // the same as if( isset( $_POST['send_btn'] ))...
        if( $req == 'POST'){

                require_once('./01_db_connection.php');

            $name = $_POST['name'];
            $age = $_POST['age'];
            $job = $_POST['job'];

            $qry = "insert into datauser (name , age , job) values (?,?,?)";

            $res = $connection->prepare($qry);
            $res->execute([$name, $age , $job]);

            echo 'successfully created';
        }
        // close connection
        unset($res);
    ?>
</body>
</html>