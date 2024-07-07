    // cloning array
    let arr = [1,2,3];
    
    let copy_arr = [...arr];

    console.log(copy_arr);
    
    copy_arr[3] = 4;

    console.log(copy_arr);
    console.log(arr);

    // cloning object
    let 