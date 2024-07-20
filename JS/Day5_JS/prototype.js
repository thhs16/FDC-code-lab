
    // prototype
    console.log(Math);

    function Customer(name,email){
        this.name = name;
        this.email = email;

        this.login = ()=>{
            console.log(`login with ${email}`);
            // console.log(this); // describe the whole class // not like in object
        }

        this.logout = function(){
            console.log(`logout with ${email}`);
            // console.log(this); // describe the whole class
        }
    }

    let customerOne = new Customer('Aung Aung', 'aungaung@gmail.com');
    let customerTwo = new Customer('kyaw kyaw', 'kyawkyaw@gmail.com');

    console.log(typeof Customer); // function //This constructor function may be converted to a class declaration. // alternatives for the class in constructor
    console.log(customerOne);
    customerOne.login();
    customerOne.logout();

    // prototype add a new data: property or method //private
    Customer.prototype.loading = function(){
        console.log(`loading... with email ${this.email}`); // why this.email is aung aung but not kyaw kyaw
    }

    customerOne.loading(); //
    customerTwo.loading();
