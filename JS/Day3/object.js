    // first way
    let obj = {
        name : 'rola',
        location : 'New York',
        greeting : () => "hello",
        fruits : [ 'apple', 'mango']
    }

        // dot output
    console.log( obj.location );

        // square bracket output
    console.log( obj['name'] ); // bracket with string typed variable

    
    console.log( obj.greeting() );

    console.log( obj.fruits[0] );

    obj.fruits.forEach(element => {
        console.log(element);
    });

    // Sec way
    let secObj = new Object();

    secObj.color = 'red';
    secObj.opacity = 0.5;

    console.log(secObj);

    // Obj destructuring
    let sample_obj = { // allow int, string, funtions/methods
        userName : 'Rola',
        userTown : 'New York'
    }

    let name = sample_obj.userName;
    let town = sample_obj.userTown;

    console.log( name , town );

    // Shortcut ( The system finds the same key and put the value in it, not order oriented like Array )
    
    // let { userName , userTown } = sample_obj; // the same
    let { userTown , userName } = sample_obj; // the same
    console.log(userName , userTown);

    // can rewrite
    sample_obj.userName = 'THHS';
    console.log(sample_obj.userName);