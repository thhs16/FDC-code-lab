<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator PHP</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
</head>
<body>

    <div class="container">
        <form action="" method="POST" class="">
            <div class="row mt-5 ">
                <div class="col-8 offset-2 shadow-sm p-2">
                    <div class="">
                        <label for="">First Number</label>
                        <input type="text" name="num1" class="form-control ">
                    </div>

                    <div class="">
                        <label for="">Second Number</label>
                        <input type="text" name="num2" class="form-control">
                    </div>

                    <div class="">
                        <label for="">Operator</label>
                        <select name="operator" class="form-control">
                            <option value="plus">+</option>
                            <option value="minus">-</option>
                            <option value="mult">*</option>
                            <option value="divi">/</option>
                        </select>
                    </div>

                    <div class="mt-2">
                        <button type="submit" name="cal_btn" class="btn bg-danger text-white" >Calculate</button>
                        <button type="reset" class="btn bg-dark text-white" >Reset</button>
                    </div>
                </div>
            </div>
        </form>

        <div class="row mt-5">
            <div id="result" class="col-8 offset-2 bg-dark p-4 text-white fs-3">
                0
            </div>
        </div>

    </div>

    <?php
        if( isset( $_POST['cal_btn'] ) ){
            $numOne = $_POST['num1'];
            $numTwo = $_POST['num2'];
            $operator = $_POST['operator'];

            switch($operator){
                case 'plus' : $answer = (int)$numOne + (int)$numTwo; break;
                case 'minus' : $answer = (int)$numOne - (int)$numTwo; break;
                case 'mult' : $answer = (int)$numOne * (int)$numTwo; break;
                case 'divi' : $answer = (int)$numOne / (int)$numTwo; break;
                default : echo 'error';
            }
        }
    ?>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.getElementById("result").innerHTML = "<?php echo $answer; ?>";
        // i used chat gpt 'how to change innerhtml by php'
        // has to put php opening, closing tags and echo to run php variable
    </script>
</html>