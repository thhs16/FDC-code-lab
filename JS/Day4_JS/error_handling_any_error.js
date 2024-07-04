    const name = 'Rola';

    // name = 'thhs'; // error

    // this bulit-in function ensure that the system works even after the error
    // In big project, if an error occurs, the rest code cannot work which can lead to a drain in the big project
    try{
        name = 'thhs';
    }catch(error_message){
        console.log('Error occured =>', error_message );
    }

    console.log( name );

    // Reading error message
    // error_handling_any_error.js:8:14 means error is at line 8, column 14(13 in Vs code -> js file) (different line num if run by live server for html file ==> error line num - 38)