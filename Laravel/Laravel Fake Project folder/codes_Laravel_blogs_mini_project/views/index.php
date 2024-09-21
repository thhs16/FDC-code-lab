<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- bootstrap css link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
        <!-- <i class=" fa fa-user text-danger" ></i> -->
        <div class="container m-5">
            <div class="row">
                <!-- Start of the Form -->
                <div class="col-4">
                    <form action="" method="post" enctype="multipart/formdata">

                        <img src="" class="w-100" id="output" class="img-thumbnail">
                        <input type="file" name="image" class="form-control mb-2" onchange="loadFile(event)">
                        <input type="text" name="title" class="form-control mb-2" placeholder="Enter Blogs Title">
                        <textarea name="description" class="form-control mb-2" cols="30" rows="10">Enter blogs description</textarea>
                        <input type="number" name="number" class="form-control mb-2" placeholder="Enter Blog Fee...">
                        <input type="text" name="address" class="form-control mb-2" placeholder="Enter Blog Address...">
                        <select name="rating" id="" class=" form-control mb-2">
                            <option value="">Choose Rating...</option>
                            <option value="1">1 stars</option>
                            <option value="2">2 stars</option>
                            <option value="3">3 stars</option>
                            <option value="4">4 stars</option>
                            <option value="5">5 stars</option>
                        </select>
                        <input type="submit" value="Create" class="btn btn-danger">
                    </form>
                </div>
                <!-- End of the Form -->

                <!-- Start of the Blogs' display -->
                <div class="col">
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <div class="d-flex justify-content-between">
                                <div class="">This is title</div>
                                <div class="">5/4/2024</div>
                            </div>
                            <div class="d-flex">
                                <div class=""> 
                                    <!-- i don't know whether adding d-flex in the above div could change their display -->
                                <i class="fa-solid fa-money-bill"></i>
                                <i class="fa-solid fa-location-dot"></i>
                                <i class="fa-solid fa-star"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End of the Blogs' display -->
            </div>
        </div>


</body>
<!-- Bootstrap js link -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<!-- fontawesome inclusive link  -->
<script src="https://kit.fontawesome.com/905758c01a.js" crossorigin="anonymous"></script>
        <script>
            function loadFile(event){
                var reader = new FileReader();

                reader.readAsDataURL(event.target.files[0]);

                reader.onload = function (){
                    var output = document.getElementById('output');
                    output.src = reader.result;
                    // output.classList.add("mb-2"); // this works
                }
            }
        </script>
</html>
