    // adding array 1
    let arr = [1,2,3];
    let arr2 = [5,6,7];
    
    let arr3 = [...arr , ...arr2];
    console.log(arr3);

    // adding array 2
    let arr3_2 = arr.concat(arr2);
    console.log(arr3_2);
    
    // cloning array 1
    let copy_arr = [...arr];

    console.log(copy_arr);
    
    copy_arr[3] = 4;

    console.log(copy_arr);
    console.log(arr);

    // cloning array 2
    let copy_arr_2 = [].concat(arr);

    console.log(copy_arr_2);
    console.log(arr);

    // cloning object 1
    let obj = {
        userName : 'Rola',
        userJob : 'programmer'
    }

    let copy_obj = Object.assign(obj);
    let copy_2_obj = Object.assign({},obj); // The output is the same as above object.
    console.log(copy_obj);
    console.log(copy_2_obj);

    // cloning object 2
    let copy_3_obj = {...obj}; // ES6
    console.log(copy_3_obj);