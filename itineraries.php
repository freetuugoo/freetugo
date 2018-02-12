<?php
include_once('./db.php');
include_once('./classes/login_class.php');
?>

<!DOCTYPE html>
<!--[if IE 8]>          <html class="ie ie8"> <![endif]-->
<!--[if IE 9]>          <html class="ie ie9"> <![endif]-->
<!--[if gt IE 9]><!-->  <html> <!--<![endif]-->
<head>
    <!-- Page Title -->
    <title>fritugo - get unlimited, create your own dream itinerary for your future trip</title>
    
    <?php
        include "includes/common.php";
    ?>
    <style>
        body {
            font-family: "Myriad Pro", "Gill Sans", "Gill Sans MT", Calibri, sans-serif;
        }
    </style>
</head>
<body>
    <div id="page-wrapper">
        <header id="header" class="navbar-static-top">
            <?php
                if(Login::isLoggedIn()) {
                    include "includes/menuitinerary-loggedin.php";
                } else {
                    include "includes/menu3.php";
                }
            ?>
            
            <?php
                include "includes/menu_mobile.php";
            ?>
            <?php
                include "includes/signup.php";
            ?>
            <?php
                include "includes/login.php";
            ?>
        </header>

        <div class="page-title-container">
            <div class="container">
                <ul class="breadcrumbs pull-right">
                    <li class="active">Itineraries</li>
                </ul>
            </div>
        </div>

        <section id="content">
            <div class="container">
                <div id="main" style="padding-top:20px;">
                    <div class="gallery-filter box">
                        <a href="#" class="button btn-medium active" data-filter="filter-all" style="border-radius:30px;">All</a>
                        <a href="#" class="button btn-medium" data-filter="filter-beach" style="border-radius:30px;">Beach</a>
                        <a href="#" class="button btn-medium" data-filter="filter-mountain" style="border-radius:30px;">Mountain</a>
                        <a href="#" class="button btn-medium" data-filter="filter-museums" style="border-radius:30px;">Museums</a>
                        <a href="#" class="button btn-medium" data-filter="filter-family" style="border-radius:30px;">Family</a>
                        <a href="#" class="button btn-medium" data-filter="filter-sightseeing" style="border-radius:30px;">Sighseeing</a>
                    </div>
                    <div class="items-container isotope image-box style9 row tour-packages row add-clearfix image-box" >
                        <div class="col-sm-6 col-md-4 iso-item filter-all filter-beach filter-mountain filter-museums" style="padding-right: 5px; padding-left: 5px; border-radius:8px; width:25%;">
                            <article class="box animated" data-animation-type="fadeInLeft">
                                <figure>
                                    <a href="itinerary_user.php"><img src="images/iti_ny.jpg" alt=""></a>
                                    <figcaption>
                                        <span class="price"><img src="images/goldcoin.png" style="width:20px;"></span>
                                        <h2 class="caption-title">NY 4 days</h2>
                                    </figcaption>
                                </figure>
                            </article>
                        </div>
                        <div class="col-sm-6 col-md-4 iso-item filter-all filter-beach filter-mountain filter-museums" style="padding-right: 5px; padding-left: 5px; border-radius:8px; width:25%;">
                            <article class="box animated" data-animation-type="fadeInLeft">
                                <figure>
                                    <a href="itinerary_user.php"><img src="images/iti_ny.jpg" alt=""></a>
                                    <figcaption>
                                        <span class="price"><img src="images/goldcoin.png" style="width:20px;"></span>
                                        <h2 class="caption-title">NY 4 days</h2>
                                    </figcaption>
                                </figure>
                            </article>
                        </div>
                        <div class="col-sm-6 col-md-4 iso-item filter-all filter-museums filter-family filter-sightseeing" style="padding-right: 5px; padding-left: 5px; border-radius:8px; width:25%;">
                            <article class="box animated" data-animation-type="fadeInLeft">
                                <figure>
                                    <a href="itinerary_user.php"><img src="images/iti_rome.jpg" alt=""></a>
                                    <figcaption>
                                        <span class="price"><img src="images/goldcoin.png" style="width:20px;">&nbsp<img src="images/goldcoin.png" style="width:20px;"></span>
                                        <h2 class="caption-title">Rome!</h2>
                                    </figcaption>
                                </figure>
                            </article>
                        </div>
                        <div class="col-sm-6 col-md-4 iso-item filter-all filter-beach filter-family filter-sightseeing" style="padding-right: 5px; padding-left: 5px; border-radius:8px; width:25%;">
                            <article class="box animated" data-animation-type="fadeInLeft">
                                <figure>
                                    <a href="itinerary_user.php"><img src="images/iti_rome2.jpg" alt=""></a>
                                    <figcaption>
                                        <span class="price"><img src="images/silvercoin.png" style="width:20px;"></span>
                                        <h2 class="caption-title">Rome now!</h2>
                                    </figcaption>
                                </figure>
                            </article>
                        </div>
                        <div class="col-sm-6 col-md-4 iso-item filter-all filter-sightseeing" style="padding-right: 5px; padding-left: 5px; border-radius:8px; width:25%;">
                            <article class="box animated" data-animation-type="fadeInLeft">
                                <figure>
                                    <a href="itinerary_user.php"><img src="images/iti_tanah.jpg" alt=""></a>
                                    <figcaption>
                                        <span class="price"><img src="images/brocoin.png" style="width:20px;">&nbsp<img src="images/brocoin.png" style="width:20px;"></span>
                                        <h2 class="caption-title">Bali 3 days</h2>
                                    </figcaption>
                                </figure>
                            </article>
                        </div>
                        <div class="col-sm-6 col-md-4 iso-item filter-all filter-beach filter-family" style="padding-right: 5px; padding-left: 5px; border-radius:8px; width:25%;">
                            <article class="box animated" data-animation-type="fadeInLeft">
                                <figure>
                                    <a href="itinerary_user.php"><img src="images/des_bali.jpg" alt=""></a>
                                    <figcaption>
                                        <span class="price"><img src="images/brocoin.png" style="width:20px;">&nbsp<img src="images/brocoin.png" style="width:20px;"></span>
                                        <h2 class="caption-title">Bali 2 days</h2>
                                    </figcaption>
                                </figure>
                            </article>
                        </div>
                        <div class="col-sm-6 col-md-4 iso-item filter-all filter-museums filter-family" style="padding-right: 5px; padding-left: 5px; border-radius:8px; width:25%;">
                            <article class="box animated" data-animation-type="fadeInLeft">
                                <figure>
                                    <a href="itinerary_user.php"><img src="images/des_jap.jpg" alt=""></a>
                                    <figcaption>
                                        <span class="price"><img src="images/silvercoin.png" style="width:20px;">&nbsp<img src="images/silvercoin.png" style="width:20px;"></span>
                                        <h2 class="caption-title">Harakiri!</h2>
                                    </figcaption>
                                </figure>
                            </article>
                        </div>
                        <div class="col-sm-6 col-md-4 iso-item filter-all filter-sightseeing" style="padding-right: 5px; padding-left: 5px; border-radius:8px; width:25%;">
                            <article class="box animated" data-animation-type="fadeInLeft">
                                <figure>
                                    <a href="itinerary_user.php"><img src="images/des_hk.jpg" alt=""></a>
                                    <figcaption>
                                        <span class="price"><img src="images/goldcoin.png" style="width:20px;"></span>
                                        <h2 class="caption-title">Cingcongfan!</h2>
                                    </figcaption>
                                </figure>
                            </article>
                        </div>
                        <div class="col-sm-6 col-md-4 iso-item filter-all filter-family filter-sightseeing" style="padding-right: 5px; padding-left: 5px; border-radius:8px; width:25%;">
                            <article class="box animated" data-animation-type="fadeInLeft">
                                <figure>
                                    <a href="itinerary_user.php"><img src="images/iti_ny.jpg" alt=""></a>
                                    <figcaption>
                                        <span class="price"><img src="images/goldcoin.png" style="width:20px;"></span>
                                        <h2 class="caption-title">NY 4 days</h2>
                                    </figcaption>
                                </figure>
                            </article>
                        </div>
                        <div class="col-sm-6 col-md-4 iso-item filter-all filter-sightseeing" style="padding-right: 5px; padding-left: 5px; border-radius:8px; width:25%;">
                            <article class="box animated" data-animation-type="fadeInLeft">
                                <figure>
                                    <a href="itinerary_user.php"><img src="images/iti_rome.jpg" alt=""></a>
                                    <figcaption>
                                        <span class="price"><img src="images/goldcoin.png" style="width:20px;">&nbsp<img src="images/goldcoin.png" style="width:20px;"></span>
                                        <h2 class="caption-title">Rome!</h2>
                                    </figcaption>
                                </figure>
                            </article>
                        </div>
                        <div class="col-sm-6 col-md-4 iso-item filter-all filter-beach filter-mountain filter-museums" style="padding-right: 5px; padding-left: 5px; border-radius:8px; width:25%;">
                            <article class="box animated" data-animation-type="fadeInLeft">
                                <figure>
                                    <a href="itinerary_user.php"><img src="images/iti_ny.jpg" alt=""></a>
                                    <figcaption>
                                        <span class="price"><img src="images/goldcoin.png" style="width:20px;"></span>
                                        <h2 class="caption-title">NY 4 days</h2>
                                    </figcaption>
                                </figure>
                            </article>
                        </div>
                        <div class="col-sm-6 col-md-4 iso-item filter-all filter-beach filter-mountain filter-museums" style="padding-right: 5px; padding-left: 5px; border-radius:8px; width:25%;">
                            <article class="box animated" data-animation-type="fadeInLeft">
                                <figure>
                                    <a href="itinerary_user.php"><img src="images/iti_ny.jpg" alt=""></a>
                                    <figcaption>
                                        <span class="price"><img src="images/goldcoin.png" style="width:20px;"></span>
                                        <h2 class="caption-title">NY 4 days</h2>
                                    </figcaption>
                                </figure>
                            </article>
                        </div>
                        <div class="col-sm-6 col-md-4 iso-item filter-all filter-museums filter-family filter-sightseeing" style="padding-right: 5px; padding-left: 5px; border-radius:8px; width:25%;">
                            <article class="box animated" data-animation-type="fadeInLeft">
                                <figure>
                                    <a href="itinerary_user.php"><img src="images/iti_rome.jpg" alt=""></a>
                                    <figcaption>
                                        <span class="price"><img src="images/goldcoin.png" style="width:20px;">&nbsp<img src="images/goldcoin.png" style="width:20px;"></span>
                                        <h2 class="caption-title">Rome!</h2>
                                    </figcaption>
                                </figure>
                            </article>
                        </div>
                        <div class="col-sm-6 col-md-4 iso-item filter-all filter-beach filter-family filter-sightseeing" style="padding-right: 5px; padding-left: 5px; border-radius:8px; width:25%;">
                            <article class="box animated" data-animation-type="fadeInLeft">
                                <figure>
                                    <a href="itinerary_user.php"><img src="images/iti_rome2.jpg" alt=""></a>
                                    <figcaption>
                                        <span class="price"><img src="images/silvercoin.png" style="width:20px;"></span>
                                        <h2 class="caption-title">Rome now!</h2>
                                    </figcaption>
                                </figure>
                            </article>
                        </div>
                        <div class="col-sm-6 col-md-4 iso-item filter-all filter-sightseeing" style="padding-right: 5px; padding-left: 5px; border-radius:8px; width:25%;">
                            <article class="box animated" data-animation-type="fadeInLeft">
                                <figure>
                                    <a href="itinerary_user.php"><img src="images/iti_tanah.jpg" alt=""></a>
                                    <figcaption>
                                        <span class="price"><img src="images/brocoin.png" style="width:20px;">&nbsp<img src="images/brocoin.png" style="width:20px;"></span>
                                        <h2 class="caption-title">Bali 3 days</h2>
                                    </figcaption>
                                </figure>
                            </article>
                        </div>
                        <div class="col-sm-6 col-md-4 iso-item filter-all filter-beach filter-family" style="padding-right: 5px; padding-left: 5px; border-radius:8px; width:25%;">
                            <article class="box animated" data-animation-type="fadeInLeft">
                                <figure>
                                    <a href="itinerary_user.php"><img src="images/des_bali.jpg" alt=""></a>
                                    <figcaption>
                                        <span class="price"><img src="images/brocoin.png" style="width:20px;">&nbsp<img src="images/brocoin.png" style="width:20px;"></span>
                                        <h2 class="caption-title">Bali 2 days</h2>
                                    </figcaption>
                                </figure>
                            </article>
                        </div>
                        <div class="col-sm-6 col-md-4 iso-item filter-all filter-museums filter-family" style="padding-right: 5px; padding-left: 5px; border-radius:8px; width:25%;">
                            <article class="box animated" data-animation-type="fadeInLeft">
                                <figure>
                                    <a href="itinerary_user.php"><img src="images/des_jap.jpg" alt=""></a>
                                    <figcaption>
                                        <span class="price"><img src="images/silvercoin.png" style="width:20px;">&nbsp<img src="images/silvercoin.png" style="width:20px;"></span>
                                        <h2 class="caption-title">Harakiri!</h2>
                                    </figcaption>
                                </figure>
                            </article>
                        </div>
                        <div class="col-sm-6 col-md-4 iso-item filter-all filter-sightseeing" style="padding-right: 5px; padding-left: 5px; border-radius:8px; width:25%;">
                            <article class="box animated" data-animation-type="fadeInLeft">
                                <figure>
                                    <a href="itinerary_user.php"><img src="images/des_hk.jpg" alt=""></a>
                                    <figcaption>
                                        <span class="price"><img src="images/goldcoin.png" style="width:20px;"></span>
                                        <h2 class="caption-title">Cingcongfan!</h2>
                                    </figcaption>
                                </figure>
                            </article>
                        </div>
                        <div class="col-sm-6 col-md-4 iso-item filter-all filter-family filter-sightseeing" style="padding-right: 5px; padding-left: 5px; border-radius:8px; width:25%;">
                            <article class="box animated" data-animation-type="fadeInLeft">
                                <figure>
                                    <a href="itinerary_user.php"><img src="images/iti_ny.jpg" alt=""></a>
                                    <figcaption>
                                        <span class="price"><img src="images/goldcoin.png" style="width:20px;"></span>
                                        <h2 class="caption-title">NY 4 days</h2>
                                    </figcaption>
                                </figure>
                            </article>
                        </div>
                        <div class="col-sm-6 col-md-4 iso-item filter-all filter-sightseeing" style="padding-right: 5px; padding-left: 5px; border-radius:8px; width:25%;">
                            <article class="box animated" data-animation-type="fadeInLeft">
                                <figure>
                                    <a href="itinerary_user.php"><img src="images/iti_rome.jpg" alt=""></a>
                                    <figcaption>
                                        <span class="price"><img src="images/goldcoin.png" style="width:20px;">&nbsp<img src="images/goldcoin.png" style="width:20px;"></span>
                                        <h2 class="caption-title">Rome!</h2>
                                    </figcaption>
                                </figure>
                            </article>
                        </div>
                        <div class="col-sm-6 col-md-4 iso-item filter-all filter-beach filter-mountain filter-museums" style="padding-right: 5px; padding-left: 5px; border-radius:8px; width:25%;">
                            <article class="box animated" data-animation-type="fadeInLeft">
                                <figure>
                                    <a href="itinerary_user.php"><img src="images/iti_ny.jpg" alt=""></a>
                                    <figcaption>
                                        <span class="price"><img src="images/goldcoin.png" style="width:20px;"></span>
                                        <h2 class="caption-title">NY 4 days</h2>
                                    </figcaption>
                                </figure>
                            </article>
                        </div>
                        <div class="col-sm-6 col-md-4 iso-item filter-all filter-beach filter-mountain filter-museums" style="padding-right: 5px; padding-left: 5px; border-radius:8px; width:25%;">
                            <article class="box animated" data-animation-type="fadeInLeft">
                                <figure>
                                    <a href="itinerary_user.php"><img src="images/iti_ny.jpg" alt=""></a>
                                    <figcaption>
                                        <span class="price"><img src="images/goldcoin.png" style="width:20px;"></span>
                                        <h2 class="caption-title">NY 4 days</h2>
                                    </figcaption>
                                </figure>
                            </article>
                        </div>
                        <div class="col-sm-6 col-md-4 iso-item filter-all filter-museums filter-family filter-sightseeing" style="padding-right: 5px; padding-left: 5px; border-radius:8px; width:25%;">
                            <article class="box animated" data-animation-type="fadeInLeft">
                                <figure>
                                    <a href="itinerary_user.php"><img src="images/iti_rome.jpg" alt=""></a>
                                    <figcaption>
                                        <span class="price"><img src="images/goldcoin.png" style="width:20px;">&nbsp<img src="images/goldcoin.png" style="width:20px;"></span>
                                        <h2 class="caption-title">Rome!</h2>
                                    </figcaption>
                                </figure>
                            </article>
                        </div>
                        <div class="col-sm-6 col-md-4 iso-item filter-all filter-beach filter-family filter-sightseeing" style="padding-right: 5px; padding-left: 5px; border-radius:8px; width:25%;">
                            <article class="box animated" data-animation-type="fadeInLeft">
                                <figure>
                                    <a href="itinerary_user.php"><img src="images/iti_rome2.jpg" alt=""></a>
                                    <figcaption>
                                        <span class="price"><img src="images/silvercoin.png" style="width:20px;"></span>
                                        <h2 class="caption-title">Rome now!</h2>
                                    </figcaption>
                                </figure>
                            </article>
                        </div>
                        <div class="col-sm-6 col-md-4 iso-item filter-all filter-sightseeing" style="padding-right: 5px; padding-left: 5px; border-radius:8px; width:25%;">
                            <article class="box animated" data-animation-type="fadeInLeft">
                                <figure>
                                    <a href="itinerary_user.php"><img src="images/iti_tanah.jpg" alt=""></a>
                                    <figcaption>
                                        <span class="price"><img src="images/brocoin.png" style="width:20px;">&nbsp<img src="images/brocoin.png" style="width:20px;"></span>
                                        <h2 class="caption-title">Bali 3 days</h2>
                                    </figcaption>
                                </figure>
                            </article>
                        </div>
                        <div class="col-sm-6 col-md-4 iso-item filter-all filter-beach filter-family" style="padding-right: 5px; padding-left: 5px; border-radius:8px; width:25%;">
                            <article class="box animated" data-animation-type="fadeInLeft">
                                <figure>
                                    <a href="itinerary_user.php"><img src="images/des_bali.jpg" alt=""></a>
                                    <figcaption>
                                        <span class="price"><img src="images/brocoin.png" style="width:20px;">&nbsp<img src="images/brocoin.png" style="width:20px;"></span>
                                        <h2 class="caption-title">Bali 2 days</h2>
                                    </figcaption>
                                </figure>
                            </article>
                        </div>
                        <div class="col-sm-6 col-md-4 iso-item filter-all filter-museums filter-family" style="padding-right: 5px; padding-left: 5px; border-radius:8px; width:25%;">
                            <article class="box animated" data-animation-type="fadeInLeft">
                                <figure>
                                    <a href="itinerary_user.php"><img src="images/des_jap.jpg" alt=""></a>
                                    <figcaption>
                                        <span class="price"><img src="images/silvercoin.png" style="width:20px;">&nbsp<img src="images/silvercoin.png" style="width:20px;"></span>
                                        <h2 class="caption-title">Harakiri!</h2>
                                    </figcaption>
                                </figure>
                            </article>
                        </div>
                        <div class="col-sm-6 col-md-4 iso-item filter-all filter-sightseeing" style="padding-right: 5px; padding-left: 5px; border-radius:8px; width:25%;">
                            <article class="box animated" data-animation-type="fadeInLeft">
                                <figure>
                                    <a href="itinerary_user.php"><img src="images/des_hk.jpg" alt=""></a>
                                    <figcaption>
                                        <span class="price"><img src="images/goldcoin.png" style="width:20px;"></span>
                                        <h2 class="caption-title">Cingcongfan!</h2>
                                    </figcaption>
                                </figure>
                            </article>
                        </div>
                        <div class="col-sm-6 col-md-4 iso-item filter-all filter-family filter-sightseeing" style="padding-right: 5px; padding-left: 5px; border-radius:8px; width:25%;">
                            <article class="box animated" data-animation-type="fadeInLeft">
                                <figure>
                                    <a href="itinerary_user.php"><img src="images/iti_ny.jpg" alt=""></a>
                                    <figcaption>
                                        <span class="price"><img src="images/goldcoin.png" style="width:20px;"></span>
                                        <h2 class="caption-title">NY 4 days</h2>
                                    </figcaption>
                                </figure>
                            </article>
                        </div>
                        <div class="col-sm-6 col-md-4 iso-item filter-all filter-sightseeing" style="padding-right: 5px; padding-left: 5px; border-radius:8px; width:25%;">
                            <article class="box animated" data-animation-type="fadeInLeft">
                                <figure>
                                    <a href="itinerary_user.php"><img src="images/iti_rome.jpg" alt=""></a>
                                    <figcaption>
                                        <span class="price"><img src="images/goldcoin.png" style="width:20px;">&nbsp<img src="images/goldcoin.png" style="width:20px;"></span>
                                        <h2 class="caption-title">Rome!</h2>
                                    </figcaption>
                                </figure>
                            </article>
                        </div>
                        <div class="col-sm-6 col-md-4 iso-item filter-all filter-beach filter-mountain filter-museums" style="padding-right: 5px; padding-left: 5px; border-radius:8px; width:25%;">
                            <article class="box animated" data-animation-type="fadeInLeft">
                                <figure>
                                    <a href="itinerary_user.php"><img src="images/iti_ny.jpg" alt=""></a>
                                    <figcaption>
                                        <span class="price"><img src="images/goldcoin.png" style="width:20px;"></span>
                                        <h2 class="caption-title">NY 4 days</h2>
                                    </figcaption>
                                </figure>
                            </article>
                        </div>
                        <div class="col-sm-6 col-md-4 iso-item filter-all filter-beach filter-mountain filter-museums" style="padding-right: 5px; padding-left: 5px; border-radius:8px; width:25%;">
                            <article class="box animated" data-animation-type="fadeInLeft">
                                <figure>
                                    <a href="itinerary_user.php"><img src="images/iti_ny.jpg" alt=""></a>
                                    <figcaption>
                                        <span class="price"><img src="images/goldcoin.png" style="width:20px;"></span>
                                        <h2 class="caption-title">NY 4 days</h2>
                                    </figcaption>
                                </figure>
                            </article>
                        </div>
                        <div class="col-sm-6 col-md-4 iso-item filter-all filter-museums filter-family filter-sightseeing" style="padding-right: 5px; padding-left: 5px; border-radius:8px; width:25%;">
                            <article class="box animated" data-animation-type="fadeInLeft">
                                <figure>
                                    <a href="itinerary_user.php"><img src="images/iti_rome.jpg" alt=""></a>
                                    <figcaption>
                                        <span class="price"><img src="images/goldcoin.png" style="width:20px;">&nbsp<img src="images/goldcoin.png" style="width:20px;"></span>
                                        <h2 class="caption-title">Rome!</h2>
                                    </figcaption>
                                </figure>
                            </article>
                        </div>
                        <div class="col-sm-6 col-md-4 iso-item filter-all filter-beach filter-family filter-sightseeing" style="padding-right: 5px; padding-left: 5px; border-radius:8px; width:25%;">
                            <article class="box animated" data-animation-type="fadeInLeft">
                                <figure>
                                    <a href="itinerary_user.php"><img src="images/iti_rome2.jpg" alt=""></a>
                                    <figcaption>
                                        <span class="price"><img src="images/silvercoin.png" style="width:20px;"></span>
                                        <h2 class="caption-title">Rome now!</h2>
                                    </figcaption>
                                </figure>
                            </article>
                        </div>
                        <div class="col-sm-6 col-md-4 iso-item filter-all filter-sightseeing" style="padding-right: 5px; padding-left: 5px; border-radius:8px; width:25%;">
                            <article class="box animated" data-animation-type="fadeInLeft">
                                <figure>
                                    <a href="itinerary_user.php"><img src="images/iti_tanah.jpg" alt=""></a>
                                    <figcaption>
                                        <span class="price"><img src="images/brocoin.png" style="width:20px;">&nbsp<img src="images/brocoin.png" style="width:20px;"></span>
                                        <h2 class="caption-title">Bali 3 days</h2>
                                    </figcaption>
                                </figure>
                            </article>
                        </div>
                        <div class="col-sm-6 col-md-4 iso-item filter-all filter-beach filter-family" style="padding-right: 5px; padding-left: 5px; border-radius:8px; width:25%;">
                            <article class="box animated" data-animation-type="fadeInLeft">
                                <figure>
                                    <a href="itinerary_user.php"><img src="images/des_bali.jpg" alt=""></a>
                                    <figcaption>
                                        <span class="price"><img src="images/brocoin.png" style="width:20px;">&nbsp<img src="images/brocoin.png" style="width:20px;"></span>
                                        <h2 class="caption-title">Bali 2 days</h2>
                                    </figcaption>
                                </figure>
                            </article>
                        </div>
                        <div class="col-sm-6 col-md-4 iso-item filter-all filter-museums filter-family" style="padding-right: 5px; padding-left: 5px; border-radius:8px; width:25%;">
                            <article class="box animated" data-animation-type="fadeInLeft">
                                <figure>
                                    <a href="itinerary_user.php"><img src="images/des_jap.jpg" alt=""></a>
                                    <figcaption>
                                        <span class="price"><img src="images/silvercoin.png" style="width:20px;">&nbsp<img src="images/silvercoin.png" style="width:20px;"></span>
                                        <h2 class="caption-title">Harakiri!</h2>
                                    </figcaption>
                                </figure>
                            </article>
                        </div>
                        <div class="col-sm-6 col-md-4 iso-item filter-all filter-sightseeing" style="padding-right: 5px; padding-left: 5px; border-radius:8px; width:25%;">
                            <article class="box animated" data-animation-type="fadeInLeft">
                                <figure>
                                    <a href="itinerary_user.php"><img src="images/des_hk.jpg" alt=""></a>
                                    <figcaption>
                                        <span class="price"><img src="images/goldcoin.png" style="width:20px;"></span>
                                        <h2 class="caption-title">Cingcongfan!</h2>
                                    </figcaption>
                                </figure>
                            </article>
                        </div>
                        <div class="col-sm-6 col-md-4 iso-item filter-all filter-family filter-sightseeing" style="padding-right: 5px; padding-left: 5px; border-radius:8px; width:25%;">
                            <article class="box animated" data-animation-type="fadeInLeft">
                                <figure>
                                    <a href="itinerary_user.php"><img src="images/iti_ny.jpg" alt=""></a>
                                    <figcaption>
                                        <span class="price"><img src="images/goldcoin.png" style="width:20px;"></span>
                                        <h2 class="caption-title">NY 4 days</h2>
                                    </figcaption>
                                </figure>
                            </article>
                        </div>
                        <div class="col-sm-6 col-md-4 iso-item filter-all filter-sightseeing" style="padding-right: 5px; padding-left: 5px; border-radius:8px; width:25%;">
                            <article class="box animated" data-animation-type="fadeInLeft">
                                <figure>
                                    <a href="itinerary_user.php"><img src="images/iti_rome.jpg" alt=""></a>
                                    <figcaption>
                                        <span class="price"><img src="images/goldcoin.png" style="width:20px;">&nbsp<img src="images/goldcoin.png" style="width:20px;"></span>
                                        <h2 class="caption-title">Rome!</h2>
                                    </figcaption>
                                </figure>
                            </article>
                        </div>
                        <div class="col-sm-6 col-md-4 iso-item filter-all filter-beach filter-mountain filter-museums" style="padding-right: 5px; padding-left: 5px; border-radius:8px; width:25%;">
                            <article class="box animated" data-animation-type="fadeInLeft">
                                <figure>
                                    <a href="itinerary_user.php"><img src="images/iti_ny.jpg" alt=""></a>
                                    <figcaption>
                                        <span class="price"><img src="images/goldcoin.png" style="width:20px;"></span>
                                        <h2 class="caption-title">NY 4 days</h2>
                                    </figcaption>
                                </figure>
                            </article>
                        </div>
                        <div class="col-sm-6 col-md-4 iso-item filter-all filter-beach filter-mountain filter-museums" style="padding-right: 5px; padding-left: 5px; border-radius:8px; width:25%;">
                            <article class="box animated" data-animation-type="fadeInLeft">
                                <figure>
                                    <a href="itinerary_user.php"><img src="images/iti_ny.jpg" alt=""></a>
                                    <figcaption>
                                        <span class="price"><img src="images/goldcoin.png" style="width:20px;"></span>
                                        <h2 class="caption-title">NY 4 days</h2>
                                    </figcaption>
                                </figure>
                            </article>
                        </div>
                        <div class="col-sm-6 col-md-4 iso-item filter-all filter-museums filter-family filter-sightseeing" style="padding-right: 5px; padding-left: 5px; border-radius:8px; width:25%;">
                            <article class="box animated" data-animation-type="fadeInLeft">
                                <figure>
                                    <a href="itinerary_user.php"><img src="images/iti_rome.jpg" alt=""></a>
                                    <figcaption>
                                        <span class="price"><img src="images/goldcoin.png" style="width:20px;">&nbsp<img src="images/goldcoin.png" style="width:20px;"></span>
                                        <h2 class="caption-title">Rome!</h2>
                                    </figcaption>
                                </figure>
                            </article>
                        </div>
                        <div class="col-sm-6 col-md-4 iso-item filter-all filter-beach filter-family filter-sightseeing" style="padding-right: 5px; padding-left: 5px; border-radius:8px; width:25%;">
                            <article class="box animated" data-animation-type="fadeInLeft">
                                <figure>
                                    <a href="itinerary_user.php"><img src="images/iti_rome2.jpg" alt=""></a>
                                    <figcaption>
                                        <span class="price"><img src="images/silvercoin.png" style="width:20px;"></span>
                                        <h2 class="caption-title">Rome now!</h2>
                                    </figcaption>
                                </figure>
                            </article>
                        </div>
                        <div class="col-sm-6 col-md-4 iso-item filter-all filter-sightseeing" style="padding-right: 5px; padding-left: 5px; border-radius:8px; width:25%;">
                            <article class="box animated" data-animation-type="fadeInLeft">
                                <figure>
                                    <a href="itinerary_user.php"><img src="images/iti_tanah.jpg" alt=""></a>
                                    <figcaption>
                                        <span class="price"><img src="images/brocoin.png" style="width:20px;">&nbsp<img src="images/brocoin.png" style="width:20px;"></span>
                                        <h2 class="caption-title">Bali 3 days</h2>
                                    </figcaption>
                                </figure>
                            </article>
                        </div>
                        <div class="col-sm-6 col-md-4 iso-item filter-all filter-beach filter-family" style="padding-right: 5px; padding-left: 5px; border-radius:8px; width:25%;">
                            <article class="box animated" data-animation-type="fadeInLeft">
                                <figure>
                                    <a href="itinerary_user.php"><img src="images/des_bali.jpg" alt=""></a>
                                    <figcaption>
                                        <span class="price"><img src="images/brocoin.png" style="width:20px;">&nbsp<img src="images/brocoin.png" style="width:20px;"></span>
                                        <h2 class="caption-title">Bali 2 days</h2>
                                    </figcaption>
                                </figure>
                            </article>
                        </div>
                        <div class="col-sm-6 col-md-4 iso-item filter-all filter-museums filter-family" style="padding-right: 5px; padding-left: 5px; border-radius:8px; width:25%;">
                            <article class="box animated" data-animation-type="fadeInLeft">
                                <figure>
                                    <a href="itinerary_user.php"><img src="images/des_jap.jpg" alt=""></a>
                                    <figcaption>
                                        <span class="price"><img src="images/silvercoin.png" style="width:20px;">&nbsp<img src="images/silvercoin.png" style="width:20px;"></span>
                                        <h2 class="caption-title">Harakiri!</h2>
                                    </figcaption>
                                </figure>
                            </article>
                        </div>
                        <div class="col-sm-6 col-md-4 iso-item filter-all filter-sightseeing" style="padding-right: 5px; padding-left: 5px; border-radius:8px; width:25%;">
                            <article class="box animated" data-animation-type="fadeInLeft">
                                <figure>
                                    <a href="itinerary_user.php"><img src="images/des_hk.jpg" alt=""></a>
                                    <figcaption>
                                        <span class="price"><img src="images/goldcoin.png" style="width:20px;"></span>
                                        <h2 class="caption-title">Cingcongfan!</h2>
                                    </figcaption>
                                </figure>
                            </article>
                        </div>
                        <div class="col-sm-6 col-md-4 iso-item filter-all filter-family filter-sightseeing" style="padding-right: 5px; padding-left: 5px; border-radius:8px; width:25%;">
                            <article class="box animated" data-animation-type="fadeInLeft">
                                <figure>
                                    <a href="itinerary_user.php"><img src="images/iti_ny.jpg" alt=""></a>
                                    <figcaption>
                                        <span class="price"><img src="images/goldcoin.png" style="width:20px;"></span>
                                        <h2 class="caption-title">NY 4 days</h2>
                                    </figcaption>
                                </figure>
                            </article>
                        </div>
                        <div class="col-sm-6 col-md-4 iso-item filter-all filter-sightseeing" style="padding-right: 5px; padding-left: 5px; border-radius:8px; width:25%;">
                            <article class="box animated" data-animation-type="fadeInLeft">
                                <figure>
                                    <a href="itinerary_user.php"><img src="images/iti_rome.jpg" alt=""></a>
                                    <figcaption>
                                        <span class="price"><img src="images/goldcoin.png" style="width:20px;">&nbsp<img src="images/goldcoin.png" style="width:20px;"></span>
                                        <h2 class="caption-title">Rome!</h2>
                                    </figcaption>
                                </figure>
                            </article>
                        </div>
                        <div class="col-sm-6 col-md-4 iso-item filter-all filter-museums filter-family" style="padding-right: 5px; padding-left: 5px; border-radius:8px; width:25%;">
                            <article class="box animated" data-animation-type="fadeInLeft">
                                <figure>
                                    <a href="itinerary_user.php"><img src="images/des_jap.jpg" alt=""></a>
                                    <figcaption>
                                        <span class="price"><img src="images/silvercoin.png" style="width:20px;">&nbsp<img src="images/silvercoin.png" style="width:20px;"></span>
                                        <h2 class="caption-title">Harakiri!</h2>
                                    </figcaption>
                                </figure>
                            </article>
                        </div>
                        <div class="col-sm-6 col-md-4 iso-item filter-all filter-sightseeing" style="padding-right: 5px; padding-left: 5px; border-radius:8px; width:25%;">
                            <article class="box animated" data-animation-type="fadeInLeft">
                                <figure>
                                    <a href="itinerary_user.php"><img src="images/des_hk.jpg" alt=""></a>
                                    <figcaption>
                                        <span class="price"><img src="images/goldcoin.png" style="width:20px;"></span>
                                        <h2 class="caption-title">Cingcongfan!</h2>
                                    </figcaption>
                                </figure>
                            </article>
                        </div>
                        <div class="col-sm-6 col-md-4 iso-item filter-all filter-family filter-sightseeing" style="padding-right: 5px; padding-left: 5px; border-radius:8px; width:25%;">
                            <article class="box animated" data-animation-type="fadeInLeft">
                                <figure>
                                    <a href="itinerary_user.php"><img src="images/iti_ny.jpg" alt=""></a>
                                    <figcaption>
                                        <span class="price"><img src="images/goldcoin.png" style="width:20px;"></span>
                                        <h2 class="caption-title">NY 4 days</h2>
                                    </figcaption>
                                </figure>
                            </article>
                        </div>
                        <div class="col-sm-6 col-md-4 iso-item filter-all filter-sightseeing" style="padding-right: 5px; padding-left: 5px; border-radius:8px; width:25%;">
                            <article class="box animated" data-animation-type="fadeInLeft">
                                <figure>
                                    <a href="itinerary_user.php"><img src="images/iti_rome.jpg" alt=""></a>
                                    <figcaption>
                                        <span class="price"><img src="images/goldcoin.png" style="width:20px;">&nbsp<img src="images/goldcoin.png" style="width:20px;"></span>
                                        <h2 class="caption-title">Rome!</h2>
                                    </figcaption>
                                </figure>
                            </article>
                        </div>
                        <div class="col-sm-6 col-md-4 iso-item filter-all filter-museums filter-family" style="padding-right: 5px; padding-left: 5px; border-radius:8px; width:25%;">
                            <article class="box animated" data-animation-type="fadeInLeft">
                                <figure>
                                    <a href="itinerary_user.php"><img src="images/des_jap.jpg" alt=""></a>
                                    <figcaption>
                                        <span class="price"><img src="images/silvercoin.png" style="width:20px;">&nbsp<img src="images/silvercoin.png" style="width:20px;"></span>
                                        <h2 class="caption-title">Harakiri!</h2>
                                    </figcaption>
                                </figure>
                            </article>
                        </div>
                        <div class="col-sm-6 col-md-4 iso-item filter-all filter-sightseeing" style="padding-right: 5px; padding-left: 5px; border-radius:8px; width:25%;">
                            <article class="box animated" data-animation-type="fadeInLeft">
                                <figure>
                                    <a href="itinerary_user.php"><img src="images/des_hk.jpg" alt=""></a>
                                    <figcaption>
                                        <span class="price"><img src="images/goldcoin.png" style="width:20px;"></span>
                                        <h2 class="caption-title">Cingcongfan!</h2>
                                    </figcaption>
                                </figure>
                            </article>
                        </div>
                        <div class="col-sm-6 col-md-4 iso-item filter-all filter-family filter-sightseeing" style="padding-right: 5px; padding-left: 5px; border-radius:8px; width:25%;">
                            <article class="box animated" data-animation-type="fadeInLeft">
                                <figure>
                                    <a href="itinerary_user.php"><img src="images/iti_ny.jpg" alt=""></a>
                                    <figcaption>
                                        <span class="price"><img src="images/goldcoin.png" style="width:20px;"></span>
                                        <h2 class="caption-title">NY 4 days</h2>
                                    </figcaption>
                                </figure>
                            </article>
                        </div>
                        <div class="col-sm-6 col-md-4 iso-item filter-all filter-sightseeing" style="padding-right: 5px; padding-left: 5px; border-radius:8px; width:25%;">
                            <article class="box animated" data-animation-type="fadeInLeft">
                                <figure>
                                    <a href="itinerary_user.php"><img src="images/iti_rome.jpg" alt=""></a>
                                    <figcaption>
                                        <span class="price"><img src="images/goldcoin.png" style="width:20px;">&nbsp<img src="images/goldcoin.png" style="width:20px;"></span>
                                        <h2 class="caption-title">Rome!</h2>
                                    </figcaption>
                                </figure>
                            </article>
                        </div>
                        <div class="col-sm-6 col-md-4 iso-item filter-all filter-beach filter-mountain filter-museums" style="padding-right: 5px; padding-left: 5px; border-radius:8px; width:25%;">
                            <article class="box animated" data-animation-type="fadeInLeft">
                                <figure>
                                    <a href="itinerary_user.php"><img src="images/iti_ny.jpg" alt=""></a>
                                    <figcaption>
                                        <span class="price"><img src="images/goldcoin.png" style="width:20px;"></span>
                                        <h2 class="caption-title">NY 4 days</h2>
                                    </figcaption>
                                </figure>
                            </article>
                        </div>
                        <div class="col-sm-6 col-md-4 iso-item filter-all filter-beach filter-mountain filter-museums" style="padding-right: 5px; padding-left: 5px; border-radius:8px; width:25%;">
                            <article class="box animated" data-animation-type="fadeInLeft">
                                <figure>
                                    <a href="itinerary_user.php"><img src="images/iti_ny.jpg" alt=""></a>
                                    <figcaption>
                                        <span class="price"><img src="images/goldcoin.png" style="width:20px;"></span>
                                        <h2 class="caption-title">NY 4 days</h2>
                                    </figcaption>
                                </figure>
                            </article>
                        </div>
                        <div class="col-sm-6 col-md-4 iso-item filter-all filter-museums filter-family filter-sightseeing" style="padding-right: 5px; padding-left: 5px; border-radius:8px; width:25%;">
                            <article class="box animated" data-animation-type="fadeInLeft">
                                <figure>
                                    <a href="itinerary_user.php"><img src="images/iti_rome.jpg" alt=""></a>
                                    <figcaption>
                                        <span class="price"><img src="images/goldcoin.png" style="width:20px;">&nbsp<img src="images/goldcoin.png" style="width:20px;"></span>
                                        <h2 class="caption-title">Rome!</h2>
                                    </figcaption>
                                </figure>
                            </article>
                        </div>
                        <div class="col-sm-6 col-md-4 iso-item filter-all filter-beach filter-family filter-sightseeing" style="padding-right: 5px; padding-left: 5px; border-radius:8px; width:25%;">
                            <article class="box animated" data-animation-type="fadeInLeft">
                                <figure>
                                    <a href="itinerary_user.php"><img src="images/iti_rome2.jpg" alt=""></a>
                                    <figcaption>
                                        <span class="price"><img src="images/silvercoin.png" style="width:20px;"></span>
                                        <h2 class="caption-title">Rome now!</h2>
                                    </figcaption>
                                </figure>
                            </article>
                        </div>
                        <div class="col-sm-6 col-md-4 iso-item filter-all filter-sightseeing" style="padding-right: 5px; padding-left: 5px; border-radius:8px; width:25%;">
                            <article class="box animated" data-animation-type="fadeInLeft">
                                <figure>
                                    <a href="itinerary_user.php"><img src="images/iti_tanah.jpg" alt=""></a>
                                    <figcaption>
                                        <span class="price"><img src="images/brocoin.png" style="width:20px;">&nbsp<img src="images/brocoin.png" style="width:20px;"></span>
                                        <h2 class="caption-title">Bali 3 days</h2>
                                    </figcaption>
                                </figure>
                            </article>
                        </div>
                        <div class="col-sm-6 col-md-4 iso-item filter-all filter-beach filter-family" style="padding-right: 5px; padding-left: 5px; border-radius:8px; width:25%;">
                            <article class="box animated" data-animation-type="fadeInLeft">
                                <figure>
                                    <a href="itinerary_user.php"><img src="images/des_bali.jpg" alt=""></a>
                                    <figcaption>
                                        <span class="price"><img src="images/brocoin.png" style="width:20px;">&nbsp<img src="images/brocoin.png" style="width:20px;"></span>
                                        <h2 class="caption-title">Bali 2 days</h2>
                                    </figcaption>
                                </figure>
                            </article>
                        </div>
                        <div class="col-sm-6 col-md-4 iso-item filter-all filter-museums filter-family" style="padding-right: 5px; padding-left: 5px; border-radius:8px; width:25%;">
                            <article class="box animated" data-animation-type="fadeInLeft">
                                <figure>
                                    <a href="itinerary_user.php"><img src="images/des_jap.jpg" alt=""></a>
                                    <figcaption>
                                        <span class="price"><img src="images/silvercoin.png" style="width:20px;">&nbsp<img src="images/silvercoin.png" style="width:20px;"></span>
                                        <h2 class="caption-title">Harakiri!</h2>
                                    </figcaption>
                                </figure>
                            </article>
                        </div>
                        <div class="col-sm-6 col-md-4 iso-item filter-all filter-sightseeing" style="padding-right: 5px; padding-left: 5px; border-radius:8px; width:25%;">
                            <article class="box animated" data-animation-type="fadeInLeft">
                                <figure>
                                    <a href="itinerary_user.php"><img src="images/des_hk.jpg" alt=""></a>
                                    <figcaption>
                                        <span class="price"><img src="images/goldcoin.png" style="width:20px;"></span>
                                        <h2 class="caption-title">Cingcongfan!</h2>
                                    </figcaption>
                                </figure>
                            </article>
                        </div>
                        <div class="col-sm-6 col-md-4 iso-item filter-all filter-family filter-sightseeing" style="padding-right: 5px; padding-left: 5px; border-radius:8px; width:25%;">
                            <article class="box animated" data-animation-type="fadeInLeft">
                                <figure>
                                    <a href="itinerary_user.php"><img src="images/iti_ny.jpg" alt=""></a>
                                    <figcaption>
                                        <span class="price"><img src="images/goldcoin.png" style="width:20px;"></span>
                                        <h2 class="caption-title">NY 4 days</h2>
                                    </figcaption>
                                </figure>
                            </article>
                        </div>
                        <div class="col-sm-6 col-md-4 iso-item filter-all filter-sightseeing" style="padding-right: 5px; padding-left: 5px; border-radius:8px; width:25%;">
                            <article class="box animated" data-animation-type="fadeInLeft">
                                <figure>
                                    <a href="itinerary_user.php"><img src="images/iti_rome.jpg" alt=""></a>
                                    <figcaption>
                                        <span class="price"><img src="images/goldcoin.png" style="width:20px;">&nbsp<img src="images/goldcoin.png" style="width:20px;"></span>
                                        <h2 class="caption-title">Rome!</h2>
                                    </figcaption>
                                </figure>
                            </article>
                        </div>
                        <div class="col-sm-6 col-md-4 iso-item filter-all filter-museums filter-family" style="padding-right: 5px; padding-left: 5px; border-radius:8px; width:25%;">
                            <article class="box animated" data-animation-type="fadeInLeft">
                                <figure>
                                    <a href="itinerary_user.php"><img src="images/des_jap.jpg" alt=""></a>
                                    <figcaption>
                                        <span class="price"><img src="images/silvercoin.png" style="width:20px;">&nbsp<img src="images/silvercoin.png" style="width:20px;"></span>
                                        <h2 class="caption-title">Harakiri!</h2>
                                    </figcaption>
                                </figure>
                            </article>
                        </div>
                        <div class="col-sm-6 col-md-4 iso-item filter-all filter-sightseeing" style="padding-right: 5px; padding-left: 5px; border-radius:8px; width:25%;">
                            <article class="box animated" data-animation-type="fadeInLeft">
                                <figure>
                                    <a href="itinerary_user.php"><img src="images/des_hk.jpg" alt=""></a>
                                    <figcaption>
                                        <span class="price"><img src="images/goldcoin.png" style="width:20px;"></span>
                                        <h2 class="caption-title">Cingcongfan!</h2>
                                    </figcaption>
                                </figure>
                            </article>
                        </div>
                        <div class="col-sm-6 col-md-4 iso-item filter-all filter-family filter-sightseeing" style="padding-right: 5px; padding-left: 5px; border-radius:8px; width:25%;">
                            <article class="box animated" data-animation-type="fadeInLeft">
                                <figure>
                                    <a href="itinerary_user.php"><img src="images/iti_ny.jpg" alt=""></a>
                                    <figcaption>
                                        <span class="price"><img src="images/goldcoin.png" style="width:20px;"></span>
                                        <h2 class="caption-title">NY 4 days</h2>
                                    </figcaption>
                                </figure>
                            </article>
                        </div>
                        <div class="col-sm-6 col-md-4 iso-item filter-all filter-sightseeing" style="padding-right: 5px; padding-left: 5px; border-radius:8px; width:25%;">
                            <article class="box animated" data-animation-type="fadeInLeft">
                                <figure>
                                    <a href="itinerary_user.php"><img src="images/iti_rome.jpg" alt=""></a>
                                    <figcaption>
                                        <span class="price"><img src="images/goldcoin.png" style="width:20px;">&nbsp<img src="images/goldcoin.png" style="width:20px;"></span>
                                        <h2 class="caption-title">Rome!</h2>
                                    </figcaption>
                                </figure>
                            </article>
                        </div>
                        <div class="col-sm-6 col-md-4 iso-item filter-all filter-museums filter-family" style="padding-right: 5px; padding-left: 5px; border-radius:8px; width:25%;">
                            <article class="box animated" data-animation-type="fadeInLeft">
                                <figure>
                                    <a href="itinerary_user.php"><img src="images/des_jap.jpg" alt=""></a>
                                    <figcaption>
                                        <span class="price"><img src="images/silvercoin.png" style="width:20px;">&nbsp<img src="images/silvercoin.png" style="width:20px;"></span>
                                        <h2 class="caption-title">Harakiri!</h2>
                                    </figcaption>
                                </figure>
                            </article>
                        </div>
                        <div class="col-sm-6 col-md-4 iso-item filter-all filter-sightseeing" style="padding-right: 5px; padding-left: 5px; border-radius:8px; width:25%;">
                            <article class="box animated" data-animation-type="fadeInLeft">
                                <figure>
                                    <a href="itinerary_user.php"><img src="images/des_hk.jpg" alt=""></a>
                                    <figcaption>
                                        <span class="price"><img src="images/goldcoin.png" style="width:20px;"></span>
                                        <h2 class="caption-title">Cingcongfan!</h2>
                                    </figcaption>
                                </figure>
                            </article>
                        </div>
                        <div class="col-sm-6 col-md-4 iso-item filter-all filter-family filter-sightseeing" style="padding-right: 5px; padding-left: 5px; border-radius:8px; width:25%;">
                            <article class="box animated" data-animation-type="fadeInLeft">
                                <figure>
                                    <a href="itinerary_user.php"><img src="images/iti_ny.jpg" alt=""></a>
                                    <figcaption>
                                        <span class="price"><img src="images/goldcoin.png" style="width:20px;"></span>
                                        <h2 class="caption-title">NY 4 days</h2>
                                    </figcaption>
                                </figure>
                            </article>
                        </div>
                        <div class="col-sm-6 col-md-4 iso-item filter-all filter-sightseeing" style="padding-right: 5px; padding-left: 5px; border-radius:8px; width:25%;">
                            <article class="box animated" data-animation-type="fadeInLeft">
                                <figure>
                                    <a href="itinerary_user.php"><img src="images/iti_rome.jpg" alt=""></a>
                                    <figcaption>
                                        <span class="price"><img src="images/goldcoin.png" style="width:20px;">&nbsp<img src="images/goldcoin.png" style="width:20px;"></span>
                                        <h2 class="caption-title">Rome!</h2>
                                    </figcaption>
                                </figure>
                            </article>
                        </div>
                        <div class="col-sm-6 col-md-4 iso-item filter-all filter-beach filter-mountain filter-museums" style="padding-right: 5px; padding-left: 5px; border-radius:8px; width:25%;">
                            <article class="box animated" data-animation-type="fadeInLeft">
                                <figure>
                                    <a href="itinerary_user.php"><img src="images/iti_ny.jpg" alt=""></a>
                                    <figcaption>
                                        <span class="price"><img src="images/goldcoin.png" style="width:20px;"></span>
                                        <h2 class="caption-title">NY 4 days</h2>
                                    </figcaption>
                                </figure>
                            </article>
                        </div>
                        <div class="col-sm-6 col-md-4 iso-item filter-all filter-beach filter-mountain filter-museums" style="padding-right: 5px; padding-left: 5px; border-radius:8px; width:25%;">
                            <article class="box animated" data-animation-type="fadeInLeft">
                                <figure>
                                    <a href="itinerary_user.php"><img src="images/iti_ny.jpg" alt=""></a>
                                    <figcaption>
                                        <span class="price"><img src="images/goldcoin.png" style="width:20px;"></span>
                                        <h2 class="caption-title">NY 4 days</h2>
                                    </figcaption>
                                </figure>
                            </article>
                        </div>
                        <div class="col-sm-6 col-md-4 iso-item filter-all filter-museums filter-family filter-sightseeing" style="padding-right: 5px; padding-left: 5px; border-radius:8px; width:25%;">
                            <article class="box animated" data-animation-type="fadeInLeft">
                                <figure>
                                    <a href="itinerary_user.php"><img src="images/iti_rome.jpg" alt=""></a>
                                    <figcaption>
                                        <span class="price"><img src="images/goldcoin.png" style="width:20px;">&nbsp<img src="images/goldcoin.png" style="width:20px;"></span>
                                        <h2 class="caption-title">Rome!</h2>
                                    </figcaption>
                                </figure>
                            </article>
                        </div>
                        <div class="col-sm-6 col-md-4 iso-item filter-all filter-beach filter-family filter-sightseeing" style="padding-right: 5px; padding-left: 5px; border-radius:8px; width:25%;">
                            <article class="box animated" data-animation-type="fadeInLeft">
                                <figure>
                                    <a href="itinerary_user.php"><img src="images/iti_rome2.jpg" alt=""></a>
                                    <figcaption>
                                        <span class="price"><img src="images/silvercoin.png" style="width:20px;"></span>
                                        <h2 class="caption-title">Rome now!</h2>
                                    </figcaption>
                                </figure>
                            </article>
                        </div>
                        <div class="col-sm-6 col-md-4 iso-item filter-all filter-sightseeing" style="padding-right: 5px; padding-left: 5px; border-radius:8px; width:25%;">
                            <article class="box animated" data-animation-type="fadeInLeft">
                                <figure>
                                    <a href="itinerary_user.php"><img src="images/iti_tanah.jpg" alt=""></a>
                                    <figcaption>
                                        <span class="price"><img src="images/brocoin.png" style="width:20px;">&nbsp<img src="images/brocoin.png" style="width:20px;"></span>
                                        <h2 class="caption-title">Bali 3 days</h2>
                                    </figcaption>
                                </figure>
                            </article>
                        </div>
                        <div class="col-sm-6 col-md-4 iso-item filter-all filter-beach filter-family" style="padding-right: 5px; padding-left: 5px; border-radius:8px; width:25%;">
                            <article class="box animated" data-animation-type="fadeInLeft">
                                <figure>
                                    <a href="itinerary_user.php"><img src="images/des_bali.jpg" alt=""></a>
                                    <figcaption>
                                        <span class="price"><img src="images/brocoin.png" style="width:20px;">&nbsp<img src="images/brocoin.png" style="width:20px;"></span>
                                        <h2 class="caption-title">Bali 2 days</h2>
                                    </figcaption>
                                </figure>
                            </article>
                        </div>
                        <div class="col-sm-6 col-md-4 iso-item filter-all filter-museums filter-family" style="padding-right: 5px; padding-left: 5px; border-radius:8px; width:25%;">
                            <article class="box animated" data-animation-type="fadeInLeft">
                                <figure>
                                    <a href="itinerary_user.php"><img src="images/des_jap.jpg" alt=""></a>
                                    <figcaption>
                                        <span class="price"><img src="images/silvercoin.png" style="width:20px;">&nbsp<img src="images/silvercoin.png" style="width:20px;"></span>
                                        <h2 class="caption-title">Harakiri!</h2>
                                    </figcaption>
                                </figure>
                            </article>
                        </div>
                        <div class="col-sm-6 col-md-4 iso-item filter-all filter-sightseeing" style="padding-right: 5px; padding-left: 5px; border-radius:8px; width:25%;">
                            <article class="box animated" data-animation-type="fadeInLeft">
                                <figure>
                                    <a href="itinerary_user.php"><img src="images/des_hk.jpg" alt=""></a>
                                    <figcaption>
                                        <span class="price"><img src="images/goldcoin.png" style="width:20px;"></span>
                                        <h2 class="caption-title">Cingcongfan!</h2>
                                    </figcaption>
                                </figure>
                            </article>
                        </div>
                        <div class="col-sm-6 col-md-4 iso-item filter-all filter-family filter-sightseeing" style="padding-right: 5px; padding-left: 5px; border-radius:8px; width:25%;">
                            <article class="box animated" data-animation-type="fadeInLeft">
                                <figure>
                                    <a href="itinerary_user.php"><img src="images/iti_ny.jpg" alt=""></a>
                                    <figcaption>
                                        <span class="price"><img src="images/goldcoin.png" style="width:20px;"></span>
                                        <h2 class="caption-title">NY 4 days</h2>
                                    </figcaption>
                                </figure>
                            </article>
                        </div>
                        <div class="col-sm-6 col-md-4 iso-item filter-all filter-sightseeing" style="padding-right: 5px; padding-left: 5px; border-radius:8px; width:25%;">
                            <article class="box animated" data-animation-type="fadeInLeft">
                                <figure>
                                    <a href="itinerary_user.php"><img src="images/iti_rome.jpg" alt=""></a>
                                    <figcaption>
                                        <span class="price"><img src="images/goldcoin.png" style="width:20px;">&nbsp<img src="images/goldcoin.png" style="width:20px;"></span>
                                        <h2 class="caption-title">Rome!</h2>
                                    </figcaption>
                                </figure>
                            </article>
                        </div>
                        <div class="col-sm-6 col-md-4 iso-item filter-all filter-museums filter-family" style="padding-right: 5px; padding-left: 5px; border-radius:8px; width:25%;">
                            <article class="box animated" data-animation-type="fadeInLeft">
                                <figure>
                                    <a href="itinerary_user.php"><img src="images/des_jap.jpg" alt=""></a>
                                    <figcaption>
                                        <span class="price"><img src="images/silvercoin.png" style="width:20px;">&nbsp<img src="images/silvercoin.png" style="width:20px;"></span>
                                        <h2 class="caption-title">Harakiri!</h2>
                                    </figcaption>
                                </figure>
                            </article>
                        </div>
                        <div class="col-sm-6 col-md-4 iso-item filter-all filter-sightseeing" style="padding-right: 5px; padding-left: 5px; border-radius:8px; width:25%;">
                            <article class="box animated" data-animation-type="fadeInLeft">
                                <figure>
                                    <a href="itinerary_user.php"><img src="images/des_hk.jpg" alt=""></a>
                                    <figcaption>
                                        <span class="price"><img src="images/goldcoin.png" style="width:20px;"></span>
                                        <h2 class="caption-title">Cingcongfan!</h2>
                                    </figcaption>
                                </figure>
                            </article>
                        </div>
                        <div class="col-sm-6 col-md-4 iso-item filter-all filter-family filter-sightseeing" style="padding-right: 5px; padding-left: 5px; border-radius:8px; width:25%;">
                            <article class="box animated" data-animation-type="fadeInLeft">
                                <figure>
                                    <a href="itinerary_user.php"><img src="images/iti_ny.jpg" alt=""></a>
                                    <figcaption>
                                        <span class="price"><img src="images/goldcoin.png" style="width:20px;"></span>
                                        <h2 class="caption-title">NY 4 days</h2>
                                    </figcaption>
                                </figure>
                            </article>
                        </div>
                        <div class="col-sm-6 col-md-4 iso-item filter-all filter-sightseeing" style="padding-right: 5px; padding-left: 5px; border-radius:8px; width:25%;">
                            <article class="box animated" data-animation-type="fadeInLeft">
                                <figure>
                                    <a href="itinerary_user.php"><img src="images/iti_rome.jpg" alt=""></a>
                                    <figcaption>
                                        <span class="price"><img src="images/goldcoin.png" style="width:20px;">&nbsp<img src="images/goldcoin.png" style="width:20px;"></span>
                                        <h2 class="caption-title">Rome!</h2>
                                    </figcaption>
                                </figure>
                            </article>
                        </div>
                        <div class="col-sm-6 col-md-4 iso-item filter-all filter-museums filter-family" style="padding-right: 5px; padding-left: 5px; border-radius:8px; width:25%;">
                            <article class="box animated" data-animation-type="fadeInLeft">
                                <figure>
                                    <a href="itinerary_user.php"><img src="images/des_jap.jpg" alt=""></a>
                                    <figcaption>
                                        <span class="price"><img src="images/silvercoin.png" style="width:20px;">&nbsp<img src="images/silvercoin.png" style="width:20px;"></span>
                                        <h2 class="caption-title">Harakiri!</h2>
                                    </figcaption>
                                </figure>
                            </article>
                        </div>
                        <div class="col-sm-6 col-md-4 iso-item filter-all filter-sightseeing" style="padding-right: 5px; padding-left: 5px; border-radius:8px; width:25%;">
                            <article class="box animated" data-animation-type="fadeInLeft">
                                <figure>
                                    <a href="itinerary_user.php"><img src="images/des_hk.jpg" alt=""></a>
                                    <figcaption>
                                        <span class="price"><img src="images/goldcoin.png" style="width:20px;"></span>
                                        <h2 class="caption-title">Cingcongfan!</h2>
                                    </figcaption>
                                </figure>
                            </article>
                        </div>
                        <div class="col-sm-6 col-md-4 iso-item filter-all filter-family filter-sightseeing" style="padding-right: 5px; padding-left: 5px; border-radius:8px; width:25%;">
                            <article class="box animated" data-animation-type="fadeInLeft">
                                <figure>
                                    <a href="itinerary_user.php"><img src="images/iti_ny.jpg" alt=""></a>
                                    <figcaption>
                                        <span class="price"><img src="images/goldcoin.png" style="width:20px;"></span>
                                        <h2 class="caption-title">NY 4 days</h2>
                                    </figcaption>
                                </figure>
                            </article>
                        </div>
                        <div class="col-sm-6 col-md-4 iso-item filter-all filter-sightseeing" style="padding-right: 5px; padding-left: 5px; border-radius:8px; width:25%;">
                            <article class="box animated" data-animation-type="fadeInLeft">
                                <figure>
                                    <a href="itinerary_user.php"><img src="images/iti_rome.jpg" alt=""></a>
                                    <figcaption>
                                        <span class="price"><img src="images/goldcoin.png" style="width:20px;">&nbsp<img src="images/goldcoin.png" style="width:20px;"></span>
                                        <h2 class="caption-title">Rome!</h2>
                                    </figcaption>
                                </figure>
                            </article>
                        </div>
                        <div class="col-sm-6 col-md-4 iso-item filter-all filter-family filter-sightseeing" style="padding-right: 5px; padding-left: 5px; border-radius:8px; width:25%;">
                            <article class="box animated" data-animation-type="fadeInLeft">
                                <figure>
                                    <a href="itinerary_user.php"><img src="images/iti_ny.jpg" alt=""></a>
                                    <figcaption>
                                        <span class="price"><img src="images/goldcoin.png" style="width:20px;"></span>
                                        <h2 class="caption-title">NY 4 days</h2>
                                    </figcaption>
                                </figure>
                            </article>
                        </div>
                        <div class="col-sm-6 col-md-4 iso-item filter-all filter-sightseeing" style="padding-right: 5px; padding-left: 5px; border-radius:8px; width:25%;">
                            <article class="box animated" data-animation-type="fadeInLeft">
                                <figure>
                                    <a href="itinerary_user.php"><img src="images/iti_rome.jpg" alt=""></a>
                                    <figcaption>
                                        <span class="price"><img src="images/goldcoin.png" style="width:20px;">&nbsp<img src="images/goldcoin.png" style="width:20px;"></span>
                                        <h2 class="caption-title">Rome!</h2>
                                    </figcaption>
                                </figure>
                            </article>
                        </div>
                        <div class="col-sm-6 col-md-4 iso-item filter-all filter-museums filter-family" style="padding-right: 5px; padding-left: 5px; border-radius:8px; width:25%;">
                            <article class="box animated" data-animation-type="fadeInLeft">
                                <figure>
                                    <a href="itinerary_user.php"><img src="images/des_jap.jpg" alt=""></a>
                                    <figcaption>
                                        <span class="price"><img src="images/silvercoin.png" style="width:20px;">&nbsp<img src="images/silvercoin.png" style="width:20px;"></span>
                                        <h2 class="caption-title">Harakiri!</h2>
                                    </figcaption>
                                </figure>
                            </article>
                        </div>
                        <div class="col-sm-6 col-md-4 iso-item filter-all filter-sightseeing" style="padding-right: 5px; padding-left: 5px; border-radius:8px; width:25%;">
                            <article class="box animated" data-animation-type="fadeInLeft">
                                <figure>
                                    <a href="itinerary_user.php"><img src="images/des_hk.jpg" alt=""></a>
                                    <figcaption>
                                        <span class="price"><img src="images/goldcoin.png" style="width:20px;"></span>
                                        <h2 class="caption-title">Cingcongfan!</h2>
                                    </figcaption>
                                </figure>
                            </article>
                        </div>
                        <div class="col-sm-6 col-md-4 iso-item filter-all filter-family filter-sightseeing" style="padding-right: 5px; padding-left: 5px; border-radius:8px; width:25%;">
                            <article class="box animated" data-animation-type="fadeInLeft">
                                <figure>
                                    <a href="itinerary_user.php"><img src="images/iti_ny.jpg" alt=""></a>
                                    <figcaption>
                                        <span class="price"><img src="images/goldcoin.png" style="width:20px;"></span>
                                        <h2 class="caption-title">NY 4 days</h2>
                                    </figcaption>
                                </figure>
                            </article>
                        </div>
                        <div class="col-sm-6 col-md-4 iso-item filter-all filter-sightseeing" style="padding-right: 5px; padding-left: 5px; border-radius:8px; width:25%;">
                            <article class="box animated" data-animation-type="fadeInLeft">
                                <figure>
                                    <a href="itinerary_user.php"><img src="images/iti_rome.jpg" alt=""></a>
                                    <figcaption>
                                        <span class="price"><img src="images/goldcoin.png" style="width:20px;">&nbsp<img src="images/goldcoin.png" style="width:20px;"></span>
                                        <h2 class="caption-title">Rome!</h2>
                                    </figcaption>
                                </figure>
                            </article>
                        </div>
                        <div class="col-sm-6 col-md-4 iso-item filter-all filter-beach filter-mountain filter-museums" style="padding-right: 5px; padding-left: 5px; border-radius:8px; width:25%;">
                            <article class="box animated" data-animation-type="fadeInLeft">
                                <figure>
                                    <a href="itinerary_user.php"><img src="images/iti_ny.jpg" alt=""></a>
                                    <figcaption>
                                        <span class="price"><img src="images/goldcoin.png" style="width:20px;"></span>
                                        <h2 class="caption-title">NY 4 days</h2>
                                    </figcaption>
                                </figure>
                            </article>
                        </div>
                        <div class="col-sm-6 col-md-4 iso-item filter-all filter-beach filter-mountain filter-museums" style="padding-right: 5px; padding-left: 5px; border-radius:8px; width:25%;">
                            <article class="box animated" data-animation-type="fadeInLeft">
                                <figure>
                                    <a href="itinerary_user.php"><img src="images/iti_ny.jpg" alt=""></a>
                                    <figcaption>
                                        <span class="price"><img src="images/goldcoin.png" style="width:20px;"></span>
                                        <h2 class="caption-title">NY 4 days</h2>
                                    </figcaption>
                                </figure>
                            </article>
                        </div>
                        <div class="col-sm-6 col-md-4 iso-item filter-all filter-museums filter-family filter-sightseeing" style="padding-right: 5px; padding-left: 5px; border-radius:8px; width:25%;">
                            <article class="box animated" data-animation-type="fadeInLeft">
                                <figure>
                                    <a href="itinerary_user.php"><img src="images/iti_rome.jpg" alt=""></a>
                                    <figcaption>
                                        <span class="price"><img src="images/goldcoin.png" style="width:20px;">&nbsp<img src="images/goldcoin.png" style="width:20px;"></span>
                                        <h2 class="caption-title">Rome!</h2>
                                    </figcaption>
                                </figure>
                            </article>
                        </div>
                        <div class="col-sm-6 col-md-4 iso-item filter-all filter-beach filter-family filter-sightseeing" style="padding-right: 5px; padding-left: 5px; border-radius:8px; width:25%;">
                            <article class="box animated" data-animation-type="fadeInLeft">
                                <figure>
                                    <a href="itinerary_user.php"><img src="images/iti_rome2.jpg" alt=""></a>
                                    <figcaption>
                                        <span class="price"><img src="images/silvercoin.png" style="width:20px;"></span>
                                        <h2 class="caption-title">Rome now!</h2>
                                    </figcaption>
                                </figure>
                            </article>
                        </div>
                        <div class="col-sm-6 col-md-4 iso-item filter-all filter-sightseeing" style="padding-right: 5px; padding-left: 5px; border-radius:8px; width:25%;">
                            <article class="box animated" data-animation-type="fadeInLeft">
                                <figure>
                                    <a href="itinerary_user.php"><img src="images/iti_tanah.jpg" alt=""></a>
                                    <figcaption>
                                        <span class="price"><img src="images/brocoin.png" style="width:20px;">&nbsp<img src="images/brocoin.png" style="width:20px;"></span>
                                        <h2 class="caption-title">Bali 3 days</h2>
                                    </figcaption>
                                </figure>
                            </article>
                        </div>
                        <div class="col-sm-6 col-md-4 iso-item filter-all filter-beach filter-family" style="padding-right: 5px; padding-left: 5px; border-radius:8px; width:25%;">
                            <article class="box animated" data-animation-type="fadeInLeft">
                                <figure>
                                    <a href="itinerary_user.php"><img src="images/des_bali.jpg" alt=""></a>
                                    <figcaption>
                                        <span class="price"><img src="images/brocoin.png" style="width:20px;">&nbsp<img src="images/brocoin.png" style="width:20px;"></span>
                                        <h2 class="caption-title">Bali 2 days</h2>
                                    </figcaption>
                                </figure>
                            </article>
                        </div>
                        <div class="col-sm-6 col-md-4 iso-item filter-all filter-museums filter-family" style="padding-right: 5px; padding-left: 5px; border-radius:8px; width:25%;">
                            <article class="box animated" data-animation-type="fadeInLeft">
                                <figure>
                                    <a href="itinerary_user.php"><img src="images/des_jap.jpg" alt=""></a>
                                    <figcaption>
                                        <span class="price"><img src="images/silvercoin.png" style="width:20px;">&nbsp<img src="images/silvercoin.png" style="width:20px;"></span>
                                        <h2 class="caption-title">Harakiri!</h2>
                                    </figcaption>
                                </figure>
                            </article>
                        </div>
                        <div class="col-sm-6 col-md-4 iso-item filter-all filter-sightseeing" style="padding-right: 5px; padding-left: 5px; border-radius:8px; width:25%;">
                            <article class="box animated" data-animation-type="fadeInLeft">
                                <figure>
                                    <a href="itinerary_user.php"><img src="images/des_hk.jpg" alt=""></a>
                                    <figcaption>
                                        <span class="price"><img src="images/goldcoin.png" style="width:20px;"></span>
                                        <h2 class="caption-title">Cingcongfan!</h2>
                                    </figcaption>
                                </figure>
                            </article>
                        </div>
                        <div class="col-sm-6 col-md-4 iso-item filter-all filter-family filter-sightseeing" style="padding-right: 5px; padding-left: 5px; border-radius:8px; width:25%;">
                            <article class="box animated" data-animation-type="fadeInLeft">
                                <figure>
                                    <a href="itinerary_user.php"><img src="images/iti_ny.jpg" alt=""></a>
                                    <figcaption>
                                        <span class="price"><img src="images/goldcoin.png" style="width:20px;"></span>
                                        <h2 class="caption-title">NY 4 days</h2>
                                    </figcaption>
                                </figure>
                            </article>
                        </div>
                        <div class="col-sm-6 col-md-4 iso-item filter-all filter-sightseeing" style="padding-right: 5px; padding-left: 5px; border-radius:8px; width:25%;">
                            <article class="box animated" data-animation-type="fadeInLeft">
                                <figure>
                                    <a href="itinerary_user.php"><img src="images/iti_rome.jpg" alt=""></a>
                                    <figcaption>
                                        <span class="price"><img src="images/goldcoin.png" style="width:20px;">&nbsp<img src="images/goldcoin.png" style="width:20px;"></span>
                                        <h2 class="caption-title">Rome!</h2>
                                    </figcaption>
                                </figure>
                            </article>
                        </div>
                        <div class="col-sm-6 col-md-4 iso-item filter-all filter-museums filter-family" style="padding-right: 5px; padding-left: 5px; border-radius:8px; width:25%;">
                            <article class="box animated" data-animation-type="fadeInLeft">
                                <figure>
                                    <a href="itinerary_user.php"><img src="images/des_jap.jpg" alt=""></a>
                                    <figcaption>
                                        <span class="price"><img src="images/silvercoin.png" style="width:20px;">&nbsp<img src="images/silvercoin.png" style="width:20px;"></span>
                                        <h2 class="caption-title">Harakiri!</h2>
                                    </figcaption>
                                </figure>
                            </article>
                        </div>
                        <div class="col-sm-6 col-md-4 iso-item filter-all filter-sightseeing" style="padding-right: 5px; padding-left: 5px; border-radius:8px; width:25%;">
                            <article class="box animated" data-animation-type="fadeInLeft">
                                <figure>
                                    <a href="itinerary_user.php"><img src="images/des_hk.jpg" alt=""></a>
                                    <figcaption>
                                        <span class="price"><img src="images/goldcoin.png" style="width:20px;"></span>
                                        <h2 class="caption-title">Cingcongfan!</h2>
                                    </figcaption>
                                </figure>
                            </article>
                        </div>
                        <div class="col-sm-6 col-md-4 iso-item filter-all filter-family filter-sightseeing" style="padding-right: 5px; padding-left: 5px; border-radius:8px; width:25%;">
                            <article class="box animated" data-animation-type="fadeInLeft">
                                <figure>
                                    <a href="itinerary_user.php"><img src="images/iti_ny.jpg" alt=""></a>
                                    <figcaption>
                                        <span class="price"><img src="images/goldcoin.png" style="width:20px;"></span>
                                        <h2 class="caption-title">NY 4 days</h2>
                                    </figcaption>
                                </figure>
                            </article>
                        </div>
                        <div class="col-sm-6 col-md-4 iso-item filter-all filter-sightseeing" style="padding-right: 5px; padding-left: 5px; border-radius:8px; width:25%;">
                            <article class="box animated" data-animation-type="fadeInLeft">
                                <figure>
                                    <a href="itinerary_user.php"><img src="images/iti_rome.jpg" alt=""></a>
                                    <figcaption>
                                        <span class="price"><img src="images/goldcoin.png" style="width:20px;">&nbsp<img src="images/goldcoin.png" style="width:20px;"></span>
                                        <h2 class="caption-title">Rome!</h2>
                                    </figcaption>
                                </figure>
                            </article>
                        </div>
                        <div class="col-sm-6 col-md-4 iso-item filter-all filter-museums filter-family" style="padding-right: 5px; padding-left: 5px; border-radius:8px; width:25%;">
                            <article class="box animated" data-animation-type="fadeInLeft">
                                <figure>
                                    <a href="itinerary_user.php"><img src="images/des_jap.jpg" alt=""></a>
                                    <figcaption>
                                        <span class="price"><img src="images/silvercoin.png" style="width:20px;">&nbsp<img src="images/silvercoin.png" style="width:20px;"></span>
                                        <h2 class="caption-title">Harakiri!</h2>
                                    </figcaption>
                                </figure>
                            </article>
                        </div>
                        <div class="col-sm-6 col-md-4 iso-item filter-all filter-sightseeing" style="padding-right: 5px; padding-left: 5px; border-radius:8px; width:25%;">
                            <article class="box animated" data-animation-type="fadeInLeft">
                                <figure>
                                    <a href="itinerary_user.php"><img src="images/des_hk.jpg" alt=""></a>
                                    <figcaption>
                                        <span class="price"><img src="images/goldcoin.png" style="width:20px;"></span>
                                        <h2 class="caption-title">Cingcongfan!</h2>
                                    </figcaption>
                                </figure>
                            </article>
                        </div>
                        <div class="col-sm-6 col-md-4 iso-item filter-all filter-family filter-sightseeing" style="padding-right: 5px; padding-left: 5px; border-radius:8px; width:25%;">
                            <article class="box animated" data-animation-type="fadeInLeft">
                                <figure>
                                    <a href="itinerary_user.php"><img src="images/iti_ny.jpg" alt=""></a>
                                    <figcaption>
                                        <span class="price"><img src="images/goldcoin.png" style="width:20px;"></span>
                                        <h2 class="caption-title">NY 4 days</h2>
                                    </figcaption>
                                </figure>
                            </article>
                        </div>
                        <div class="col-sm-6 col-md-4 iso-item filter-all filter-sightseeing" style="padding-right: 5px; padding-left: 5px; border-radius:8px; width:25%;">
                            <article class="box animated" data-animation-type="fadeInLeft">
                                <figure>
                                    <a href="itinerary_user.php"><img src="images/iti_rome.jpg" alt=""></a>
                                    <figcaption>
                                        <span class="price"><img src="images/goldcoin.png" style="width:20px;">&nbsp<img src="images/goldcoin.png" style="width:20px;"></span>
                                        <h2 class="caption-title">Rome!</h2>
                                    </figcaption>
                                </figure>
                            </article>
                        </div>
                        
                        
                        
                    </div>
                    <!--<ul class="pagination clearfix">
                        <li class="prev disabled"><a href="#">Previous</a></li>
                        <li class="active"><a href="#" style="border-radius:30px; padding: 0px 13.5px 0px 13.5px;">1</a></li>
                        <li><a href="#" style="border-radius:30px; padding: 0px 13.5px 0px 13.5px;">2</a></li>
                        <li><a href="#" style="border-radius:30px; padding: 0px 13.5px 0px 13.5px;">3</a></li>
                        <li class="disabled" style="border-radius:30px; padding: 0px 13.5px 0px 13.5px;"><span style="border-radius:30px; padding: 0px 13.5px 0px 13.5px;">.............</span></li>
                        <li><a href="#" style="border-radius:30px; padding: 0px 13.5px 0px 13.5px;">5</a></li>
                        <li class="next" style="border-radius:30px;"><a href="#">Next</a></li>
                    </ul>-->
                </div>
            </div>
        </section>
        
        <?php
            include "includes/footer.php";
        ?>
    
</body>
</html>

