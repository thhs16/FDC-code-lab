<?php
        
        #validation
        // all fields are required || done
        // pw and confirmPw have to match || done
        // pw length >6 || done
        // strong pw


        function strongPw_check($passWORD){

            $capital_check = $small_check = $digit_check = $special_check = false;

            $capital_check = preg_match('/[A-Z]/' , $passWORD) ? true : false ;

            $small_check = preg_match('/[a-z]/' , $passWORD) ? true : false ;

            $digit_check = preg_match('/[0-9]/' , $passWORD) ? true : false ;

            $special_check = preg_match('/[!@#$%^&*()_+-?{}<>`]/' , $passWORD) ? true : false ; // can't include this [] / , otherwise false

            // test
            // var_dump ( $capital_check . $small_check . $digit_check . $special_check) ;

            if($capital_check && $small_check && $digit_check && $special_check){
                return true;
            } else {
                return false;
            }
        }

        if ( isset($_POST['submit_btn']) ){
            if ($nameStatus && $emailStatus && $pwStatus && $confirmPwStatus){
                // echo 'ok';

                if ( $_POST['pw'] == $_POST['confirmPw'] ){
                    // echo 'pw same';
                    
                    if( strlen( $_POST['pw'] ) >= 6){
                        // echo 'pw length is alright';
                        if ( strongPw_check( $_POST['pw'] ) ) {
        
                            // storing data
                            session_start();

                            $_SESSION['userdata'] = [
                                'name' => $_POST['name'] ,
                                'email' => $_POST['email'] ,
                                'password' => $_POST['pw'] ,
                                'hash_password' => password_hash( $_POST['pw'], PASSWORD_BCRYPT )
                            ];
                            
                            // echo '<pre>'; // because of <pre> the text in the following echo tag are not quite right
                            // print_r ($_SESSION);

                            echo "<div class='container mt-3'>
                            <div class='alert alert-success alert-warning alert-dismissible fade show' role='alert'>
                                Registeration Success
                                <br><strong>Name</strong> {$_SESSION['userdata']['name']} <!-- pls use curly bracket and double quote for the string -->
                                <br><strong>Email</strong> {$_SESSION['userdata']['email']} <!-- pls use curly bracket and double quote for the string -->
                                <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                            </div>
                        </div>";
                        } else {
                            echo "<div class='container mt-3'>
                            <div class='alert alert-danger alert-warning alert-dismissible fade show' role='alert'>
                                Not a strong password.
                                <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                            </div>
                        </div>";
                        }
                    } else {
                        echo "<div class='container mt-3'>
                        <div class='alert alert-danger alert-warning alert-dismissible fade show' role='alert'>
                            Password's length should be 6.
                            <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                        </div>
                    </div>";
                    }
                } else {
                    echo "<div class='container mt-3'>
                    <div class='alert alert-danger alert-warning alert-dismissible fade show' role='alert'>
                        Passwords are not matching.
                        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                    </div>
                </div>";
                }
            } else {
                echo "<div class='container mt-3'>
                        <div class='alert alert-danger alert-warning alert-dismissible fade show' role='alert'>
                            All fields are required.
                            <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                        </div>
                    </div>";
            }
        }
    