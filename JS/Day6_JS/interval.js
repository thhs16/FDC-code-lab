
    // 1000ms => 1s
    // fake time
    let count = 1;
    // setInterval( ()=>{
    //     document.write(`connecting...${count++}<br>`)
    // }, 1000) // infinite loop

    // Real time
    // like fb messenger ''person messaging status'

    setTimeout(()=>{
        let serverRes = [
            {user: 'sithu', email:'sithu@gmail.com'},
            {user: 'kyawkyaw', email:'kyawkyaw@gmail.com'},
            {user: 'tuntun', email:'tuntun@gmail.com'},
            {user: 'hlahla', email:'hlahla@gmail.com'},
        ];

        serverRes.forEach((element)=>{
            document.write(element.user,'&',element.email,'<br>')
        })
    }, 5000); // after 5s it stop