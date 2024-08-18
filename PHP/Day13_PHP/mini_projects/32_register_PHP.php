<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
    <?php // this can't change order
        // echo '<pre>'; // ruin the design of the form
        $nameStatus = $emailStatus = $pwStatus = $confirmPwStatus = false;
    ?>

    <div class="container">
        <div class="card mt-4">

            <div class="card-header bg-dark text-white">
                <h3>Registeration Form</h3>
            </div>

            <div class="card-body">
                <form action="" method="POST">
                    <div class=""> <!-- pls add form value in class later to test -->
                        <div class="row">
                            <div class="col-8 offset-2">

                                <div class="">
                                    <label for="">Name</label>
                                    <input type="text" name="name" class="form-control">
                                    <?php
                                        if ( isset($_POST['submit_btn']) ) {
                                            $nameStatus = $_POST['name'] == "" ? false : true ;
                                            echo $nameStatus ? "" : "<small class='text-danger'>*Required</small>";
                                        }
                                    ?>
                                </div>

                                <div class="">
                                    <label for="">Email</label>
                                    <input type="email" name="email" class="form-control">
                                    <?php
                                        if ( isset($_POST['submit_btn']) ) {
                                            $emailStatus = $_POST['email'] == "" ? false : true ;
                                            echo $emailStatus ? "" : "<small class='text-danger'>*Required</small>";
                                        }
                                    ?>
                                </div>

                                <div class="">
                                    <label for="">Password</label>
                                    <input type="password" name="pw" class="form-control">
                                    <?php
                                        if ( isset($_POST['submit_btn']) ) {
                                            $pwStatus = $_POST['pw'] == "" ? false : true ;
                                            echo $pwStatus ? "" : "<small class='text-danger'>*Required</small>";
                                        }
                                    ?>
                                </div>

                                <div class="">
                                    <label for="">Confirm Password</label>
                                    <input type="password" name="confirmPw" class="form-control">
                                    <?php
                                        if ( isset($_POST['submit_btn']) ) {
                                            $confirmPwStatus = $_POST['confirmPw'] == "" ? false : true ;
                                            echo $confirmPwStatus ? "" : "<small class='text-danger'>*Required</small>";
                                        }
                                    ?>
                                </div>

                                <div class="mt-3">
                                    <button name="submit_btn" class="btn bg-dark text-white">Register</button>
                                    <button type="reset" class="btn bg-danger text-white">Reset</button>
                                </div>

                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <?php 
        require_once('./32_register2_PHP.php')
    ?>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</html>