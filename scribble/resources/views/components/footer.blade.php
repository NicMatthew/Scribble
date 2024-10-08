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
    {{-- <hr class="mt-0" style="border-bottom: 1px solid #757575;"> --}}
    <footer class="text-center text-lg-start bg-body-tertiary text-muted mt-2" style="padding-top: 5px; border-top: 1px solid #757575;">
            <section class="">
                <div class="container text-left text-md-start mt-4">
                <div class="row mt-3">
                    <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4 text-center">
                        <a class="navbar-brand mx-auto" href="#">
                            <img src="/images/Scribble_Logo.png" alt="" style="max-width: 150px; height: auto;">
                        </a>
                    </div>

                    <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                    <h6 class="text fw-bold mb-3 b2" style="color: #1C1C1C; font-weight: bold;">
                        Category
                    </h6>
                    <p class="mb-2 b3">
                        <a href="{{ route('product-catalog', ['category' => 'Pens']) }}" class="text-reset half-opacity" style="color: #757575; text-decoration: none">Pens</a>
                    </p>
                    <p class="mb-2 b3">
                        <a href="{{ route('product-catalog', ['category' => 'Pencils']) }}" class="text-reset half-opacity" style="color: #757575; text-decoration: none">Pencils</a>
                    </p>
                    
                    <p class="mb-2 b3">
                        <a href="{{ route('product-catalog', ['category' => 'Markers']) }}" class="text-reset half-opacity" style="color: #757575; text-decoration: none">Markers</a>
                    </p>
                    <p class="mb-2 b3">
                        <a href="{{ route('product-catalog', ['category' => 'Books & Papers']) }}" class="text-reset half-opacity" style="color: #757575; text-decoration: none">Books & Papers</a>
                    </p>
                    <p class="mb-2 b3">
                        <a href="{{ route('product-catalog', ['category' => 'Cutting Tools']) }}" class="text-reset half-opacity" style="color: #757575; text-decoration: none">Cutting Tools</a>
                    </p>
                    <p class="mb-2 b3">
                        <a href="{{ route('product-catalog', ['category' => 'Sticking Tools']) }}" class="text-reset half-opacity" style="color: #757575; text-decoration: none">Sticking Tools</a>
                    </p>
                    <p class="mb-2 b3">
                        <a href="{{ route('product-catalog', ['category' => 'Correcting Tools']) }}" class="text-reset half-opacity" style="color: #757575; text-decoration: none">Correction Tools</a>
                    </p>
                    </div>

                    <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                    <h6 class="text fw-bold mb-3 b2" style="color: #1C1C1C; font-weight: bold;">
                        Company
                    </h6>
                    <p class="mb-2 b3">
                        <a href="/about-us" class="text-reset half-opacity" style="color: #757575; text-decoration: none">About us</a>
                    </p>
                    </div>

                    <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                    <h6 class="text fw-bold mb-3 b2" style="color: #1C1C1C; font-weight: bold;">
                        Guide & Help
                    </h6>
                    <p class="mb-2 b3">
                        <a href="/terms" class="text-reset half-opacity" style="color: #757575; text-decoration: none">Terms & Conditions</a>
                    </p>
                    <p class="mb-2 b3">
                        <a href="/faq" class="text-reset half-opacity" style="color: #757575; text-decoration: none">FAQs</a>
                    </p>
                    
                    </div>

                    <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                    <h6 class="text fw-bold mb-3 b2" style="color: #1C1C1C; font-weight: bold;">
                        Account
                    </h6>
                    <p class="mb-2 b3">
                        <a href="{{ route('profile') }}" class="text-reset half-opacity" style="color: #757575; text-decoration: none">Account Details</a>
                    </p>
                    <p class="mb-2 b3">
                        <a href="{{ route('cart.index') }}" class="text-reset half-opacity" style="color: #757575; text-decoration: none">Cart</a>
                    </p>
                    <p class="mb-2 b3">
                        <a href="/transaction-list" class="text-reset half-opacity" style="color: #757575; text-decoration: none">Transaction List</a>
                    </p>
                    <p class="mb-2 b3">
                        <a href="/wishlist" class="text-reset half-opacity" style="color: #757575; text-decoration: none">Wishlist</a>
                    </p>
                    </div>
                </div>
                </div>
            </section>

            <hr class="mt-3 mb-1" style="border-bottom: 1px solid #757575; width:85%; margin:auto;">

            <div class="text-center pt-3 pb-4 b3" style="color: rgba(117, 117, 117, 0.5);">
                © 2024 Scribble. All Rights reserved
            </div>
        </footer>




    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
