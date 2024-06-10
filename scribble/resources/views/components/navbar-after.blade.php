<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Document</title>
    <link rel="shortcut icon" href="/images/simple_logo.svg">
    <link href="/css/variable.css" rel="stylesheet">
</head>
    <body class="antialiased">

    <!--Main Navigation-->
    <header style="box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);">
    <!-- Jumbotron -->
    <div class="p-3 text-center bg-white border-bottom">
        <div class="container">
        <div class="row">
            <!-- Left elements -->
            <div class="col-md-4 d-flex justify-content-center justify-content-md-start mb-3 mb-md-0">
            <a href="#!" class="ms-md-2">
                <img src="/images/Scribble_Logo.png" height="35" />
            </a>
            </div>
            <!-- Left elements -->

            <!-- Center elements -->
            <div class="col-md-4">
                <form class="d-flex input-group w-auto my-auto mb-3 mb-md-0" method="get" action="{{ route("product-catalog") }} ">
                    <input autocomplete="off" type="search" class="form-control b3"  id="search_term" name="search" style="height: 35px; border-radius: 10px 0 0 10px; background-color:#EEF5F6" placeholder="Search" value=""/>
                    <button type="submit" style="background-color: #F2758F; border-radius: 0 10px 10px 0; height: 35px; cursor: pointer; width: 50px; border:none">
                        <img src="/icons/search.png" alt="Search" style="width:50%; padding-top: 5px">
                    </button>
                </form>
            </div>
            <!-- Center elements -->

            <!-- Right elements -->
            <div class="col-md-4 d-flex justify-content-center justify-content-md-end align-items-center">
            <div class="d-flex">
                <!-- Cart -->
                <!-- <a class="text-reset me-3" style="display:flex; align-items: center;" href="#">
                    <img src="/icons/cart.png" style="margin-right: 15px; height: 27px;"/>
                </a> -->
                 <a class="text-reset me-3 position-relative" style="display:flex; align-items: center; justify-content:center;" href="#">
                    <img src="/icons/cart.svg" style="margin-right: 18px; height: 30px;"/>
                    <span class="badge position-absolute" style="background-color: var(--prim-1); color: var(--white); border-style:solid; border-color:var(--prim-1); top: 7px; right: 19px; transform: translate(50%, -50%); border-radius: 50%;">8</span>
                </a>
                <!-- User -->
                <button type="button" class="btn rounded-circle" data-mdb-ripple-init style="width: 35px; height: 35px; display:flex; align-items: center; justify-content: center; background-color: #F2758F; cursor: pointer;">
                    <a href="{{route("profile")}}">
                        <img src="/icons/people.png" alt="" style="width: 18px; height: 20px;">
                    </a>
                </button>
            </div>
            </div>
            <!-- Right elements -->
        </div>
        </div>
    </div>
    <!-- Jumbotron -->
    </header>
    <!--Main Navigation-->


        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
</html>
