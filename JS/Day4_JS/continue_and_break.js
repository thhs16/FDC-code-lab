// continue -> stop running the rest codes in the local scope (not loop)
    let customer = [
        { name : 'Kyaw Kyaw', gender : 'male', age : 20, email : 'kyawkyaw@gmail.com' },
        { name : 'su su', gender : 'female', age : 20, email : 'susu@gmail.com' },
        { name : 'htun htun', gender : 'male', age : 20, email : 'htunhtun@gmail.com' },
        { name : 'hla hla', gender : 'female', age : 20, email : 'hlahla@gmail.com' }
    ]

    for(let i = 0; i < customer.length; i++){
        let cus = customer[i];
        // console.log(cus);

        if( cus.gender == 'male'){
            continue;
        }
        
        console.log('sending mails to',cus.email);
    }
    
    // continue can be only used in looping like for and switch
    try{
        console.log( customer[0].age);
        // continue; //continue cannot be declared error

        let greeting = () => {
            console.log(customer[0].gender);
            // continue; //continue cannot be declared error
        }

        if(true){
            // continue; //continue cannot be declared error
        }
    } catch(e) {
        console.log('error');
    }

    // continue in foreach testing

    