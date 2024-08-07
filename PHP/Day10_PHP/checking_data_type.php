<?php

    # for integer
    //is_int()
    //is_integer() // the same as above
    //is_long() // the same as above

    $x = 1234;
    $flo = 3.333;

    var_dump(is_int($x)); //bool(true)
    var_dump(is_integer($x)); //bool(true)
    var_dump(is_long($x)); //bool(true)

    var_dump(is_int($flo)); //bool(true)
    var_dump(is_integer($flo)); //bool(true)
    var_dump(is_long($flo)); //bool(true)

    echo '<br>';

    #float
    // is_float()
    // is_double()
    
    var_dump(is_float($x)); //bool(true)
    var_dump(is_double($x)); //bool(true)

    var_dump(is_float($flo)); //bool(true)
    var_dump(is_double($flo)); //bool(true)

    #infinity
    // is_finite()
    // is_infinite()

    #NaN
    // is_nan()

    #Number Strings
    // is_numeric()