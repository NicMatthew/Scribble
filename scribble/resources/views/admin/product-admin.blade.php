<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin's Page | Product </title>
    <link rel="shortcut icon" href="/images/simple_logo.svg">
    <link rel="stylesheet" href="/css/variable.css">
    <link rel="stylesheet" href="/css/product-admin.css">
    <script src="\js\product-admin.js" defer=""></script>
</head>
<body>
    <div class="background">
    @include("components/sidebar-admin")
    <div class="main-content">
        <div class="content-header">
            <div class="the-title">
                <div class="header-title">Products Management</div>
                <a href="#" class="new-prod-btn">
                    <img src="\images\only-plus.png" alt="Plus">
                    <p class="new-prod-txt">New Product</p>
                </a>
            </div>
            <hr class="content-line">
        </div>

        <div class="sub-content">
            <p class="all-prods">All Products</p>
            <p class="total">Total Products: 1</p>
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
                <tr class="data">
                    <td>1</td>
                    <td>0D001</td>
                    <td class="prod-name">Zebra Highlighter FM-1 Mild</td>
                    <td>Marker</td>
                    <td>Black</td>
                    <td>20</td>
                    <td>Rp 50.000</td>
                    <td>
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
                <tr class="data">
                    <td>1</td>
                    <td>0D001</td>
                    <td class="prod-name">Zebra Highlighter FM-1 Mild</td>
                    <td>Marker</td>
                    <td>Black</td>
                    <td>20</td>
                    <td>Rp 50.000</td>
                    <td>
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
                <tr class="data">
                    <td>1</td>
                    <td>0D001</td>
                    <td class="prod-name">Zebra Highlighter FM-1 Mild</td>
                    <td>Marker</td>
                    <td>Black</td>
                    <td>20</td>
                    <td>Rp 50.000</td>
                    <td>
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
                <tr class="data">
                    <td>1</td>
                    <td>0D001</td>
                    <td class="prod-name">Zebra Highlighter FM-1 Mild</td>
                    <td>Marker</td>
                    <td>Black</td>
                    <td>20</td>
                    <td>Rp 50.000</td>
                    <td>
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
                <tr class="data">
                    <td>1</td>
                    <td>0D001</td>
                    <td class="prod-name">Zebra Highlighter FM-1 Mild</td>
                    <td>Marker</td>
                    <td>Black</td>
                    <td>20</td>
                    <td>Rp 50.000</td>
                    <td>
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
                <tr class="data">
                    <td>1</td>
                    <td>0D001</td>
                    <td class="prod-name">Zebra Highlighter FM-1 Mild</td>
                    <td>Marker</td>
                    <td>Black</td>
                    <td>20</td>
                    <td>Rp 50.000</td>
                    <td>
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
                <tr class="data">
                    <td>1</td>
                    <td>0D001</td>
                    <td class="prod-name">Zebra Highlighter FM-1 Mild</td>
                    <td>Marker</td>
                    <td>Black</td>
                    <td>20</td>
                    <td>Rp 50.000</td>
                    <td>
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
                <tr class="data">
                    <td>1</td>
                    <td>0D001</td>
                    <td class="prod-name">Zebra Highlighter FM-1 Mild</td>
                    <td>Marker</td>
                    <td>Black</td>
                    <td>20</td>
                    <td>Rp 50.000</td>
                    <td>
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
                <tr class="data">
                    <td>1</td>
                    <td>0D001</td>
                    <td class="prod-name">Zebra Highlighter FM-1 Mild</td>
                    <td>Marker</td>
                    <td>Black</td>
                    <td>20</td>
                    <td>Rp 50.000</td>
                    <td>
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
                
            
      
               
            
           
    
                
                
                
            </table>

        </div>
    </div>
    </div>


</body>
</html>
