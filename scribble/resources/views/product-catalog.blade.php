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
                <a href="#" style="text-decoration:none">Books & Papers</a>
                <ul class="dropdown-content">
                    <li class="b3"> <a href="#" style="text-decoration:none">Writing paper (lined, unlined)</a></li>
                    <li class="b3"><a href="#" style="text-decoration:none">Printing paper</a></li>
                    <li class="b3"><a href="#" style="text-decoration:none">Specialty paper (tracing paper, origami paper, watercolor paper)</a></li>
                    <li class="b3"><a href="#" style="text-decoration:none">Sticky notes</a></li>
                    <li class="b3"> <a href="#" style="text-decoration:none">Notebooks (spiral bound, journals)</a></li>
                    <li class="b3"><a href="#" style="text-decoration:none">Planners (daily planners, weekly planners)</a></li>
                    <li class="b3"><a href="#" style="text-decoration:none">Sketchbooks (hardcover, softcover)</a></li>
                    <li class="b3"><a href="#" style="text-decoration:none">Guestbooks (wedding guestbooks, memory books)</a></li>
                </ul>
            </li>
        </ul>
        <ul class="b3 dropdown">
            <li class="dropdown-trigger">
                <a href="#" style="text-decoration:none">Cutting Tools</a>
                <ul class="dropdown-content">
                    <li class="b3"> <a href="#" style="text-decoration:none">Scissors (straight edge, fabric scissors, decorative scissors, pinking shears)</a></li>
                    <li class="b3"><a href="#" style="text-decoration:none">Cutters (craft knives, utility knives)</a></li>
                    <li class="b3"><a href="#" style="text-decoration:none">Sharpeners (Manual, Electric)</a></li>
                    <li class="b3"><a href="#" style="text-decoration:none">Punch Hole</a></li>
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
                </ul>
            </li>
        </ul>
        <ul class="b3 dropdown">
            <li class="dropdown-trigger">
                <a href="#" style="text-decoration:none">Correcting Tools</a>
                <ul class="dropdown-content">
                    <li class="b3"> <a href="#" style="text-decoration:none">Correction tape</a></li>
                    <li class="b3"><a href="#" style="text-decoration:none">Correction fluid</a></li>
                    <li class="b3"><a href="#" style="text-decoration:none">Erasers (vinyl erasers, kneaded erasers, electric erasers)</a></li>
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
                    <li class="b3"><a href="#" style="text-decoration:none">Organizers (file organizer, desk organizer)</a></li>
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
                <ul class="product-list">
                    @foreach ($products as $product)
                        <li>
                            @include('components/product-card')
                        </li>
                    @endforeach
                </ul>
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
