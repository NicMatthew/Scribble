    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Admin's Page | Product </title>
        <link rel="shortcut icon" href="/images/simple_logo.svg">
        <link rel="stylesheet" href="/css/variable.css">
        <link rel="stylesheet" href="/css/product-admin.css">
        <link rel="stylesheet" href="/css/header-standard.css">
        <link rel="stylesheet" href="/css/dashboard.css">
        <script src="/js/product-admin.js" defer=""></script>
    </head>
    <body>
        <div class="background">
        @include("components/sidebar-admin")
        <div class="main-content">
            <div class="content-header">
                <div class="the-title">
                    <div class="header-title">Products Management</div>
                    <div class="new-prod-btn" id="product-add">
                        <img src="\images\only-plus.png" alt="Plus">
                        <p class="new-prod-txt">New Product</p>
                    </div>
                </div>
                <hr class="content-line">
            </div>

            <div class="sub-content">
                <p class="all-prods">All Products</p>
                <p class="total">Total Products: {{ count($products) }}</p>
            </div>
            <div class="bottom-content">
                <table>
                    <tr class="title">
                        <th>No</th>
                        <th>Product ID</th>
                        <th>Name</th>
                        <th>Category</th>
                        <th>Variant</th>
                        <th>Stock</th>
                        <th>Price</th>
                        <!-- <th>Button</th> -->
                    </tr>
                    <!-- <hr class="content-line-table"> -->
                    @if ($products == null)
                        
                    @else
                        <div class="hide">{{ $count = 0  }}</div>
                        @foreach ($products as $product)
                            <tr class="data">
                                <div class="hide">{{ $count =  $count + 1  }}</div>
                                <td>{{ $count }}</td>
                                <td>{{ $product->ProductID }}</td>
                                <td class="prod-name">{{ $product->NameProduct }}</td>
                                <td>{{ $product->NameCategory }}</td>
                                <td>{{ $product->VariantName }}</td>
                                <td>{{ $product->Stock }}</td>
                                <td>{{ $product->Price }}</td>
                                <td class="container-edit">
                                    <img src="\images\3-bullets.png" alt="" class="more-btn">
                                    <div class="edit-delete-popup" id="popup">
                                        <div class="edit">
                                            <img src="\images\pencil-i.png" alt="">
                                            <p>Edit</p>
                                        </div>
                                        <hr class="line">
                                        <div class="delete">
                                            <img src="\images\trash.png" alt="">
                                            <p>Delete</p>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            
                        @endforeach
                        
                    @endif
                </table>

            </div>
        </div>
        </div>
            <div class="modal" id="modal">
                <div class="add-discount-container" id="add-discount-container">
                <div class="header">
                    <div class="close-btn" id="close-btn-disc">
                        <img src="/icons/close.svg">
                    </div>
                    <div class="header-title">Add Product</div>
                    <hr class="divider">
                </div>
                <form class="add-discount-wrapper" name="" method="POST" action="{{ route("product_add") }}" enctype="multipart/form-data">
                    @csrf
                    <div class="input-wrapper">
                        <div class="input-name">Product Name</div>
                        <input type="text" class="input-field" placeholder="Product Name" name="ProductName">
                    </div>
                    <div class="input-wrapper">
                        <div class="input-name">Product Sub Category</div>
                        <select class="input-field" name="ProductSubCategory">
                            <option value="" disabled selected>Choose Category</option>
                            @foreach ($subcategories as $subcategory)
                                <option value="{{ $subcategory->NameSubCategory }}">{{ $subcategory->NameSubCategory }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="input-wrapper">
                        <div class="input-name">Product Variant</div>
                        <input type="text" class="input-field" placeholder="Product Variant" name="ProductVariant">
                    </div>
                    <div class="input-wrapper">
                        <label class="input-name">Product Images</label>
                        <input type="file" class="input-field" name="ProductImages[]" id="uploadImage" title=" " multiple=>
                        <label for="uploadImage" id="fileLabel">No Image Selected</label>
                    </div>
                    <div class="input-wrapper" id="uploadedImage">
                        <div class="image-container" id="imageContainer"></div>
                    </div>
                    <div class="input-wrapper">
                        <div class="input-name">Product Description</div>
                        <input type="text" class="input-field" placeholder="Product Description" name="ProductDescription">
                    </div>
                    <div class="input-wrapper">
                        <div class="input-name">Product Stock</div>
                        <input type="text" class="input-field" placeholder="Product Stock" name="ProductStock">
                    </div>
                    <div class="input-wrapper">
                        <div class="input-name">Product Price</div>
                        <input type="text" class="input-field" placeholder="Product Price" name="ProductPrice">
                    </div>
                    <input class="add-new-disc" placeholder="Add Product" type="submit">
                </form>
            </div>

        </div>
    </body>
    </html>
