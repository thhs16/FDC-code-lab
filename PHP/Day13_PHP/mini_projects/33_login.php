<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
        <?php 
            session_start();    
        ?>



        <form action="" method="POST">
            Email : <input type="email" name="login_email">
            Password : <input type="password" name="login_pw">
            <input type="submit" name="login_btn" value="login">
            <input type="reset">
        </form>




        <?php 

            // $_SESSION['userdata'] = [
            //     'name' => $_POST['name'] ,
            //     'email' => $_POST['email'] ,
            //     'password' => $_POST['pw'] ,
            //     'hash_password' => password_hash( $_POST['pw'], PASSWORD_BCRYPT )
            // ];

            if( isset(  $_POST['login_btn']  ) ) {
                if ( $_POST['login_email'] == $_SESSION['userdata']['email'])  {

                    if ( password_verify($_POST['login_pw'] , $_SESSION['userdata']['hash_password'])){
                        echo 'login success';
                    } else {
                        echo 'login fail';
                    }
                    
                } else {
                    echo 'You have to register first.';
                }
            }
        ?>
</body>
</html>