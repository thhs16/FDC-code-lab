    let clkMeBtn = document.getElementById("clickMeBtn");
    let dbClk = document.getElementById("dbClk");
    let mouDwnUP = document.getElementById("mouseDwnUp");
    let userInput = document.getElementsByTagName('input')

    // click event
    function greeting () {
        alert('hello world')
    }

    clkMeBtn.addEventListener( 'click', function(){
        alert('hello world by addEventListener');
    })

    // double clk
    dbClk.addEventListener('dblclick', () => {
        dbClk.style.backgroundColor = 'red';
    })

    // mouseDown
    // mouDwnUP.addEventListener('mousedown', () => {
        // mouDwnUP.innerHTML = 'U are at mouseDown';
        // console.log('from mouseDwn');
    // })
    // mouseUp
    mouDwnUP.addEventListener('mouseUp', () => { // this is not working
        mouDwnUP.innerHTML = 'U are at mouseUp'
        console.log('from mouseUp');
    })
    // mouseOver
    // mouseOut

    // input
    console.log(userInput);
    console.log(userInput[0]);
    userInput[0].addEventListener( 'input', () => {
        // changing Upper Case
        console.log(userInput[0].value);
        userInput[0].value = userInput[0].value.toUpperCase();
    })
