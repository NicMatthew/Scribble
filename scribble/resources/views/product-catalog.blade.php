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
    <div class="menu">
        <ul class="b3 dropdown">
            <li class="dropdown-trigger">
                <a href="#">Pens</a>
                <ul class="dropdown-content">
                    <li class="b3"><a href="#">Ballpoint pens (gel pens, rollerball pens)</a></li>
                    <li class="b3"><a href="#">Fountain pens (cartridge, bottled ink)</a></li>
                    <li class="b3"><a href="#">Marker pens (permanent, highlighters)</a></li>
                    <li class="b3"><a href="#">Specialty pens (fineliners, calligraphy pens, erasable pens)</a></li>
                </ul>
            </li>
        </ul>
        <ul class="b3 dropdown">
            <li class="dropdown-trigger">
                <a href="#">Pencils</a>
                <ul class="dropdown-content">
                    <li class="b3"> <a href="#">Woodcase pencils (graphite hardness grades)</a></li>
                    <li class="b3"><a href="#">Mechanical pencils (lead sizes, lead colors)</a></li>
                    <li class="b3"><a href="#">Colored pencils (artist grade, student grade)</a></li>
                    <li class="b3"><a href="#">Charcoal pencils (sketching, drawing)</a></li>
                </ul>
            </li>
        </ul>
        <ul class="b3 dropdown">
            <li class="dropdown-trigger">
                <a href="#">Markers</a>
                <ul class="dropdown-content">
                    <li class="b3"> <a href="#">Permanent markers (fine tip, broad tip)</a></li>
                    <li class="b3"><a href="#">Dry erase markers (chisel tip, bullet tip)</a></li>
                    <li class="b3"><a href="#">Highlighters (fluorescent colors, different tip widths)</a></li>
                    <li class="b3"><a href="#">Paint markers (acrylic, oil-based)</a></li>
                </ul>
            </li>
        </ul>
        <ul class="b3 dropdown">
            <li class="dropdown-trigger">
                <a href="#">Papers</a>
                <ul class="dropdown-content">
                    <li class="b3"> <a href="#">Writing paper (lined, unlined, different sizes)</a></li>
                    <li class="b3"><a href="#">Printing paper (letter size, A4 size, cardstock)</a></li>
                    <li class="b3"><a href="#">Specialty paper (tracing paper, origami paper, watercolor paper)</a></li>
                    <li class="b3"><a href="#">Sticky notes (various sizes and colors)</a></li>
                </ul>
            </li>
        </ul>
        <ul class="b3 dropdown">
            <li class="dropdown-trigger">
                <a href="#">Books</a>
                <ul class="dropdown-content">
                    <li class="b3"> <a href="#">Notebooks (spiral bound, composition notebooks, journals)</a></li>
                    <li class="b3"><a href="#">Planners (daily planners, weekly planners, bullet journals)</a></li>
                    <li class="b3"><a href="#">Sketchbooks (hardcover, softcover, different paper types)</a></li>
                    <li class="b3"><a href="#">Guestbooks (wedding guestbooks, memory books)</a></li>
                </ul>
            </li>
        </ul>
        <ul class="b3 dropdown">
            <li class="dropdown-trigger">
                <a href="#">Cutting Tools</a>
                <ul class="dropdown-content">
                    <li class="b3"> <a href="#">Scissors (straight edge, fabric scissors, decorative scissors)</a></li>
                    <li class="b3"><a href="#">Craft knives (exacto knives, utility knives)</a></li>
                    <li class="b3"><a href="#">Pinking shears (for creating decorative edges)</a></li>
                    <li class="b3"><a href="#">Rotary cutters (for quilting, scrapbooking)</a></li>
                </ul>
            </li>
        </ul>
        <ul class="b3 dropdown">
            <li class="dropdown-trigger">
                <a href="#">Sticking Tools</a>
                <ul class="dropdown-content">
                    <li class="b3"><a href="#">Glue sticks (permanent, temporary)</a></li>
                    <li class="b3"><a href="#">Liquid glue (white glue, school glue)</a></li>
                    <li class="b3"><a href="#">Tape (scotch tape, masking tape, double-sided tape)</a></li>
                    <li class="b3"><a href="#">Glue dots (permanent, removable)</a></li>
                </ul>
            </li>
        </ul>
        <ul class="b3 dropdown">
            <li class="dropdown-trigger">
                <a href="#">Correcting Tools</a>
                <ul class="dropdown-content">
                    <li class="b3"> <a href="#">Correction tape</a></li>
                    <li class="b3"><a href="#">Correction fluid (liquid white out)</a></li>
                    <li class="b3"><a href="#">Erasers (vinyl erasers, kneaded erasers, electric erasers)</a></li>
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
                            <a class="b3">Sort By</p>
                        </div>
                        <div class="right-part">
                            <img src="/icons/chevron-down.svg" alt="down">
                        </div>
                        <ul class="dropdown-sort-content">
                            <li class="b3"><a href="#">Top Sales</a></li>
                            <li class="b3"><a  href="#">Lowest Price</a></li>
                            <li class="b3"><a href="#">Highest Price</a></li>
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