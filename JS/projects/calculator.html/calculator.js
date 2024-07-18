    // this in onclick() attribute return the whole element

    let result = document.getElementById("result");
    let temp = "";
    let insert = (para) => {

        if (para == calculate) {
            console.log('calculating...')
            console.log(temp);
        } else {
            temp += para.inner
        }
    }