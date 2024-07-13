    // map (parameter == function)
    
    let num = [ 2, 4, 5, 3, 6, 1, 9];

    let result = num.map((item, index, ary ) => item < 4 ); // item == element

    console.log(result); // return true false

    console.log(num);

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

    console.log(output); // return true data

    // find
    let output2 = num.find( (element) => element <= 5); 

    console.log(output2); // return true data once (the very first true data)
