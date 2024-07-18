    let dateText = document.getElementById("dateText");
    
    // full date
    console.log(Date());

    let tdyDate = new Date();
    console.log(tdyDate);

    // date
    // console.log( Date().getDate() ); // I dunno why I can't write like this
    let date = tdyDate.getDate();
    console.log( date );

    // month
    console.log( tdyDate.getMonth() ); // current date -1
    let mon = tdyDate.getMonth() + 1
    console.log( mon );

    // year
    let yr = tdyDate.getFullYear();
    console.log( yr );

    // day
    let day = tdyDate.getDay();
    console.log( day );

    dateText.innerHTML = `Today date is ${date}/${mon}/${yr}`;
