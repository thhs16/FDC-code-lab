    let sampleObj = {
        name : 'rola',
        town : 'New York',

        // this in arrow function/method (represent the whole domain)
        greet : () => { return this; }, // greet : () => this , // secWay

        // this in original function/method (represent only its object)
        call : function () { return this.town; }
        
    }

    console.log( sampleObj.greet() );
    console.log( sampleObj.call() );

    