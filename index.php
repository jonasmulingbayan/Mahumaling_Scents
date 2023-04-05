<?php
 include 'database/connection.php';
 $logoSql = "SELECT * FROM logo WHERE ID = '1'";
 $sqlres = mysqli_query($conn, $logoSql);
 $rowLogo = mysqli_fetch_assoc($sqlres);
 $logo = $rowLogo['Image'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mahumaling Scents</title>
    <link rel = "icon" href ="images/<?php echo $logo ?>" type = "image/x-icon">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/css/nice-select.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="off_canvars_overlay"></div>

    <div class="offcanvas_menu offcanvas_two">
        <div class="canvas_open">
            <a href="javascript:void(0)"><i class="fa fa-bars" style = "color:white;"></i></a>
        </div>
        <div class="offcanvas_menu_wrapper">
            <div class="canvas_close">
                <a href="javascript:void(0)"><i class="fa fa-times"></i></a>
            </div>
            <div class="header_account">
                <ul>
                    <!--<li class="language">
                        <a href="#"><img src="images/icon/language.png" alt="English"> EN <i
                                class="fa fa-angle-down"></i></a>
                        <ul class="dropdown_language">
                            <li><a href="#">English</a></li>
                            <li><a href="#">Germany</a></li>
                            <li><a href="#">Hindi</a></li>
                        </ul>
                    </li>
                    <li class="currency">
                        <a href="#">INR <i class="fa fa-angle-down"></i></a>
                        <ul class="dropdown_currency">
                            <li><a href="#">EUR - EURO</a></li>
                            <li><a href="#">GBP - British Pound</a></li>
                            <li><a href="#">USD - US Dollar</a></li>
                        </ul>
                    </li>-->
                    <li class="top_links">
                        <a href="#">My Account <i class="fa fa-angle-down"></i></a>
                        <ul class="dropdown_links">
                            <li><a href="#">Checkout</a></li>
                            <li><a href="#">My Account</a></li>
                            <li><a href="#">Shopping Cart</a></li>
                            <li><a href="#">Wishlist</a></li>
                        </ul>
                    </li>

                </ul>
            </div>

            <div class="header_right_info">
                <ul>
                    <li class="search_box">
                        <a href="javascript:void(0)"><i class="fa fa-search"></i></a>
                        <div class="search_widget">
                            <form action="#">
                                <input type="text" placeholder="Search Your Perfume">
                                <button type="submit"><i class="fa fa-search"></i></button>
                            </form>
                        </div>
                    </li>
                    <li class="header_wishlist">
                        <a href="#"><i class="fa fa-heart-o"></i>
                            <span class="item_count">4</span>
                        </a>
                    </li>
                    <li class="mini_cart_wrapper">
                        <a href="javascript:void(0)">
                            <i class="fa fa-shopping-cart"></i>
                            <span class="item_count">2</span>
                        </a>
                        <div class="mini_cart mini_cart2">
                            <div class="cart_gallery">
                                <div class="cart_item">
                                    <div class="cart_img">
                                        <a href="#"><img src="images/images/Perfume_Primary/HugoBossEnergise.png" alt="Perfume"></a>
                                    </div>
                                    <div class="cart_info">
                                        <a href="#">Hugo Boss Energise</a>
                                        <p><span class = "">₱150.00</span> X 1</p>
                                    </div>
                                    <div class="cart_remove">
                                        <a href="#"><i class="fa fa-times"></i></a>
                                    </div>
                                </div>
                                <div class="cart_item">
                                    <div class="cart_img">
                                        <a href="#"><img src="images/images/Perfume_Primary/ParisHilton.png" alt="Perfume"></a>
                                    </div>
                                    <div class="cart_info">
                                        <a href="#">Paris Hilton</a>
                                        <p><span class = "">₱150.00</span> X 1</p>
                                    </div>
                                    <div class="cart_remove">
                                        <a href="#"><i class="fa fa-times"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="mini_cart_table">
                                <div class="cart_table_border">
                                    <div class="cart_total">
                                        <span>Sub Total :</span>
                                        <span class = "price">₱300.00</span>
                                    </div>

                                    <div class="cart_total mt-10">
                                        <span>Total :</span>
                                        <span class="price">₱300.00</span>
                                    </div>

                                </div>
                            </div>
                            <div class="mini_cart_footer">
                                <div class="cart_button">
                                    <a href="#">View Cart</a>
                                </div>
                                <div class="cart_button">
                                    <a href="#">Checkout</a>
                                </div>
                            </div>
                        </div>
                        <!-- mini cart ends here -->
                    </li>
                </ul>
            </div>

            <div id="menu" class="text-left">
                <ul class="offcanvas_main_menu" style="">
                    <li class="menu-item-has-children active">
                        <a href="#">Home</a>
                        <!--<ul class="sub-menu">
                            <li><a href="#">Men</a></li>
                            <li><a href="#">Women</a></li>
                            <li><a href="#">Unisex</a></li>
                        </ul>-->
                    </li>
                    <li class="menu-item-has-children">
                        <a href="#">Brands</a>
                        <ul class="sub-menu">
                            <li class="menu-item-has-children">
                                <a href="#">Men</a>
                                <ul class="sub-menu">
                                    <li><a href="#">Versace</a></li>
                                    <li><a href="#">Hugo Boss</a></li>
                                    <li><a href="#">Lacoste</a></li>
                                    <li><a href="#">Victoria Secret</a></li>
                                    <li><a href="#">Bath & Body</a></li>
                                    <li><a href="#">Ralph Lauren</a></li>
                                    <li><a href="#">Calvin Klein</a></li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="#">Women</a>
                                <ul class="sub-menu">
                                    <li><a href="#">Bvlgari</a></li>
                                    <li><a href="#">Victoria Secret </a></li>
                                    <li><a href="#">Lacoste</a></li>
                                    <li><a href="#">D&G</a></li>
                                    <li><a href="#">Selena Gomez</a></li>
                                </ul>
                            </li>
                            <!--<li class="menu-item-has-children">
                                <a href="#">Unisex</a>
                                <ul class="sub-menu">
                                    <li><a href="#">Ajmal</a></li>
                                    <li><a href="#">Calvin Klein</a></li>
                                    <li><a href="#">The Body Shop</a></li>
                                    <li><a href="#">Lattafa</a></li>
                                </ul>
                            </li>-->
                        </ul>
                    </li>
                    <!--<li class="menu-item-has-children">
                        <a href="#">Blog</a>
                        <ul class="sub-menu">
                            <li><a href="#">Newsletter</a></li>
                            <li><a href="#">Social Media</a></li>
                        </ul>
                    </li>-->
                    <!--<li class="menu-item-has-children">
                        <a href="#">My Account</a>
                    </li>-->
                    <li class="menu-item-has-children">
                        <a href="#Banner-for-bestseller">About Us</a>
                    </li>
                    <!--<li class="menu-item-has-children">
                        <a href="#">User</a>
                        <ul class="sub-menu">
                            <li><a href="#">Login In</a></li>
                            <li><a href="#">Sign up</a></li>
                        </ul>
                    </li>-->
                </ul>
            </div>

            <div class="offcanvas_footer">
                <span><a href="#"><i class="fa fa-envelope-0"></i>mahumalingscents@gmail.com</a></span>
                <ul>
                    <li class="facebook"><a href="https://www.facebook.com/MahumalingScent"><i class="fa fa-facebook"></i></a></li>
                    <li class="twitter"><a href="#"><i class="fa-brands fa-tiktok"></i></a></li>
                </ul>
            </div>
        </div>

    </div>


    <header>
        <div class="main_header header_transparent header-mobile-m">
            <div class="header_container sticky-header">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <div class="col-lg-2">
                            <div class="logo">
                                <a href="index.html"><img src="images/<?php echo $logo ?> " alt=""></a>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <!-- main-menu starts -->
                            <div class="main_menu menu_two menu_position">
                                <nav style = "margin-top:-10px;">
                                    <ul>
                                        <li>
                                            <a href="index.html" class="active">Home <!--<i
                                                    class="fa fa-angle-down"></i>--></a>
                                            <!--<ul class="sub_menu">
                                                <li><a href="#">Men</a></li>
                                                <li><a href="#">Women</a></li>
                                                <li><a href="#">Unisex</a></li>
                                            </ul>-->

                                        </li>

                                        <li class="mega_items">
                                            <a href="#">Brands <i class="fa fa-angle-down"></i></a>
                                            <div class="mega_menu">
                                                <ul class="mega_menu_inner">
                                                    <li class="menu-item-has-children">
                                                        <a href="#">Men</a>
                                                        <ul class="sub-menu">
                                                            <li><a href="#">Versace</a></li>
                                                            <li><a href="#">Hugo Boss</a></li>
                                                            <li><a href="#">Lacoste</a></li>
                                                            <li><a href="#">Victoria Secret</a></li>
                                                            <li><a href="#">Bath & Body</a></li>
                                                            <li><a href="#">Ralph Lauren</a></li>
                                                            <li><a href="#">Calvin Klein</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="menu-item-has-children">
                                                        <a href="#">Women</a>
                                                        <ul class="sub-menu">
                                                            <li><a href="#">Bvlgari</a></li>
                                                            <li><a href="#">Victoria Secret </a></li>
                                                            <li><a href="#">Lacoste</a></li>
                                                            <li><a href="#">D&G</a></li>
                                                            <li><a href="#">Selena Gomez</a></li>
                                                        </ul>
                                                    </li>
                                                    <!--<li>
                                                        <a href="#">Unisex</a>
                                                        <ul>
                                                            <li><a href="#">Ajmal</a></li>
                                                            <li><a href="#">The Body Shop</a></li>
                                                            <li><a href="#">Lattafa</a></li>
                                                        </ul>

                                                    </li>-->
                                                </ul>
                                            </div>
                                        </li>
                                        <!--<li>
                                            <a href="#">Blog <i class="fa fa-angle-down"></i></a>
                                            <ul class="sub_menu pages">
                                                <li><a href="#">Newsletter</a></li>
                                                <li><a href="#">Social Media</a></li>
                                            </ul>
                                        </li>-->
                                        <li><a href="#">About Us</a></li>
                                        <li><a href="#" data-toggle = "modal" data-target="#ContactUs">Contact Us</a></li>
                                        <li><a href="#" data-toggle="modal" data-target="#modal_map">Site Map</a></li>
                                        <!--<li>
                                            <a href="#">User <i class="fa fa-angle-down"></i></a>
                                            <ul class="sub_menu pages">
                                                <li><a href="#">Login In</a></li>
                                                <li><a href="#">Sign Up</a></li>
                                            </ul>
                                        </li>-->
                                    </ul>
                                </nav>
                            </div>

                            <!-- main menu ends -->
                        </div>
                        <div class="col-lg-4">
                            <div class="header_top_right">
                                <div class="header_right_info">
                                    <ul>
                                        <li class="search_box">
                                            <a href="javascript:void(0)">
                                                <i class="fa fa-search"></i>
                                            </a>
                                            <div class="search_widget">
                                                <form action="#">
                                                    <input type="text" placeholder="Search your perfume">
                                                    <button type="submit"><i class="fa fa-search"></i></button>
                                                </form>
                                            </div>
                                        </li>
                                        <li class="header_wishlist">
                                            <a href="#">
                                                <i class="fa fa-heart-o"></i>
                                                <span class="item_count">4</span>
                                            </a>
                                        </li>
                                        <li class="mini_cart_wrapper">
                                            <a href="javascript:void(0)">
                                                <i class="fa fa-shopping-cart"></i>
                                                <span class="item_count">2</span>
                                            </a>

                                            <!-- mini cart  -->
                                            <div class="mini_cart mini_cart2">
                                                <div class="cart_gallery">
                                                    <div class="cart_item">
                                                        <div class="cart_img">
                                                            <a href="#"><img src="images/images/Perfume_Primary/HugoBossEnergise.png" alt="Perfume"></a>
                                                        </div>
                                                        <div class="cart_info">
                                                            <a href="#">Hugo Boss Energise</a>
                                                            <p><span class = "">₱150.00</span> X 1</p>                                                        </div>
                                                        <div class="cart_remove">
                                                            <a href="#"><i class="fa fa-times"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="cart_item">
                                                        <div class="cart_img">
                                                            <a href="#"><img src="images/images/Perfume_Primary/ParisHilton.png" alt="Perfume"></a>
                                                        </div>
                                                        <div class="cart_info">
                                                            <a href="#">Paris Hilton</a>
                                                            <p><span class = "">₱150.00</span> X 1</p>
                                                        </div>
                                                        <div class="cart_remove">
                                                            <a href="#"><i class="fa fa-times"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="mini_cart_table">
                                                    <div class="cart_table_border">
                                                        <div class="cart_total">
                                                            <span>Sub Total :</span>
                                                            <span class="price">₱300.00</span>
                                                        </div>

                                                        <div class="cart_total mt-10">
                                                            <span>Total :</span>
                                                            <span class="price">₱300.00</span>
                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="mini_cart_footer">
                                                    <div class="cart_button">
                                                        <a href="#">View Cart</a>
                                                    </div>
                                                    <div class="cart_button">
                                                        <a href="#">Checkout</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- mini cart ends -->
                                        </li>
                                    </ul>
                                </div>
                                <div class="header_account">
                                    <ul>
                                        <li class="top_links">
                                            <a href="#">
                                                <i class="fa fa-cog"></i>
                                            </a>
                                            <ul class="dropdown_links">
                                                <li><a href="#">Checkout</a></li>
                                                <li><a href="#">My Account</a></li>
                                                <li><a href="#">Shopping cart</a></li>
                                                <li><a href="#">Wishlist</a></li>
                                            </ul>
                                        </li>
                                        <!--<li class="language">
                                            <a href="#"><img src="images/icon/language.png" alt="English"> EN <i
                                                    class="fa fa-angle-down"></i></a>
                                            <ul class="dropdown_language">
                                                <li><a href="#">English</a></li>
                                                <li><a href="#">Germany</a></li>
                                                <li><a href="#">Hindi</a></li>
                                            </ul>
                                        </li>
                                        <li class="currency">
                                            <a href="#">INR <i class="fa fa-angle-down"></i></a>
                                            <ul class="dropdown_currency">
                                                <li><a href="#">EUR - EURO</a></li>
                                                <li><a href="#">GBP - British Pound</a></li>
                                                <li><a href="#">USD - US Dollar</a></li>
                                            </ul>
                                        </li>-->
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>


    <!-- slider section starts  -->
    <section class="slider_section slider_section2 mb-66">
        <div class="slider_area owl-carousel">
        <?php 
            $sqlBanner = "SELECT * FROM banner";
            $sqlres = mysqli_query($conn, $sqlBanner);
            while($row = mysqli_fetch_array($sqlres)){
                $Image = $row['Image'];
            ?>
            <div id = "banners" class="single_slider d-flex align-items-center" data-bgimg="images/<?php echo $Image;?>">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-6 offset-lg-6 col-md-6 offset-md-6">
                            <div class="slider_content slider_content2 content_right">
                                <!--<h2 style = "text-shadow: 2px 2px black;">Lacoste's Collection</h2>
                                <p style="font-weight: bold;text-shadow: 2px 2px black;">The rich aromatic notes of rosemary and nerolu combined with the sophistication of
                                    tonka beans and white beans and white woods to create the perfect accompaniment for
                                    the suited look.</p>
                                <a href="#" class="button">Shop Now <i class="fa fa-arrow-right"></i></a>-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php }?>
        </div>
    </section>


    <!-- product area starts -->

    <div class="product_area product_area_two mb-65">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section_title">
                        <h2>Perfumes</h2>
                        <div class="product_tab_btn">
                            <ul class="nav" role="tablist">
                                <li>
                                    <a href="#Men" class="active" data-toggle="tab" role="tab" aria-controls="Men"
                                        aria-selected="true">
                                        Men
                                    </a>
                                </li>
                                <li>
                                    <a href="#Women" data-toggle="tab" role="tab" aria-controls="Women"
                                        aria-selected="false">
                                        Women
                                    </a>
                                </li>
                                <!--<li>
                                    <a href="#Unisex" data-toggle="tab" role="tab" aria-controls="Unisex"
                                        aria-selected="false">
                                        Unisex
                                    </a>
                                </li>-->
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-content">
                <div class="tab-pane fade show active" id="Men" role="tabpanel">
                    <div class="row">
                        <div class="product_carousel product_column4 owl-carousel">
                            <?php 
                            $sql = "SELECT * FROM perfumes  WHERE Genders = 'Men'";
                            $sqlres = mysqli_query($conn, $sql);
                            while($row = mysqli_fetch_array($sqlres)){
                                $Image = $row['Image'];
                                $Image2 = $row['Image2'];
                                $ID = $row['ID'];
                                $Name = $row['Name'];
                                $Price = $row['Price'];
                                $Discounted = $Price - 30;
                                ?>
                         
                          
                            <div class="col-lg-3">
                                <article class="single_product">
                                    <figure>
                                        <div class="product_thumb" >
                                            <a href="#" class="primary_img">
                                                <img src="images/<?php echo $Image;?>" style = "border-radius:5px;" alt="">
                                            </a>
                                            <a href="#" class="secondary_img">
                                            <img src="images/<?php echo $Image2;?>" style = "border-radius:5px;" alt="">
                                            </a>
                                            <div class="action_links">
                                                <ul>
                                                    <li class="add_to_cart">
                                                        <a href="#" title="Add to Cart">
                                                            <i class="fa fa-shopping-cart"></i>
                                                        </a>
                                                    </li>
                                                    <li class="wishlist">
                                                        <a href="#" title="Add to Wishlist">
                                                            <i class="fa fa-heart-o"></i>
                                                        </a>
                                                    </li>
                                                    <li class="compare">
                                                        <a href="#" title="Add to Compare">
                                                            <i class="fa fa-random"></i>
                                                        </a>
                                                    </li>
                                                    <li class="quick_button">
                                                        <a href="#" data-toggle="modal" data-target="#modal_box"
                                                            title="Quick View">
                                                            <i class="fa fa-eye"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <figcaption class="product_content">
                                            <h4 class="product_name">
                                                <a href="#"><?php echo $Name;?></a>
                                            </h4>

                                            <div class="price_box">
                                                <span class="old_price">₱<?php echo $Price;?>.00</span>
                                                <span class="current_price">₱<?php echo $Discounted;?>..00</span>
                                            </div>
                                            <div class="product_rating">
                                                <ul>
                                                    <li>
                                                        <a href="#">
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </figcaption>
                                    </figure>

                                </article>
                            </div>
                           <?php }?>
                            
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="Women" role="tabpanel">
                    <div class="row">
                        <div class="product_carousel product_column4 owl-carousel">
                        <?php 
                            $sql1 = "SELECT * FROM perfumes WHERE Genders = 'Women'";
                            $sqlres = mysqli_query($conn, $sql1);
                            while($row = mysqli_fetch_array($sqlres)){
                                $Image1 = $row['Image'];
                                $Image2 = $row['Image2'];
                                $ID = $row['ID'];
                                $Name = $row['Name'];
                                $Price = $row['Price'];
                                $Discounted = $Price - 30;
                                ?>
                            <div class="col-lg-3">
                                <article class="single_product">
                                    <figure>
                                        <div class="product_thumb" >
                                            <a href="#" class="primary_img" >
                                                <img src="images/<?php echo $Image1;?>" style = "border-radius:5px;"  alt="">
                                            </a>
                                            <a href="#" class="secondary_img">
                                            <img src="images/<?php echo $Image2;?>" style = "border-radius:5px;" alt="">
                                            </a>
                                            <div class="action_links">
                                                <ul>
                                                    <li class="add_to_cart">
                                                        <a href="#" title="Add to Cart">
                                                            <i class="fa fa-shopping-cart"></i>
                                                        </a>
                                                    </li>
                                                    <li class="wishlist">
                                                        <a href="#" title="Add to Wishlist">
                                                            <i class="fa fa-heart-o"></i>
                                                        </a>
                                                    </li>
                                                    <li class="compare">
                                                        <a href="#" title="Add to Compare">
                                                            <i class="fa fa-random"></i>
                                                        </a>
                                                    </li>
                                                    <li class="quick_button">
                                                        <a href="#" data-toggle="modal" data-target="#modal_box"
                                                            title="Quick View">
                                                            <i class="fa fa-eye"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <figcaption class="product_content">
                                            <h4 class="product_name">
                                                <a href="#"><?php echo $Name;?></a>
                                            </h4>

                                            <div class="price_box">
                                                <span class="old_price">₱<?php echo $Price;?>.00</span>
                                                <span class="current_price">₱<?php echo $Discounted;?>..00</span>
                                            </div>
                                            <div class="product_rating">
                                                <ul>
                                                    <li>
                                                        <a href="#">
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </figcaption>
                                    </figure>

                                </article>
                            </div>
                            
                            <?php }?>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>


    <!-- product area ends -->


    <!-- banner area starts -->
    <div id = "Banner-for-bestseller" class="banner_area mb-66">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section_title">
                        <h2>BEST SELLER</h2>
                        <div class="product_tab_btn">
                            <ul class="nav" role="tablist">
                                <li>
                                    <a onclick = "showMen();" href="#Men" class="active" data-toggle="tab" role="tab" aria-controls="Men"
                                        aria-selected="true">
                                        Men
                                    </a>
                                </li>
                                <li>
                                    <a onclick = "showWomen()" href="#Women" data-toggle="tab" role="tab" aria-controls="Women"
                                        aria-selected="false">
                                        Women
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div id = "for-men" class="row">
                
            <?php 
                $sql2 = "SELECT * FROM perfumes WHERE Genders = 'Men' AND BestSeller = 'BestSeller'";
                $sqlres = mysqli_query($conn, $sql2);
                while($row = mysqli_fetch_array($sqlres)){
                    $ImageBest = $row['Image'];
                ?>
                <div class="col-lg-4 col-md-4">
                    <figure class="single_banner">
                        <div class="banner_thumb">
                            <a href="#">
                                <img src="images/<?php echo $ImageBest;?>" style = "border-radius:5px;" alt="">
                            </a>
                            <!--<div class="banner_content">
                                <h3  style = "color:#ffbf00;">Oil based up to</h3>
                                <h2  style = "color:#ffbf00;">40%</h2>
                            </div>-->
                        </div>
                    </figure>
                </div>
            <?php }?>  
            </div>

            <div id = "for-women" class="row">
                
            <?php 
                $sql2 = "SELECT * FROM perfumes WHERE Genders = 'Women' AND BestSeller = 'BestSeller'";
                $sqlres = mysqli_query($conn, $sql2);
                while($row = mysqli_fetch_array($sqlres)){
                    $ImageBest = $row['Image'];
                ?>
                <div class="col-lg-4 col-md-4">
                    <figure class="single_banner">
                        <div class="banner_thumb">
                            <a href="#">
                                <img src="images/<?php echo $ImageBest;?>" style = "border-radius:5px;" alt="">
                            </a>
                            <!--<div class="banner_content">
                                <h3  style = "color:#ffbf00;">Oil based up to</h3>
                                <h2  style = "color:#ffbf00;">40%</h2>
                            </div>-->
                        </div>
                    </figure>
                </div>
            <?php }?>  
            </div>
        </div>
    </div>
    <!-- banner area ends -->

    <!-- home section area starts  -->

    <div class="home_section_two color_two mb-40">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="home_section_right">
                        <!-- product area starts  -->

                        <div class="product_area mb-65">
                            <div class="section_title section_title_style2">
                                <h2>DEALS</h2>
                            </div>
                            <div class="row">
                                <div class="product_carousel product_column3 owl-carousel">
                                <?php 
                                $sql5 = "SELECT * FROM perfumes";
                                $sqlres = mysqli_query($conn, $sql5);
                                while($row = mysqli_fetch_array($sqlres)){
                                    $Images = $row['Image'];
                                    $Images2 = $row['Image2'];
                                    $Name = $row['Name'];
                                    $Price = $row['Price'];
                                    $Discounts = $Price - 30;
                                    ?>
                                    <div class="col-lg-3">
                                        <article class="single_product">
                                            <figure>
                                                <div class="product_thumb">
                                                    <a href="#" class="primary_img">
                                                        <img src="images/<?php echo $Images;?>" alt="">
                                                    </a>
                                                    <a href="#" class="secondary_img">
                                                        <img src="images/<?php echo $Images2;?>" alt="">
                                                    </a>

                                                    <div class="action_links">
                                                        <ul>
                                                            <li class="add_to_cart">
                                                                <a href="#" title="Add to Cart">
                                                                    <i class="fa fa-shopping-cart"></i>
                                                                </a>
                                                            </li>
                                                            <li class="wishlist">
                                                                <a href="#" title="Add to Wishlist">
                                                                    <i class="fa fa-heart-o"></i>
                                                                </a>
                                                            </li>
                                                            <li class="compare">
                                                                <a href="#" title="Add to Compare">
                                                                    <i class="fa fa-random"></i>
                                                                </a>
                                                            </li>
                                                            <li class="quick_button">
                                                                <a href="#" data-toggle="modal" data-target="#modal_box"
                                                                    title="Quick View">
                                                                    <i class="fa fa-eye"></i>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>

                                                </div>
                                                <figcaption class="product_content">
                                                    <h4 class="product_name">
                                                        <a href="#"><?php echo $Name;?></a>
                                                    </h4>
                                                    <div class="product_rating">
                                                        <ul>
                                                            <li>
                                                                <a href="#">
                                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#">
                                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#">
                                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#">
                                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#">
                                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="price_box">
                                                        <span class="old_price">₱<?php echo $Price;?>.00</span>
                                                        <span class="current_price">₱<?php echo $Discounts;?>.00</span>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                        </article>
                                    </div>
                                    <?php }?>
                                    
                                </div>
                            </div>
                        </div>

                        <!-- product area ends -->

                        <!-- Long banner area starts  -->
                        <div class="row">
                        <div id = "for-slider" class="product_carousel product_column5 owl-carousel">
                        <?php 
                            $sqlSlider = "SELECT * FROM slider";
                            $sqlres = mysqli_query($conn, $sqlSlider);
                                while($row = mysqli_fetch_array($sqlres)){
                                    $Images = $row['Image'];
                                    $Description = $row['Description'];
                                    $Percentage = $row['Percentage'];
                                    $Name = $row['Name'];
                                    ?>
                        <div class="banner_area banner_style_two mb-58">
                            <div class="single_banner">
                                <div class="banner_thumb">
                                    <a href="#">
                                        <img src="images/<?php echo $Images;?>" style = "border-radius:5px;" alt="">

                                    </a>
                                    <div class="banner_content">
                                        <h3 style="color: #ffbf00;"><?php echo $Description;?> </h3>
                                        <h2><?php echo $Percentage;?></h2>
                                        <p style="font-weight: bold;color:whitesmoke;"><?php echo $Name;?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php }?>
                        </div>
                </div>
                        <!-- Long Banner area ends -->

                        <!-- product section starts  -->
                        

                        <!-- product section ends -->
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="home_section_two color_two mb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="home_section_right">
                        <!-- product area starts  -->

                        <div class="product_area mb-65">
                            <div class="section_title section_title_style2">
                                <h2>COLOGNES</h2>
                            </div>
                            <div class="row">
                                <div class="product_carousel product_column3 owl-carousel">
                                <?php 
                                $sqlCologne = "SELECT * FROM cologne";
                                $sqlres = mysqli_query($conn, $sqlCologne);
                                while($row = mysqli_fetch_array($sqlres)){
                                    $Images = $row['Image'];
                                    $Images2 = $row['Image2'];
                                    $Name = $row['Name'];
                                    $Price = $row['Price'];
                                    $Discounts = $Price - 30;
                                    ?>
                                    <div class="col-lg-3">
                                        <article class="single_product">
                                            <figure>
                                                <div class="product_thumb">
                                                    <a href="#" class="primary_img">
                                                        <img src="images/<?php echo $Images;?>" style = "border-radius:5px;" alt="">
                                                    </a>
                                                    <a href="#" class="secondary_img">
                                                        <img src="images/<?php echo $Images2;?>" style = "border-radius:5px;" alt="">
                                                    </a>

                                                    <div class="action_links">
                                                        <ul>
                                                            <li class="add_to_cart">
                                                                <a href="#" title="Add to Cart">
                                                                    <i class="fa fa-shopping-cart"></i>
                                                                </a>
                                                            </li>
                                                            <li class="wishlist">
                                                                <a href="#" title="Add to Wishlist">
                                                                    <i class="fa fa-heart-o"></i>
                                                                </a>
                                                            </li>
                                                            <li class="compare">
                                                                <a href="#" title="Add to Compare">
                                                                    <i class="fa fa-random"></i>
                                                                </a>
                                                            </li>
                                                            <li class="quick_button">
                                                                <a href="#" data-toggle="modal" data-target="#modal_box"
                                                                    title="Quick View">
                                                                    <i class="fa fa-eye"></i>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <figcaption class="product_content">
                                                    <h4 class="product_name">
                                                        <a href="#"><?php echo $Name;?></a>
                                                    </h4>
                                                    <div class="product_rating">
                                                        <ul>
                                                            <li>
                                                                <a href="#">
                                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#">
                                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#">
                                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#">
                                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#">
                                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="price_box">
                                                        <span class="old_price">₱<?php echo $Price;?>.00</span>
                                                        <span class="current_price">₱<?php echo $Discounts;?>.00</span>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                        </article>
                                    </div>
                                    <?php }?>
                                    
                                </div>
                            </div>
                        </div>

                        <!-- product area ends -->
                        <!-- product section ends -->
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="home_section_two color_two mb-70" style = "margin-top:-30px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="home_section_right">
                        <!-- product area starts  -->

                        <div class="product_area mb-65">
                            <div class="section_title section_title_style2">
                                <h2>CAR DIFFUSERS</h2>
                            </div>
                            <div class="row">
                                <div class="product_carousel product_column3 owl-carousel">
                                <?php 
                                $sqlCar = "SELECT * FROM car_diffuser";
                                $sqlres = mysqli_query($conn, $sqlCar);
                                while($row = mysqli_fetch_array($sqlres)){
                                    $Images = $row['Image'];
                                    $Images2 = $row['Image2'];
                                    $Name = $row['Name'];
                                    $Price = $row['Price'];
                                    $Discounts = $Price - 15;
                                    ?>
                                    <div class="col-lg-3">
                                        <article class="single_product">
                                            <figure>
                                                <div class="product_thumb">
                                                    <a href="#" class="primary_img">
                                                        <img src="images/<?php echo $Images;?>" style = "border-radius:5px;" alt="">
                                                    </a>
                                                    <a href="#" class="secondary_img">
                                                        <img src="images/<?php echo $Images2;?>" style = "border-radius:5px;" alt="">
                                                    </a>

                                                    <div class="action_links">
                                                        <ul>
                                                            <li class="add_to_cart">
                                                                <a href="#" title="Add to Cart">
                                                                    <i class="fa fa-shopping-cart"></i>
                                                                </a>
                                                            </li>
                                                            <li class="wishlist">
                                                                <a href="#" title="Add to Wishlist">
                                                                    <i class="fa fa-heart-o"></i>
                                                                </a>
                                                            </li>
                                                            <li class="compare">
                                                                <a href="#" title="Add to Compare">
                                                                    <i class="fa fa-random"></i>
                                                                </a>
                                                            </li>
                                                            <li class="quick_button">
                                                                <a href="#" data-toggle="modal" data-target="#modal_box"
                                                                    title="Quick View">
                                                                    <i class="fa fa-eye"></i>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <figcaption class="product_content">
                                                    <h4 class="product_name">
                                                        <a href="#"><?php echo $Name;?></a>
                                                    </h4>
                                                    <div class="product_rating">
                                                        <ul>
                                                            <li>
                                                                <a href="#">
                                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#">
                                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#">
                                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#">
                                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#">
                                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="price_box">
                                                        <span class="old_price">₱<?php echo $Price;?>.00</span>
                                                        <span class="current_price">₱<?php echo $Discounts;?>.00</span>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                        </article>
                                    </div>
                                    <?php }?>
                                    
                                </div>
                            </div>
                        </div>

                        <!-- product area ends -->
                        <!-- product section ends -->
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- home section area ends -->

    <footer class="footer_widgets color_two">
        <div class="footer_top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-7">
                        <div class="widgets_container contact_us">
                            <div class="footer_logo">
                                <center><a href="#"><img src="images/<?php echo $logo ?>"  alt="Logo"></a></center>
                            </div>
                            <div class="footer_desc">
                                <p style = "text-align: justify;">Get all types of perfume from us within 2 day delivery. We can even order the
                                    perfumes which are not in our database. To do that kindly send a E-mail to the
                                    company's mail id.</p>
                            </div>
                            <p><i class = "fas fa-location-dot"></i> <span>Address :</span> B-16 L1-A, San Dionisio, Dasmariñas, Cavite</p>
                            <p><i class = "fa fa-envelope-o"></i> <span>Email :</span> <a href="#">mahumalingscents@gmail.com</a></p>
                            <p><i class = "fa fa-phone"></i> <span>Phone :</span> <a href="#">09356755567</a> </p>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-5">
                        <div class="widgets_container widget_menu">
                            <h3>Information</h3>
                            <div class="footer_menu">
                                <ul>
                                    <!--<li><a href="#">About Us</a></li>
                                    <li><a href="#">Prices Drop</a></li>
                                    <li><a href="#">New Products</a></li>
                                    <li><a href="#">Best Sales</a></li>-->
                                    <li><a href="#">Terms & Conditions</a></li>
                                    <!--<li><a href="#">Gift Certificate</a></li>
                                    <li><a href="#">My Account</a></li>
                                    <li><a href="#">Order History</a></li>
                                    <li><a href="#">Wish List</a></li>
                                    <li><a href="#">Specials</a></li>-->
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="widgets_container widgets_p_product">
                            <h3>Featured Products</h3>
                            <div class="small_product_container small_product_column1 owl-carousel">
                                <div class="small_product_list">
                                <?php 
                                    $sql8 = "SELECT * FROM perfumes WHERE Genders = 'Women' ORDER BY Name ASC LIMIT 3";
                                    $sqlres = mysqli_query($conn, $sql8);
                                    while($row = mysqli_fetch_array($sqlres)){
                                        $Images = $row['Image'];
                                        $Images2 = $row['Image2'];
                                        $Name = $row['Name'];
                                        $Price = $row['Price'];
                                        $Discounts = $Price - 30;
                                            ?>
                                    <article class="single_product">
                                        <figure>
                                            <div class="product_thumb">
                                                <a href="#" class="primary_img">
                                                    <img src="images/<?php echo $Images;?>" alt="">
                                                </a>
                                                <a href="#" class="secondary_img">
                                                    <img src="images/<?php echo $Images2;?>" alt="">
                                                </a>
                                            </div>
                                            <figcaption class="product_content">
                                                <h4 class="product_name">
                                                    <a href="#" style="color: white;"><?php echo $Name;?></a>
                                                </h4>

                                                <div class="price_box">
                                                    <span class="old_price">₱<?php echo $Price;?>.00</span>
                                                    <span class="current_price" style="color: white;">₱<?php echo $Discounts;?>.00</span>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </article>
                                    <?php }?>
                                </div>
                                <div class="small_product_list">
                                <?php 
                                    $sql9 = "SELECT * FROM perfumes WHERE Genders = 'Men' ORDER BY Name DESC LIMIT 3";
                                    $sqlres = mysqli_query($conn, $sql9);
                                    while($row = mysqli_fetch_array($sqlres)){
                                        $Images = $row['Image'];
                                        $Images2 = $row['Image2'];
                                        $Name = $row['Name'];
                                        $Price = $row['Price'];
                                        $Discounts = $Price - 30;
                                            ?>
                                    <article class="single_product">
                                        <figure>
                                            <div class="product_thumb">
                                                <a href="#" class="primary_img">
                                                    <img src="images/<?php echo $Images;?>" alt="">
                                                </a>
                                                <a href="#" class="secondary_img">
                                                    <img src="images/<?php echo $Images2;?>" alt="">
                                                </a>
                                            </div>
                                            <figcaption class="product_content">
                                                <h4 class="product_name">
                                                    <a href="#" style="color: white;"><?php echo $Name;?></a>
                                                </h4>

                                                <div class="price_box">
                                                    <span class="old_price">₱<?php echo $Price;?>.00</span>
                                                    <span class="current_price" style="color: white;">₱<?php echo $Discounts;?>.00</span>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </article>
                                    <?php }?>
                                </div>

                                <!--For Products-->
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="widgets_container widgets_p_product">
                            <h3>Most Viewed Products</h3>
                            <div class="small_product_container small_product_column1 owl-carousel">
                            <div class="small_product_list">
                                <?php 
                                    $sql10 = "SELECT * FROM perfumes WHERE Genders = 'Women' ORDER BY Name DESC LIMIT 3";
                                    $sqlres = mysqli_query($conn, $sql10);
                                    while($row = mysqli_fetch_array($sqlres)){
                                        $Images = $row['Image'];
                                        $Images2 = $row['Image2'];
                                        $Name = $row['Name'];
                                        $Price = $row['Price'];
                                        $Discounts = $Price - 30;
                                            ?>
                                    <article class="single_product">
                                        <figure>
                                            <div class="product_thumb">
                                                <a href="#" class="primary_img">
                                                    <img src="images/<?php echo $Images;?>" alt="">
                                                </a>
                                                <a href="#" class="secondary_img">
                                                    <img src="images/<?php echo $Images2;?>" alt="">
                                                </a>
                                            </div>
                                            <figcaption class="product_content">
                                                <h4 class="product_name">
                                                    <a href="#" style="color: white;"><?php echo $Name;?></a>
                                                </h4>

                                                <div class="price_box">
                                                    <span class="old_price">₱<?php echo $Price;?>.00</span>
                                                    <span class="current_price" style="color: white;">₱<?php echo $Discounts;?>.00</span>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </article>
                                    <?php }?>
                                </div>
                                <div class="small_product_list">
                                <?php 
                                    $sql10 = "SELECT * FROM perfumes WHERE Genders = 'Men' ORDER BY Name ASC LIMIT 3";
                                    $sqlres = mysqli_query($conn, $sql10);
                                    while($row = mysqli_fetch_array($sqlres)){
                                        $Images = $row['Image'];
                                        $Images2 = $row['Image2'];
                                        $Name = $row['Name'];
                                        $Price = $row['Price'];
                                        $Discounts = $Price - 30;
                                            ?>
                                    <article class="single_product">
                                        <figure>
                                            <div class="product_thumb">
                                                <a href="#" class="primary_img">
                                                    <img src="images/<?php echo $Images;?>" alt="">
                                                </a>
                                                <a href="#" class="secondary_img">
                                                    <img src="images/<?php echo $Images2;?>" alt="">
                                                </a>
                                            </div>
                                            <figcaption class="product_content">
                                                <h4 class="product_name">
                                                    <a href="#" style="color: white;"><?php echo $Name;?></a>
                                                </h4>

                                                <div class="price_box">
                                                    <span class="old_price">₱<?php echo $Price;?>.00</span>
                                                    <span class="current_price" style="color: white;">₱<?php echo $Discounts;?>.00</span>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </article>
                                    <?php }?>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <!--<div class="footer_link">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <ul>
                            <li><a href="#">Order History</a></li>
                            <li><a href="#">Wish List</a></li>
                            <li><a href="#">Affiliate</a></li>
                            <li><a href="#" data-toggle="modal"
                                data-target="#modal_map">Site Map</a></li>
                            <li><a href="#">Newsletter</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>-->

        <!-- footer section starts  -->

        <div class="footer_bottom">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-6">
                        <div class="copyright_area">
                            <p>Copyright &copy; 2023 <a href="#">Mahumaling Scents </a>All right Reserved.</p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div  class="footer_payment text-right">
                            <ul id = "footer-icons">
                                <li><h5 style = "color:white;">Follow Us: </h5></li>
                                <li class="facebook"><a href="https://www.facebook.com/MahumalingScent"><i class="fa fa-facebook"></i></a></li>
                                <!--<li><a href="#" style = "background-color: #1da1f2;padding:10px 12px;border-radius: 50%;"><i class = "fa fa-twitter" style = "font-size:15px;color:white;"></i></a></li>-->
                                <li class="tiktok"><a href="https://www.tiktok.com/@ms_perfume"><i class="fa-brands fa-tiktok"></i></a></li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- footer section ends -->

    <!-- modal section starts  -->

<!--
    <div class="modal fade" id="modal_box" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <button type="button" data-dismiss="modal" aria-label="close" class="close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <div class="modal_body">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-5 col-md-5 col-sm-12">
                                <div class="modal_tab">
                                    <div class="tab-content product-details-large">
                                        <div class="tab-pane fade show active" id="tab1" role="tabpanel">
                                            <div class="modal_tab_img">
                                                <a href="#"><img src="images/new-product/N1-1.png" alt=""></a>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="tab2" role="tabpanel">
                                            <div class="modal_tab_img">
                                                <a href="#"><img src="images/new-product/N2-1.png" alt=""></a>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="tab3" role="tabpanel">
                                            <div class="modal_tab_img">
                                                <a href="#"><img src="images/new-product/N3.png" alt=""></a>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="tab4" role="tabpanel">
                                            <div class="modal_tab_img">
                                                <a href="#"><img src="images/new-product/N4-1.png" alt=""></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal_tab_button">
                                        <ul class="nav product_navactive owl-carousel" role="tablist">
                                            <li>
                                                <a href="#tab1" class="nav-link active" data-toggle="tab" role="tab"
                                                    aria-controls="tab1" aria-selected="false">
                                                    <img src="images/new-product/N1-1.png" alt="">
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#tab2" class="nav-link" data-toggle="tab" role="tab"
                                                    aria-controls="tab2" aria-selected="false">
                                                    <img src="images/new-product/N2-1.png" alt="">
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#tab3" class="nav-link" data-toggle="tab" role="tab"
                                                    aria-controls="tab3" aria-selected="false">
                                                    <img src="images/new-product/N3.png" alt="">
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#tab4" class="nav-link" data-toggle="tab" role="tab"
                                                    aria-controls="tab4" aria-selected="false">
                                                    <img src="images/new-product/N4-1.png" alt="">
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-7 col-md-7 col-sm-12">
                                <div class="modal_right">
                                    <div class="modal_title mb-10">
                                        <h2>Paco Rabbane Men Invictus</h2>
                                    </div>
                                    <div class="modal_price mb-10">
                                        <span class="new_price">Rs. 7600</span>
                                        <span class="old_price">Rs. 8100</span>
                                    </div>
                                    <div class="modal_description mb-15">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veritatis earum
                                            nesciunt consequatur deleniti nam dicta eligendi iusto quaerat dolores
                                            debitis, est natus omnis consequuntur sequi. Ipsam sint rerum minus eos?</p>
                                    </div>
                                    <div class="variants_selects">
                                        <div class="variants_size">
                                            <h2>Size</h2>
                                            <select class="select_option">
                                                <option value="1" selected>10ml</option>
                                                <option value="1">25ml</option>
                                                <option value="1">50ml</option>
                                                <option value="1">100ml</option>
                                                <option value="1">250ml</option>
                                            </select>
                                        </div>
                                        <div class="variants_fragrance">
                                            <h2>Fragrance</h2>
                                            <select class="select_option">
                                                <option value="1" selected>Rose</option>
                                                <option value="1">Chocolate</option>
                                                <option value="1">Sweet</option>
                                                <option value="1">Fruit</option>
                                                <option value="1">Intense</option>
                                            </select>
                                        </div>
                                        <div class="modal_add_to_cart">
                                            <form action="#">
                                                <input type="number" min="1" max="100" step="1" value="1">
                                                <button type="submit">Add to cart</button>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="modal_social">
                                        <h2>Follow us on</h2>
                                        <ul>
                                            <li class="facebook"><a href="https://www.facebook.com/MahumalingScent"><i class="fa fa-facebook"></i></a></li>
                                            <li class="twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li class="pinterest"><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                            <li class="google-plus"><a href="#"><i class="fa fa-google-plus"></i></a>
                                            </li>
                                            <li class="linkedin"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
                                    -->


    <!-- modal section ends -->
    
    <div class="modal fade" id="modal_map" tabindex="-1" role="dialog" aria-hidden="true" style="width:100%;border-radius:5px;">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content" style="width:100%;border-radius:5px;" >
                <button type="button" data-dismiss="modal" aria-label="close" class="close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <div class="modal_body" style = "text-align: center;width: 100%;">
                    <h3>PHOSCLAY CHEMICAL MANUFACTURING</h3>
                    <iframe id ="for-map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3865.483553980792!2d120.95070625045639!3d14.341404589918682!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397d5767e2bc6c9%3A0xfffec0974aeaf729!2sPhosclay%20Chemical%20Manufacturing!5e0!3m2!1sen!2sph!4v1680358372896!5m2!1sen!2sph" 
                    allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                </iframe>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Modal -->
			<div class="modal fade" id="ContactUs" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true" style="width:100%;border-radius:5px;">
				<div class="modal-dialog modal-dialog-centered">
					<div class="modal-content" style="width:100%;border-radius:5px;">
						<div class="modal-header">
						<h5 class="modal-title" id="staticBackdropLabel">Contact Us Form</h5>
						<button type="button" class="btn-close" data-dismiss="modal" aria-label="close" class="close" style = "border:none;outline:none;background:transparent;">
                        <span aria-hidden="true" style = "font-size:16px;">&times;</span>
                        </button>
						</div>
						<div class="modal-body">
							<!-- Bootstrap main form start -->
							<form class="row g-3" method="POST" action="send.php">
								<div class="col-md-6">
									<label for="Name" class="form-label">Name</label>
									<input type="text" class="form-control" name="name" placeholder="Enter name" required>
								</div>
								<div class="col-md-6">
									<label for="Email" class="form-label">Email</label>
									<input type="email" class="form-control" name="email" placeholder="Enter email" required>
								</div>
								<div class="col-md-12">
									<label for="message" class="form-label">Message</label>
									<textarea class="form-control" name="message" placeholder="Enter your message" rows="5" required></textarea>
								</div>
                                <br>
								<div class="col-md-12">
									<input type="submit" class="btn btn-primary" name="submit" value="Submit" style = "margin-top:10px;">
								</div>
							</form><br>
							<!-- Bootstrap main form end -->
							<div id="form_message"></div>
						</div>
					</div>
				</div>
			</div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.min.js"></script>
    <script src="js/countdown.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/js/jquery.nice-select.min.js"></script>
    <script src="js/main.js"></script>
    <script>
        document.getElementById("for-women").style.display = "none";
        function showMen(){
            document.getElementById("for-men").style.display = "flex";
            document.getElementById("for-women").style.display = "none";
        }
        function showWomen(){
            document.getElementById("for-women").style.display = "flex";
            document.getElementById("for-men").style.display = "none";
        }
    </script>

</body>

</html>
<style>
    #for-map{
        width:800px;
        height:600px;
        border:0;
    }
    @media(max-width:800px) {
        #for-map{
        width:400px;
        height:450px;
        } 
    }
</style>