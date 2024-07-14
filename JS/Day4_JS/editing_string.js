
    // trim (delete first and last space)
    let expStr = "          Mg Mg Aye   " ;

    console.log( 'expStr =>', expStr);

    expStr = expStr.trim(); // the text in the parameter of 'trim' does not affect the function

    console.log( 'trim =>', expStr);

    // tofixed (indicating decimals places)
    let expNum = 8.999999; 
    let price = 1.424333;
    let newExpNum = expNum.toFixed(3);
    let newPrice = price.toFixed(3);
    console.log(newExpNum); // use number after indicated decimal place to upgrade the last indicated decimal place
    console.log(newPrice);

    // lowercase & uppercase
    let user_fb_name = 'rola';
    let new_fb_name = user_fb_name.toUpperCase();
    console.log(new_fb_name);

    let lower_new_fb_name = user_fb_name.toLowerCase();
    console.log(lower_new_fb_name);

    // substring // its function & where it is used?
    let user_name = 'Si Thu'; // [0]-S, [1]-i
    let new_user_name = user_name.substring(3,6);
    console.log(new_user_name);

    // split (return string array)
    let my_name = 'rola';
    let my_new_name = my_name.split('o'); // 'o' will not include in the returned text
    console.log(my_new_name); //
    console.log(my_new_name[1], my_new_name[1]);