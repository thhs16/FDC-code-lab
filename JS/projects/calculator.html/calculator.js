    // this in onclick() attribute return the whole element

    let result = document.getElementById("result");
    let temp = "";

    let insert = (para) => {

        if (para == 'calculate') {
            // console.log('calculating...') // testing
            // console.log(temp); // testing

            let ans = eval(temp);
            console.log( ans ); // eval calculate the whole string
            result.innerHTML = ans;
            temp = ans;
        } else {
            temp += para.innerHTML; // to store all data user click
            result.innerHTML = temp; // to see user's number
        }
    }

    let clearScreen = () => {
        temp = '';
        result.innerHTML = 0;
    }