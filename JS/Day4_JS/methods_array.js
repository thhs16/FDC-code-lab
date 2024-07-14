    // map (parameter == function)
    
    let num = [ 2, 4, 5, 3, 6, 1, 9];

    let result = num.map((item, index, ary ) => item < 4 ); // item == element

    console.log(result); // return true false

    console.log(num); 

    // map (change to array values)

    let newNum = num.map((item, index, ary ) => item * 3 );
    console.log(newNum);

    // forEach like map // error
    let newNum2 = [];
    console.log(newNum2);
    newNum2 = num.forEach((item, index, ary ) => item * 3 ); // can't do like map
    console.log(newNum2);

    // forEach
    let copy_arr = [...num];
        num.forEach( (item, index, ary) => {
        // item * 10; // wrong declaration
        // item *= 10; // only item(element) value changed
        console.log(item);

        copy_arr[index] = item * 10;
        
    });
    
    console.log('copy_arr',copy_arr);

    // filter

    let output = num.filter( (element) => element <= 5); // what if no return like console.log

    console.log(output); // return true data with array

    // find
    let output2 = num.find( (element) => element <= 5); 

    console.log(output2); // return true data once (the very first true data)

    // some - value exist or not (or keyword)
    let output3 = num.some( (element) => element >= 1);

    console.log(output3);

    // every (and keyword)
    let every = num.every( (element) => element <= 9); // every arr value is less than or equal to 9.

    console.log(every);

    // include (same as 'some' but different syntax)
    let include = num.includes(103);

    console.log(include);