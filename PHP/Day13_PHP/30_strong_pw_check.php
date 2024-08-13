<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strong Password</title>
</head>
<body>
    <form action="" method="POST">
        <input type="text" name="password">
        <input type="submit" value="check password" name="check_btn">
    </form>

    <?php 
        // strong password 
        // A-Z      a-z     0-9     #$@!    6>

        if( isset($_POST['check_btn']) ){

            // echo 'it works';
            
            // $result = preg_match('/[A-Z]/', $_POST['password']); // capital letter presense test
            // var_dump ($result); // int(0)

            // if($result){
            //     echo 'password match(capital)';
            // } else {
            //     echo 'error';
            // }
            $capital_check = $small_check = $digit_check = $special_check = false;

            $capital_check = preg_match('/[A-Z]/' , $_POST['password']) ? true : false ;

            $small_check = preg_match('/[a-z]/' , $_POST['password']) ? true : false ;

            $digit_check = preg_match('/[0-9]/' , $_POST['password']) ? true : false ;

            $special_check = preg_match('/[!@#$%^&*()_+-?{}<>`]/' , $_POST['password']) ? true : false ; // can't include this [] / , otherwise false

            // test
            // var_dump ( $capital_check . $small_check . $digit_check . $special_check) ;

            if($capital_check && $small_check && $digit_check && $special_check){
                echo '<h3 style="color:green">Strong Password</h3>';
            } else {
                echo '<h3 style="color:red">Weak Password</h3>';
            }
            
        }
    ?>
</body>
</html>