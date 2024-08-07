<?php

    function message (){ // PHP function declaration
        echo 'good moring';
    }
    
    message(); // PHP function callign
    echo '<br>';



    function greeting ($msg = 'hello') { // 'hello' is a default message here
        echo $msg;
    }

    greeting();
    echo '<br>';




    // function sumMyNumbers(...$x) => array
    // keep them as array

    function sumMyNumbers (...$x) {
        $n = 0;
        $len = count($x);
        for ($i = 0; $i < $len; $i++ ) {
            $n += $x[$i];
        }
        return $n;
    }

    $result = sumMyNumbers(5, 2, 3, 4, 5);
    echo $result;