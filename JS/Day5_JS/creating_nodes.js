
    // create element
    let newEle = document.createElement('h3');
    
    // create text node
    let newTextNode = document.createTextNode('This is Dom append');

    let container = document.getElementById('container');

    // append ; adding text to the new element // append add data in between
    newEle.append(newTextNode);
    console.log(newEle);
    
    container.append(newEle);