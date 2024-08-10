<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Handling</title>
</head>
<body>
    <h1>Form Handling</h1>

    <!-- form -->
    <!-- name attribute has to be unique cuz it is stored in db -->
    <form action="" method="POST" > 
        <!-- use htdocs folder to change page to page -->
        
        name : <input type="text" name="userName" >

        <br><br>

        address : <input type="text" name="userAddress">

        <br><br>
        
        <!-- password : <input type="password" name="userPw"> -->

        <!-- <br><br> -->

        Language :
        <select name="userLang">
            <option value="mm">Myanmar</option>
            <option value="eng">English</option>
            <option value="jp">Japanese</option>
        </select>

        <br><br>


        Skill :
        <input type="checkbox" name="userSkill[]"> HTML
        <input type="checkbox" name="userSkill[]"> CSS
        <input type="checkbox" name="userSkill[]"> JS

        <br><br>

        Gender :
        <input type="radio" name="userGender[]"> Male
        <input type="radio" name="userGender[]"> Female

        <br><br>
        <input type="submit" value="Send" name="submitBtn">
        <input type="reset" value="Reset Data">
    </form>

    <?php 
        // $_SERVER 
        // $_GET(From URL) 
        // $_POST(To URL with Form)

        // http://localhost:8080/20_routes3.php
        
        // http://localhost:8080/20_routes3.php?name=codelab&location=pyay

        // http://localhost:8080/20_routes3.php?userName=thhs&userAddress=tgi

        // echo '<pre>';
        // print_r ($_SERVER); // all the info of the server // route URI data

        // print_r ($_GET); // has to use $_GET if form method is GET
        // echo $_GET['userName'] ;
        // echo $_GET['userAddress'] ;

        // print_r ($_POST); // has to use $_POST if form method is POST
        // echo $_POST['userName'] ;
        // echo $_POST['userAddress'] ;

        if ( isset( $_POST['submitBtn']) ){
            echo '<pre>';

            print_r ($_POST);
            // echo $_POST['userName'] ;
            // echo $_POST['userAddress'] ;
            // echo $_POST['userPw'] ;
            // echo $_POST['userLang'] ;
    
            
        }

        
    ?>
</body>
</html>