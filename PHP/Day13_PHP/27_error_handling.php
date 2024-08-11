<?php

    function division($num1, $num2){

        // echo $num1 / $num2;

        // try{
            if($num2 == 0){
                throw new Exception('division by zero...');
            } else {
                echo $num1 / $num2;
            }
        
        // }catch(Exception $e){
        
            // echo '<br>' . $e;
        
            // }

    }
    
    echo '<pre>';
    // division(10,10);
    division(10,0); // error

    echo '<br>' . 'hello';