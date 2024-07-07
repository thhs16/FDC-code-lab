// continue -> stop running the rest codes in the local scope (not loop)
// continue is hard
// break in if conditional statement
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
    
    // continue can be only used in looping like for and switch (cannot even used in try_catch)
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

    // continue in foreach testing (continue does not work in foreach looping)
    customer.forEach(element => {
        console.log('testing foreach');
        console.log(element);

        if( element.gender == 'male'){
            // continue; //SyntaxError: Illegal continue statement: no surrounding iteration statement
        }

        console.log('sending mail to', element.email);
    });

    // continue in switch testing
    console.log( 'continue in switch testing');
    for(let i = 0; i < customer.length; i++){
        let cus = customer[i];

        switch(cus.gender){

        case 'male':console.log('hello from switch'); continue; // break this only looping
        case 'male':console.log('hello2 from switch case 2');
        }

        console.log('sending mails to',cus.email);
    }

    