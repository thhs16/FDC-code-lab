    let num1 = document.getElementById('firstNum');
    let num2 = document.getElementById('secNum');
    let operator = document.getElementById('operator');
    let btnCalculate = document.getElementsByTagName('input');
    let result = document.getElementsByTagName('h1');

    // console.log(btnCalculate); // test

    btnCalculate[2].addEventListener('click' , () => {
        // alert('click'); // test
        // console.log(num1.value, num2.value, operator.value);

        num1 = parseInt(num1.value);
        // num2 = num2.value; // string although the input type is number
        num2 = parseInt(num2.value);
        // console.log(operator.value);
        user_operator = operator.value;

        // console.log(operator);
        // console.log( typeof num1);
        // console.log( typeof num2);
        switch(user_operator){
            case 'plus' : data = num1 + num2; break;
            case 'minus' : data = num1 - num2; break;
            case 'multiply' : data = num1 * num2; break;
            case 'division' : data = num1 / num2;console.log(num1/num2); break;
            default : data = 0; break;
        }

        console.log(data);
        
        // if ( data != 'undefined'){
        result[0].innerHTML = `Result : ${data} `;
        // }else{
            // result[0].innerHTML = result[0].innerHTML;
        // }

        // location.reload; // not working
        console.log(num1);
        num1.value = '';
        num2.value = '';
        data = ''
        
    })