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
            <a href="/" class="ms-md-2">
                <img src="/images/Scribble_Logo.png" height="35" "/>
            </a>
            </div>
            <style>
                a.ms-md-2 img:hover {
                    opacity: 0.7;
                }
                </style>
            <!-- Left elements -->

            <!-- Center elements -->
            <div class="col-md-4">
                <form class="d-flex input-group w-auto my-auto mb-3 mb-md-0" method="get" action="{{ route("product-catalog") }}">
                    <input autocomplete="off" type="search" class="form-control b3"  id="search_term" name="search" style="height: 35px; border-radius: 10px 0 0 10px; background-color:#EEF5F6" placeholder="Search" value="{{ $search ?? '' }}"/>
                    <button type="submit" style="background-color: #F2758F; border-radius: 0 10px 10px 0; height: 35px; cursor: pointer; width: 50px; border:none; outline:none">
                        <img src="/icons/search.png" alt="Search" style="width:48%; padding-top: 1px">
                    </button>
                </form>
            </div>
            <!-- Center elements -->

            <!-- Right elements -->
            <div class="col-md-4 d-flex justify-content-center justify-content-md-end align-items-center">
            <div class="d-flex">
                <a class="btn text-white b3" data-mdb-ripple-init style="background-color: #F2758F; border-radius: 10px; height: 35px; display: flex; align-items: center;" href="{{route("sign-in")}}" role="button">
                <img src="/icons/people.png" alt="" style="width: 18px; height: 20px; margin-right: 8px; font-weight:bold">
                Sign Up
                </a>
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
