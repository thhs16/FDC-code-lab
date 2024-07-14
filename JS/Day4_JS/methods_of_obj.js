
    // filter - obj
    let customer_arr = [
        { name : 'su su', gender : 'female', age : 20, email : 'susu@gmail.com' },
        { name : 'htun htun', gender : 'male', age : 20, email : 'htunhtun@gmail.com' },
        { name : 'hla hla', gender : 'female', age : 20, email : 'hlahla@gmail.com' }
    ]

    let answer = customer_arr.filter( (item) => {
        console.log( item.gender == 'male');
        return item.gender == 'male'; // return true data: object into array // once the statement is true it returns
    })

    console.log(answer);
    console.log(answer[0]);
    console.log(answer[0].name);

    // Map