    // rest parameters
    
    let showingNum = (num1, num2, ...moreData) => {
        console.log(num1);
        console.log(num2);
        console.log(...moreData); // output => "data  + data + data+ etc."
        console.log(moreData); // single data => simple way // many data => array
        
        moreData.forEach(element => {
            console.log(element);
        });

    }

    showingNum( 100, 200, 300, 400, 500, 600, 700)