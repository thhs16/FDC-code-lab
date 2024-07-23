
    // https://cdnjs.com/

    console.log('hello from js fle');

    $(document).ready(function(){

        // jQuery code
        console.log('this is'); 
        $('button').click(function(){ //error
            alert('hello')
            $('p').hide(); // style.display = 'none'
        })
    })