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