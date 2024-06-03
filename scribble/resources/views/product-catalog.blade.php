<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://kit.fontawesome.com/4d9121ebec.js" crossorigin="anonymous"></script>
    <title>Product Catalog</title>
    <link rel="shortcut icon" href="/images/simple_logo.svg">
    <link rel="stylesheet" href="/css/variable.css">
    <link rel="stylesheet" href="/css/product-catalog.css">
    <script src="/js/product-card.js" defer=""></script>
</head>
<body>
    @include('components/navbar')
    <div class="menu mb-0">
        <ul class="b3 dropdown">
            <li class="dropdown-trigger">
                <a href="#" style="text-decoration:none">Pens</a>
                <ul class="dropdown-content">
                    <li class="b3"><a href="#" style="text-decoration:none">Ballpoint pens</a></li>
                    <li class="b3"><a href="#" style="text-decoration:none">Fountain pens</a></li>
                    <li class="b3"><a href="#" style="text-decoration:none">Marker pens</a></li>
                    <li class="b3"><a href="#" style="text-decoration:none">Specialty pens</a></li>
                </ul>
            </li>
        </ul>
        <ul class="b3 dropdown">
            <li class="dropdown-trigger">
                <a href="#" style="text-decoration:none">Pencils</a>
                <ul class="dropdown-content">
                    <li class="b3"> <a href="#" style="text-decoration:none">Woodcase pencils</a></li>
                    <li class="b3"><a href="#" style="text-decoration:none">Mechanical pencils</a></li>
                    <li class="b3"><a href="#" style="text-decoration:none">Colored pencils</a></li>
                    <li class="b3"><a href="#" style="text-decoration:none">Charcoal pencils</a></li>
                </ul>
            </li>
        </ul>
        <ul class="b3 dropdown">
            <li class="dropdown-trigger">
                <a href="#" style="text-decoration:none">Markers</a>
                <ul class="dropdown-content">
                    <li class="b3"><a href="#" style="text-decoration:none">Permanent markers</a></li>
                    <li class="b3"><a href="#" style="text-decoration:none">Dry erase markers</a></li>
                    <li class="b3"><a href="#" style="text-decoration:none">Highlighters</a></li>
                    <li class="b3"><a href="#" style="text-decoration:none">Paint markers</a></li>
                </ul>
            </li>
        </ul>
        <ul class="b3 dropdown">
            <li class="dropdown-trigger">
                <a href="#" style="text-decoration:none">Books & Papers</a>
                <ul class="dropdown-content">
                    <li class="b3"> <a href="#" style="text-decoration:none">Writing paper</a></li>
                    <li class="b3"><a href="#" style="text-decoration:none">Printing paper</a></li>
                    <li class="b3"><a href="#" style="text-decoration:none">Specialty paper</a></li>
                    <li class="b3"><a href="#" style="text-decoration:none">Sticky notes</a></li>
                    <li class="b3"> <a href="#" style="text-decoration:none">Notebooks</a></li>
                    <li class="b3"><a href="#" style="text-decoration:none">Planners</a></li>
                    <li class="b3"><a href="#" style="text-decoration:none">Sketchbooks</a></li>
                    <li class="b3"><a href="#" style="text-decoration:none">Guestbooks</a></li>
                </ul>
            </li>
        </ul>
        <ul class="b3 dropdown">
            <li class="dropdown-trigger">
                <a href="#" style="text-decoration:none">Cutting Tools</a>
                <ul class="dropdown-content">
                    <li class="b3"> <a href="#" style="text-decoration:none">Scissors</a></li>
                    <li class="b3"><a href="#" style="text-decoration:none">Cutters</a></li>
                    <li class="b3"><a href="#" style="text-decoration:none">Sharpeners</a></li>
                    <li class="b3"><a href="#" style="text-decoration:none">Punch Hole</a></li>
                </ul>
            </li>
        </ul>
        <ul class="b3 dropdown">
            <li class="dropdown-trigger">
                <a href="#" style="text-decoration:none">Sticking Tools</a>
                <ul class="dropdown-content">
                    <li class="b3"><a href="#" style="text-decoration:none">Glue sticks</a></li>
                    <li class="b3"><a href="#" style="text-decoration:none">Liquid glue</a></li>
                    <li class="b3"><a href="#" style="text-decoration:none">Tape</a></li>
                </ul>
            </li>
        </ul>
        <ul class="b3 dropdown">
            <li class="dropdown-trigger">
                <a href="#" style="text-decoration:none">Correcting Tools</a>
                <ul class="dropdown-content">
                    <li class="b3"> <a href="#" style="text-decoration:none">Correction tape</a></li>
                    <li class="b3"><a href="#" style="text-decoration:none">Correction fluid</a></li>
                    <li class="b3"><a href="#" style="text-decoration:none">Erasers</a></li>
                </ul>
            </li>
        </ul>
        <ul class="b3 dropdown">
            <li class="dropdown-trigger">
                <a href="#" style="text-decoration:none">Others</a>
                <ul class="dropdown-content">
                    <li class="b3"> <a href="#" style="text-decoration:none">Pencil Cases</a></li>
                    <li class="b3"><a href="#" style="text-decoration:none">Rulers</a></li>
                    <li class="b3"><a href="#" style="text-decoration:none">Staplers</a></li>
                    <li class="b3"><a href="#" style="text-decoration:none">Organizers</a></li>
                </ul>
            </li>
        </ul>
    </div>
    <div class="content">
        <div class="heading">
            <div class="left-heading">
                <p class="h2">Correcting Tools</p>
                <img src="/icons/chevron-right.svg" alt="right">
                <p class="b1">Correction Tape</p>
            </div>
            <div class="right-heading">
                <div class="b3 dropdown-sort">
                    <div class="sort-btn">
                        <div class="left-part">
                            <img src="/icons/sort.svg" alt="sort">
                            <p class="mb-0 b3" style="display: flex; align-items:center">Sort By</p>
                        </div>
                        <div class="right-part">
                            <img src="/icons/chevron-down.svg" alt="down">
                        </div>
                        <ul class="dropdown-sort-content">
                            <li class="b3"><a href="#" style="text-decoration:none">Top Sales</a></li>
                            <li class="b3"><a  href="#" style="text-decoration:none">Lowest Price</a></li>
                            <li class="b3"><a href="#" style="text-decoration:none">Highest Price</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="products-container">
            @if ($searchTerm && $products->isEmpty())
                <p class="alert alert-warning">{{ $message }}</p>
            @endif

            @if ($products->isNotEmpty())
                    @foreach ($products as $product)
                            @include('components/product-card')
                    @endforeach
            @else
                <p>No products found.</p>
            @endif
            {{-- @foreach ($products as $product)
                @include('components/product-card')
            @endforeach --}}
        </div>
    </div>
    @include('components/footer')
</body>
<script src="/js/product-catalog.js"></script>
</html>
