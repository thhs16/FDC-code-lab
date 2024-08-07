<?php

    #Arithmetic Operator
    // +
    // -
    // *
    // /
    // % (modulus: remainder)
    // ** (exponent: power)

    $num1 = 10;
    $num2 = 2;

    echo $num1 ** $num2; // 10 ^ 2
    echo '<br>';



    #Assignment operator
    // =
    // += | .=
    // -=
    // *=
    // /=
    // %=

    $num3 = 20;
    
    $num3 %= 4; // $num3 = $num3 % 4;

    echo $num3;
    echo '<br>';


    #Comparison Operator
    // ==
    // ===
    // !=
    // !==
    // <>       //$x <> $y	Returns true if $x is not equal to $y
    // <
    // >
    // <=
    // >=
    // <=> // spaceship     // returns 0 if both variables are equal, right is greater => 1, left is greater => -1

    $num4 = '2';

    // 10 & '2' // var_dump is the most convinent
    echo $num1 == $num2; // no output cus of 0
    print ($num1 == $num2); // no output cus of 0
    var_dump ($num1 == $num2);
    print_r ($num1 == $num2); // no output cus of 0
    echo 'hello 1';
    echo '<br>';

    // 2 & '2'
    echo $num2 == $num4; // 0 false
    print ($num2 == $num4); // 0 false
    var_dump ($num2 == $num4); // bool(true)
    print_r ($num2 == $num4); // 0 false // the same as print
    echo 'hello 2';
    echo '<br>';

    // 2 & '2'
    echo $num2 === $num4; // 0 false(no output)
    print ($num2 === $num4); // 0 false(no output)
    var_dump ($num2 === $num4); // bool(false)
    print_r ($num2 === $num4); // 0 false(no output) // the same as print
    echo 'hello 3';
    echo '<br>';

    echo $num1 <=> $num2; // 10 & 2     // 1
    echo '<br>';
    echo $num2 <=> $num4; // 2 & '2'    // 0
    echo '<br>';
    echo $num2 <=> $num1; // 2 & 10     // -1
    echo '<br>';


    #PHP increment/ decrement operators
    // ++$x     pre-increment (operation , working)
    // $x++     post-increment (working, operation)
    // --$x     pre-decrement
    // $x--     post-decrement


    #PHP logical Operators
    // and  &&
    // or   ||
    // xor      /* both side can't together be true */
    // !

    echo 'logical operators';
    echo true xor true; // no output cuz of 0(false)
    echo false xor true; // 1
    echo '<br>';



    #PHP strings Operators
    // .    // concatenation
    // .=   // concatenation assignment(append)



    #PHP Array Operators
    #The PHP array operators are used to compare arrays.
    // +
    // == Returns true if $x and $y have the same key/value pairs
    // === Returns true if $x and $y have the same key/value pairs in the same order and of the same types
    // !=
    // <>
    // !==

    $arr1 = [100, 300, 500]; // different key
    $arr2 = [600, 500, 100]; // different key
    $arr3 = ['600', 500, 100]; // different type

    echo $arr1 == $arr2; // no output cuz of 0 (false)
    echo '<br>';
    var_dump($arr1 == $arr2); // bool(false)
    echo '<br>';
    var_dump($arr3 == $arr2); // bool(true) // $arr2 and $arr3 are the same
    echo '<br>';
    var_dump ($arr3 === $arr3); // bool(true)
    echo '<br>';


    # PHP conditional assignment operator
    // ?
    // ??

    $login_status = true;

    echo $login_status ? 'true this works' : 'false this works' ;
    echo '<br>';

    $userName ;
    
    $result = $userName ?? 'hello'; // if userName has no value, default 'hello' will be displayed

    echo $result;