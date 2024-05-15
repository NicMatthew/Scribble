<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://kit.fontawesome.com/4d9121ebec.js" crossorigin="anonymous"></script>
    <title>Product Catalog</title>
    <link rel="stylesheet" href="/css/variable.css">
    <link rel="stylesheet" href="/css/product-catalog.css">
</head>
<body>
    @include('components/navbar')
    <div class="menu mb-0">
        <ul class="b3 dropdown">
            <li class="dropdown-trigger">
                <a href="#" style="text-decoration:none">Pens</a>
                <ul class="dropdown-content">
                    <li class="b3"><a href="#" style="text-decoration:none">Ballpoint pens (gel pens, rollerball pens)</a></li>
                    <li class="b3"><a href="#" style="text-decoration:none">Fountain pens (cartridge, bottled ink)</a></li>
                    <li class="b3"><a href="#" style="text-decoration:none">Marker pens (permanent, highlighters)</a></li>
                    <li class="b3"><a href="#" style="text-decoration:none">Specialty pens (fineliners, calligraphy pens, erasable pens)</a></li>
                </ul>
            </li>
        </ul>
        <ul class="b3 dropdown">
            <li class="dropdown-trigger">
                <a href="#" style="text-decoration:none">Pencils</a>
                <ul class="dropdown-content">
                    <li class="b3"> <a href="#" style="text-decoration:none">Woodcase pencils (graphite hardness grades)</a></li>
                    <li class="b3"><a href="#" style="text-decoration:none">Mechanical pencils (lead sizes, lead colors)</a></li>
                    <li class="b3"><a href="#" style="text-decoration:none">Colored pencils (artist grade, student grade)</a></li>
                    <li class="b3"><a href="#" style="text-decoration:none">Charcoal pencils (sketching, drawing)</a></li>
                </ul>
            </li>
        </ul>
        <ul class="b3 dropdown">
            <li class="dropdown-trigger">
                <a href="#" style="text-decoration:none">Markers</a>
                <ul class="dropdown-content">
                    <li class="b3"><a href="#" style="text-decoration:none">Permanent markers (fine tip, broad tip)</a></li>
                    <li class="b3"><a href="#" style="text-decoration:none">Dry erase markers (chisel tip, bullet tip)</a></li>
                    <li class="b3"><a href="#" style="text-decoration:none">Highlighters (fluorescent colors, different tip widths)</a></li>
                    <li class="b3"><a href="#" style="text-decoration:none">Paint markers (acrylic, oil-based)</a></li>
                </ul>
            </li>
        </ul>
        <ul class="b3 dropdown">
            <li class="dropdown-trigger">
                <a href="#" style="text-decoration:none">Papers</a>
                <ul class="dropdown-content">
                    <li class="b3"> <a href="#" style="text-decoration:none">Writing paper (lined, unlined, different sizes)</a></li>
                    <li class="b3"><a href="#" style="text-decoration:none">Printing paper (letter size, A4 size, cardstock)</a></li>
                    <li class="b3"><a href="#" style="text-decoration:none">Specialty paper (tracing paper, origami paper, watercolor paper)</a></li>
                    <li class="b3"><a href="#" style="text-decoration:none">Sticky notes (various sizes and colors)</a></li>
                </ul>
            </li>
        </ul>
        <ul class="b3 dropdown">
            <li class="dropdown-trigger">
                <a href="#" style="text-decoration:none">Books</a>
                <ul class="dropdown-content">
                    <li class="b3"> <a href="#" style="text-decoration:none">Notebooks (spiral bound, composition notebooks, journals)</a></li>
                    <li class="b3"><a href="#" style="text-decoration:none">Planners (daily planners, weekly planners, bullet journals)</a></li>
                    <li class="b3"><a href="#" style="text-decoration:none">Sketchbooks (hardcover, softcover, different paper types)</a></li>
                    <li class="b3"><a href="#" style="text-decoration:none">Guestbooks (wedding guestbooks, memory books)</a></li>
                </ul>
            </li>
        </ul>
        <ul class="b3 dropdown">
            <li class="dropdown-trigger">
                <a href="#" style="text-decoration:none">Cutting Tools</a>
                <ul class="dropdown-content">
                    <li class="b3"> <a href="#" style="text-decoration:none">Scissors (straight edge, fabric scissors, decorative scissors)</a></li>
                    <li class="b3"><a href="#" style="text-decoration:none">Craft knives (exacto knives, utility knives)</a></li>
                    <li class="b3"><a href="#" style="text-decoration:none">Pinking shears (for creating decorative edges)</a></li>
                    <li class="b3"><a href="#" style="text-decoration:none">Rotary cutters (for quilting, scrapbooking)</a></li>
                </ul>
            </li>
        </ul>
        <ul class="b3 dropdown">
            <li class="dropdown-trigger">
                <a href="#" style="text-decoration:none">Sticking Tools</a>
                <ul class="dropdown-content">
                    <li class="b3"><a href="#" style="text-decoration:none">Glue sticks (permanent, temporary)</a></li>
                    <li class="b3"><a href="#" style="text-decoration:none">Liquid glue (white glue, school glue)</a></li>
                    <li class="b3"><a href="#" style="text-decoration:none">Tape (scotch tape, masking tape, double-sided tape)</a></li>
                    <li class="b3"><a href="#" style="text-decoration:none">Glue dots (permanent, removable)</a></li>
                </ul>
            </li>
        </ul>
        <ul class="b3 dropdown">
            <li class="dropdown-trigger">
                <a href="#" style="text-decoration:none">Correcting Tools</a>
                <ul class="dropdown-content">
                    <li class="b3"> <a href="#" style="text-decoration:none">Correction tape</a></li>
                    <li class="b3"><a href="#" style="text-decoration:none">Correction fluid (liquid white out)</a></li>
                    <li class="b3"><a href="#" style="text-decoration:none">Erasers (vinyl erasers, kneaded erasers, electric erasers)</a></li>
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
            @include('components/product-card')
            @include('components/product-card')
            @include('components/product-card')
            @include('components/product-card')
            @include('components/product-card')
            @include('components/product-card')
            @include('components/product-card')
            @include('components/product-card')
            @include('components/product-card')
            @include('components/product-card')
            @include('components/product-card')
            @include('components/product-card')
        </div>
    </div>
    @include('components/footer')
</body>
<script src="/js/product-catalog.js"></script>
</html>