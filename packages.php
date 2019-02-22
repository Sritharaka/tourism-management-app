<?php
require_once('app/models/hotel.php');
require_once('app/models/package.php');
$detail = "Suspendisse potenti. In faucibus massa. Lorem ipsum
dolor sit amet, consectetur adipiscing elit. Nullam eu convallis tortor.
Lorem ipsum dolor sit amet.";
$hotels = array(
	new Hotel("Hotel 1", 1000, $detail, "images/hotel_1.jpg"),
	new Hotel("Hotel 2", 1200, $detail, "images/hotel_2.jpg"),
	new Hotel("Hotel 3", 1300, $detail, "images/hotel_3.jpg"),
);

$packages = array(
	new Package("1 Day", 10002, 5, "images/Yala.jpg"),
	new Package("2 Day", 10002, 5, "images/Yala.jpg"),
	new Package("3 Day", 10002, 5, "images/Yala.jpg"),
);


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Hotel</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Travelix Project">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
    <link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="styles/main_styles.css">
    <link rel="stylesheet" type="text/css" href="styles/hotel_styles.css">
    <link rel="stylesheet" type="text/css" href="styles/offers_responsive.css">
</head>

<body>

    <div class="super_container">

        <!-- Header -->

        <header class="header">

            <!-- Top Bar -->

            <div class="top_bar">
                <div class="container">
                    <div class="row">
                        <div class="col d-flex flex-row">
                            <div class="phone">0719872900</div>
                            <div class="social">
                                <ul class="social_list">
                                    <li class="social_list_item"><a href="https://www.pinterest.com/"><i
                                                class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                                    <li class="social_list_item"><a href="https://www.facebook.com/"><i
                                                class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                    <li class="social_list_item"><a href="https://twitter.com/"><i class="fa fa-twitter"
                                                aria-hidden="true"></i></a></li>
                                    <li class="social_list_item"><a href="https://www.linkedin.com/"><i
                                                class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                    <li class="social_list_item"><a href="https://www.linkedin.com/"><i
                                                class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                            <div class="user_box ml-auto">
                                <div class="user_box_login user_box_link"><a href="#">login</a></div>
                                <div class="user_box_register user_box_link"><a href="registration.php">register</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Main Navigation -->

            <nav class="main_nav">
                <div class="container">
                    <div class="row">
                        <div class="col main_nav_col d-flex flex-row align-items-center justify-content-start">
                            <div class="logo_container">
                                <div class="logo"><a href="#"><img src="images/gayana.png" alt="">Gayana</a></div>
                            </div>
                            <div class="main_nav_container ml-auto">
                                <ul class="main_nav_list">
                                    <li class="main_nav_item"><a href="index.php">Home</a></li>
                                    <li class="main_nav_item"><a href="about.html">Tour</a></li>
                                    <li class="main_nav_item"><a href="offers.html">Booking</a></li>
                                    <li class="main_nav_item"><a href="#">Hotel</a></li>
                                    <li class="main_nav_item"><a href="#">About us</a></li>
                                    <li class="main_nav_item"><a href="contact.html">contact</a></li>
                                </ul>
                            </div>



                            <div class="hamburger">
                                <i class="fa fa-bars trans_200"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>

        </header>

        <div class="menu trans_500">
            <div class="menu_content d-flex flex-column align-items-center justify-content-center text-center">
                <div class="menu_close_container">
                    <div class="menu_close"></div>
                </div>
                <div class="logo menu_logo"><a href="#"><img src="images/gayana.png" alt=""></a></div>
                <ul>
                    <li class="menu_item"><a href="index.html">home</a></li>
                    <li class="menu_item"><a href="about.html">about us</a></li>
                    <li class="menu_item"><a href="#">hotel</a></li>
                    <li class="menu_item"><a href="blog.html">news</a></li>
                    <li class="menu_item"><a href="contact.html">contact</a></li>
                </ul>
            </div>
        </div>

        <!-- Home -->

        <div class="home">
            <div class="home_background parallax-window" data-parallax="scroll"
                data-image-src="images/about_background.jpg"></div>
            <div class="home_content">
                <div class="home_title">Packages</div>
            </div>
        </div>

        <!-- Offers -->

        <div class="offers">

            <!-- Search -->

            <div class="search">
                <div class="search_inner">

                    <!-- Search Contents -->

                    <div class="container fill_height no-padding">
                        <div class="row fill_height no-margin">
                            <div class="col fill_height no-padding">

                                <!-- Search Tabs -->


                                <!-- Search Panel -->



                                <!-- Search Panel -->

                                <div class="search_panel">
                                    <form action="#" id="search_form_2"
                                        class="search_panel_content d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-lg-between justify-content-start">
                                        <div class="search_item">
                                            <div>destination</div>
                                            <input type="text" class="destination search_input" required="required">
                                        </div>
                                        <div class="search_item">
                                            <div>check in</div>
                                            <input type="text" class="check_in search_input" placeholder="YYYY-MM-DD">
                                        </div>
                                        <div class="search_item">
                                            <div>check out</div>
                                            <input type="text" class="check_out search_input" placeholder="YYYY-MM-DD">
                                        </div>
                                        <div class="search_item">
                                            <div>adults</div>
                                            <select name="adults" id="adults_2"
                                                class="dropdown_item_select search_input">
                                                <option>01</option>
                                                <option>02</option>
                                                <option>03</option>
                                            </select>
                                        </div>
                                        <div class="search_item">
                                            <div>children</div>
                                            <select name="children" id="children_2"
                                                class="dropdown_item_select search_input">
                                                <option>0</option>
                                                <option>02</option>
                                                <option>03</option>
                                            </select>
                                        </div>
                                        <button
                                            class="button search_button">search<span></span><span></span><span></span></button>
                                    </form>
                                </div>

                                <!-- Search Panel -->

                                <div class="search_panel">
                                    <form action="#" id="search_form_3"
                                        class="search_panel_content d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-lg-between justify-content-start">
                                        <div class="search_item">
                                            <div>destination</div>
                                            <input type="text" class="destination search_input" required="required">
                                        </div>
                                        <div class="search_item">
                                            <div>check in</div>
                                            <input type="text" class="check_in search_input" placeholder="YYYY-MM-DD">
                                        </div>
                                        <div class="search_item">
                                            <div>check out</div>
                                            <input type="text" class="check_out search_input" placeholder="YYYY-MM-DD">
                                        </div>
                                        <div class="search_item">
                                            <div>adults</div>
                                            <select name="adults" id="adults_3"
                                                class="dropdown_item_select search_input">
                                                <option>01</option>
                                                <option>02</option>
                                                <option>03</option>
                                            </select>
                                        </div>
                                        <div class="search_item">
                                            <div>children</div>
                                            <select name="children" id="children_3"
                                                class="dropdown_item_select search_input">
                                                <option>0</option>
                                                <option>02</option>
                                                <option>03</option>
                                            </select>
                                        </div>
                                        <button
                                            class="button search_button">search<span></span><span></span><span></span></button>
                                    </form>
                                </div>

                                <!-- Search Panel -->

                                <div class="search_panel">
                                    <form action="#" id="search_form_4"
                                        class="search_panel_content d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-lg-between justify-content-start">
                                        <div class="search_item">
                                            <div>destination</div>
                                            <input type="text" class="destination search_input" required="required">
                                        </div>
                                        <div class="search_item">
                                            <div>check in</div>
                                            <input type="text" class="check_in search_input" placeholder="YYYY-MM-DD">
                                        </div>
                                        <div class="search_item">
                                            <div>check out</div>
                                            <input type="text" class="check_out search_input" placeholder="YYYY-MM-DD">
                                        </div>
                                        <div class="search_item">
                                            <div>adults</div>
                                            <select name="adults" id="adults_4"
                                                class="dropdown_item_select search_input">
                                                <option>01</option>
                                                <option>02</option>
                                                <option>03</option>
                                            </select>
                                        </div>
                                        <div class="search_item">
                                            <div>children</div>
                                            <select name="children" id="children_4"
                                                class="dropdown_item_select search_input">
                                                <option>0</option>
                                                <option>02</option>
                                                <option>03</option>
                                            </select>
                                        </div>
                                        <button
                                            class="button search_button">search<span></span><span></span><span></span></button>
                                    </form>
                                </div>

                                <!-- Search Panel -->

                                <div class="search_panel">
                                    <form action="#" id="search_form_5"
                                        class="search_panel_content d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-lg-between justify-content-start">
                                        <div class="search_item">
                                            <div>destination</div>
                                            <input type="text" class="destination search_input" required="required">
                                        </div>
                                        <div class="search_item">
                                            <div>check in</div>
                                            <input type="text" class="check_in search_input" placeholder="YYYY-MM-DD">
                                        </div>
                                        <div class="search_item">
                                            <div>check out</div>
                                            <input type="text" class="check_out search_input" placeholder="YYYY-MM-DD">
                                        </div>
                                        <div class="search_item">
                                            <div>adults</div>
                                            <select name="adults" id="adults_5"
                                                class="dropdown_item_select search_input">
                                                <option>01</option>
                                                <option>02</option>
                                                <option>03</option>
                                            </select>
                                        </div>
                                        <div class="search_item">
                                            <div>children</div>
                                            <select name="children" id="children_5"
                                                class="dropdown_item_select search_input">
                                                <option>0</option>
                                                <option>02</option>
                                                <option>03</option>
                                            </select>
                                        </div>
                                        <button
                                            class="button search_button">search<span></span><span></span><span></span></button>
                                    </form>
                                </div>

                                <!-- Search Panel -->

                                <div class="search_panel">
                                    <form action="#" id="search_form_6"
                                        class="search_panel_content d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-lg-between justify-content-start">
                                        <div class="search_item">
                                            <div>destination</div>
                                            <input type="text" class="destination search_input" required="required">
                                        </div>
                                        <div class="search_item">
                                            <div>check in</div>
                                            <input type="text" class="check_in search_input" placeholder="YYYY-MM-DD">
                                        </div>
                                        <div class="search_item">
                                            <div>check out</div>
                                            <input type="text" class="check_out search_input" placeholder="YYYY-MM-DD">
                                        </div>
                                        <div class="search_item">
                                            <div>adults</div>
                                            <select name="adults" id="adults_6"
                                                class="dropdown_item_select search_input">
                                                <option>01</option>
                                                <option>02</option>
                                                <option>03</option>
                                            </select>
                                        </div>
                                        <div class="search_item">
                                            <div>children</div>
                                            <select name="children" id="children_6"
                                                class="dropdown_item_select search_input">
                                                <option>0</option>
                                                <option>02</option>
                                                <option>03</option>
                                            </select>
                                        </div>
                                        <button
                                            class="button search_button">search<span></span><span></span><span></span></button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Offers -->

            <div class="container">
                <div class="row">
                    <div class="col-lg-1 temp_col"></div>
                    <div class="col-lg-11">

                        <!-- Offers Sorting -->
                        <div class="offers_sorting_container">
                            <ul class="offers_sorting">
                                <li>
                                    <span class="sorting_text">price</span>
                                    <i class="fa fa-chevron-down"></i>
                                    <ul>
                                        <li class="sort_btn" data-isotope-option='{ "sortBy": "original-order" }'
                                            data-parent=".price_sorting"><span>show all</span></li>
                                        <li class="sort_btn" data-isotope-option='{ "sortBy": "price" }'
                                            data-parent=".price_sorting"><span>ascending</span></li>
                                    </ul>
                                </li>
                                <li>
                                    <span class="sorting_text">location</span>
                                    <i class="fa fa-chevron-down"></i>
                                    <ul>
                                        <li class="sort_btn" data-isotope-option='{ "sortBy": "original-order" }'>
                                            <span>default</span></li>
                                        <li class="sort_btn" data-isotope-option='{ "sortBy": "name" }'>
                                            <span>alphabetical</span></li>
                                    </ul>
                                </li>
                                <li>
                                    <span class="sorting_text">stars</span>
                                    <i class="fa fa-chevron-down"></i>
                                    <ul>
                                        <li class="filter_btn" data-filter="*"><span>show all</span></li>
                                        <li class="sort_btn" data-isotope-option='{ "sortBy": "stars" }'>
                                            <span>ascending</span></li>
                                        <li class="filter_btn" data-filter=".rating_3"><span>3</span></li>
                                        <li class="filter_btn" data-filter=".rating_4"><span>4</span></li>
                                        <li class="filter_btn" data-filter=".rating_5"><span>5</span></li>
                                    </ul>
                                </li>
                                <li class="distance_item">
                                    <span class="sorting_text">distance from center</span>
                                    <i class="fa fa-chevron-down"></i>
                                    <ul>
                                        <li class="num_sorting_btn"><span>distance</span></li>
                                        <li class="num_sorting_btn"><span>distance</span></li>
                                        <li class="num_sorting_btn"><span>distance</span></li>
                                    </ul>
                                </li>
                                <li>
                                    <span class="sorting_text">reviews</span>
                                    <i class="fa fa-chevron-down"></i>
                                    <ul>
                                        <li class="num_sorting_btn"><span>review</span></li>
                                        <li class="num_sorting_btn"><span>review</span></li>
                                        <li class="num_sorting_btn"><span>review</span></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="intro">
                        <div class="container">
                            <div class="row intro_items">

                                <!-- Intro Item -->
								<?php foreach ($packages as $package) {?>
                                <div class="col-lg-4 intro_col">
                                    <div class="intro_item">
                                        <div class="intro_item_overlay"></div>
                                        <!-- Image by https://unsplash.com/@dnevozhai -->
                                        <div class="intro_item_background"
                                            style="background-image:url(<?php echo $package->image ?>)"></div>
                                        <div
                                            class="intro_item_content d-flex flex-column align-items-center justify-content-center">

                                            <div class="button intro_button">
                                                <div class="button_bcg"></div><a href="#">read
                                                    me<span></span><span></span><span></span></a>
                                            </div>
                                            <div class="intro_center text-center">
                                                <h1><?php echo $package->name ?></h1>
                                                <div class="intro_price">LKR <?php echo $package->price ?></div>
                                                <div class="rating rating_4">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
								<?php } ?>
                                <!-- Intro Item -->

                               

                                <!-- Intro Item -->

                                <
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12">
                        <!-- Offers Grid -->

                        <div class="offers_grid">

                            <!-- Offers Item -->
                            <?php foreach ($hotels as $hotel) {?>


                            <div class="offers_item rating_4">
                                <div class="row">
                                    <div class="col-lg-1 temp_col"></div>
                                    <div class="col-lg-3 col-1680-4">
                                        <div class="offers_image_container">
                                            <!-- Image by https://unsplash.com/@kensuarez -->
                                            <div class="offers_image_background"
                                                style="background-image:url(<?php echo $hotel->image ?>)"></div>
                                            <div class="offer_name"><a href="single_listing.html"><?php echo $hotel->name ?></a></div>
                                        </div>
                                    </div>
                                    <div class="col-lg-8">
                                        <div class="offers_content">
                                            <div class="offers_price">LKR<?php echo $hotel->price ?><span>per night</span></div>
                                            <div class="rating_r rating_r_4 offers_rating" data-rating="4">
                                                <i></i>
                                                <i></i>
                                                <i></i>
                                                <i></i>
                                                <i></i>
                                            </div>
                                            <p class="offers_text"><?php echo $hotel->details ?></p>
                                            <div class="offers_icons">
                                                <ul class="offers_icons_list">
                                                    <li class="offers_icons_item"><img src="images/post.png" alt="">
                                                    </li>
                                                    <li class="offers_icons_item"><img src="images/compass.png" alt="">
                                                    </li>
                                                    <li class="offers_icons_item"><img src="images/bicycle.png" alt="">
                                                    </li>
                                                    <li class="offers_icons_item"><img src="images/sailboat.png" alt="">
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="button book_button"><a
                                                    href="#">book<span></span><span></span><span></span></a></div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php } ?>
                            <!-- Offers Item -->

                        </div>
                    </div>

                </div>
            </div>
        </div>




        <!-- Footer -->

        <footer class="footer">
            <div class="container">
                <div class="row">

                    <!-- Footer Column -->
                    <div class="col-lg-6 footer_column">
                        <div class="footer_col">
                            <div class="footer_content footer_about">
                                <div class="logo_container footer_logo">
                                    <div class="logo"><a href="#"><img src="images/logo.png" alt="">Gayana</a></div>
                                </div>
                                <p class="footer_about_text">Discover Sri Lanka is a Sri Lankan tour operator that had
                                    been creating great vacations and amazing holidays for over 8 years with rave
                                    Reviews & Testimonials from hundreds of clients. Registered in 2008, Lakpura LLC has
                                    been in operation ever since and has been accredited by the Tourism Development
                                    Authority of Sri Lanka.</p>
                                <ul class="footer_social_list">
                                    <li class="footer_social_item"><a href="https://www.pinterest.com/"><i
                                                class="fa fa-pinterest"></i></a></li>
                                    <li class="footer_social_item"><a href="https://www.facebook.com/"><i
                                                class="fa fa-facebook-f"></i></a></li>
                                    <li class="footer_social_item"><a href="https://twitter.com/"><i
                                                class="fa fa-twitter"></i></a></li>
                                    <li class="footer_social_item"><a href="https://www.instagram.com/"><i
                                                class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                    <li class="footer_social_item"><a href="https://www.linkedin.com/"><i
                                                class="fa fa-linkedin"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Footer Column -->


                    <!-- Footer Column -->




                    <div class="col-lg-6 footer_column">
                        <div class="footer_col">
                            <div class="footer_title">contact info</div>
                            <div class="footer_content footer_contact">
                                <ul class="contact_info_list">
                                    <li class="contact_info_item d-flex flex-row">
                                        <div>
                                            <div class="contact_info_icon"><img src="images/placeholder.svg" alt="">
                                            </div>
                                        </div>
                                        <div class="contact_info_text">Gayana Hotel, <br> Medaketiya Tissa Road, <br>
                                            Tangalle.</div>
                                    </li>
                                    <li class="contact_info_item d-flex flex-row">
                                        <div>
                                            <div class="contact_info_icon"><img src="images/phone-call.svg" alt="">
                                            </div>
                                        </div>
                                        <div class="contact_info_text">0719872900</div>
                                    </li>
                                    <li class="contact_info_item d-flex flex-row">
                                        <div>
                                            <div class="contact_info_icon"><img src="images/message.svg" alt=""></div>
                                        </div>
                                        <div class="contact_info_text"><a
                                                href="mailto:contactme@gmail.com?Subject=Hello"
                                                target="_top">Gayana@gmail.com</a></div>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </footer>

        <!-- Copyright -->



        <div class="copyright">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 order-lg-2 order-2">
                        <div class="copyright_content d-flex flex-row align-items-center">
                            <div>Copyright &copy;<script>
                                document.write(new Date().getFullYear());
                                </script> All rights reserved
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9 order-lg-2 order-1">
                        <div class="footer_nav_container d-flex flex-row align-items-center justify-content-lg-end">

                        </div>
                    </div>
                </div>
            </div>
        </div>



    </div>

    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="styles/bootstrap4/popper.js"></script>
    <script src="styles/bootstrap4/bootstrap.min.js"></script>
    <script src="plugins/Isotope/isotope.pkgd.min.js"></script>
    <script src="plugins/easing/easing.js"></script>
    <script src="plugins/parallax-js-master/parallax.min.js"></script>
    <script src="js/offers_custom.js"></script>

</body>

</html>