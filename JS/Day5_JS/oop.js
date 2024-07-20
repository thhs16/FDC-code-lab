    // without oop
    // literal object

    var userOne = {
        name : 'tun tun',
        age : 30,
        email : 'tuntun@gmail.com',
        login() {
            console.log(`login with ${this.email}`);
        }
    }

    let userTwo = {
        name : 'Kyaw Kyaw',
        age : 30,
        email : 'kyawkyaw@gmail.com',
        login() {
            console.log(`login with ${this.email}`);
        }
    }

    let userThree = {
        name : 'Su Su',
        age : 30,
        email : 'susu@gmail.com',
        login() {
            console.log(`login with ${this.email}`);
        }
    }


    class Person{
        constructor(nam, ag, ema){
        this.name = nam;
        this.age = ag;
        this.email = ema;
        }

        login() {
            console.log(`login with ${this.email}`);
    }
    }

    console.log(userOne);
    userOne.login();

    let user1 = new Person('tun tun',30, 'tuntun@gmail.com'); // does not shwo method
    let user2 = new Person('Kyaw Kyaw', 18, 'kyawkyaw@gmail.com');
    let user3 = new Person('Su Su', 20, 'susu@gmail.com');
    console.log(user1);
    user1.login();

    console.log(user2);
    user2.login();

    console.log(user3);
    user3.login();

    // extends (inherit class)

    class Admin extends Person{
        constructor(a,b,c,d){ // for dynamic data
            // this.name = nam; // error
            // this.phone = ph; // error
            super(a,b,c) 
            // declaring parent's properties(variables) 
            // doesn't have to be the same parameter name but places
            // super => parent | sub => child
            this.phone = d;
        }
        score = 0;
        boyName = 'Aung Aung' // for static data
        // static keyword (make it private in object in console, but still can be used with class declaration)
        static girlName = 'Thu Thu'

        greeting (){
            console.log('hello from greeting method');
            return this;
        }

        // static keyword (called with class name) // to protect vital data from heckers (but other more ways are needed to protect)
        static goodMorning(){
            console.log('good moring from Admin class');
        }

        increaseScore(){
            this.score++; // use 'this' keyword to call a variable in the class
            console.log(`Score is now ${this.score}`);
            return this; // this means the class 'Admin'
        }

    }

    let adminOne = new Admin('Hla Hla', 16, 'hlahla@gmail.com', '09888');
    console.log(adminOne);
    console.log(adminOne.name);
    console.log(adminOne.phone);
    adminOne.greeting();
    Admin.goodMorning();
    console.log(adminOne.boyName);
    console.log(Admin.girlName);
    adminOne.increaseScore().greeting().increaseScore();
    console.log(adminOne.score);