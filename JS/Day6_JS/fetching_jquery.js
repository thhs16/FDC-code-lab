
    // ajax 
    // get : retrieve data from api
    // post : export data from api

    $(document).ready(function(){

        $('#ajax_btn').click(function(){
            
            // $.get(URL,Type,callback)

            // GET
            try { // other server error

                $.ajax({
                    url : 'https://fakestoreapi.com/products',
                    type : 'GET',
                    success : function(results){
                        console.log(results);
                    }
                
                })
            } catch (e) {

                console.log('error =>',e);
            }
        })
    })
