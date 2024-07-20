    // must declare type in html file
    import data from './export_import_OOP.js' // Relative references must start with either "/", "./", or "../".

    // console.log(data);
    // console.log(typeof data);

    // console.log(data.user_name);
    // console.log(data.userData.job);

    // let {a, b} = data; // undefined error cuz of the wrong names
    
    let{user_name, userData} = data; // has to be the same names as in object

    console.log(user_name, userData);