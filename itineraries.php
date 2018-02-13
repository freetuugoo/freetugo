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
                        <?php
                            $allIti = DB::query(
                                'SELECT id, destination, day_arrive, day_depart, day_count, person_count, user_id, name
                                FROM itineraries
                                ORDER BY id'
                            );
                        foreach($allIti as $key => $val) {
                            $id = $val['id'];
                            $destination = $val['destination'];
                            $arrive = $val['day_arrive'];
                            $depart = $val['day_depart'];
                            $dayCount = $val['day_count'];
                            $personCount = $val['person_count'];
                            $name = $val['name'];
                            $userid = $val['user_id'];
                            if(Login::isLoggedIn()) {
                                $loggedUser = DB::query('SELECT user_id FROM login_tokens WHERE token=:token', array(':token'=>sha1($_COOKIE['FCID'])))[0]['user_id'];
                                $redirect = "";
                                if($userid === $loggedUser) {
                                    $redirect = "itinerary_detail.php?id=$id&des=$destination&arrive=$arrive&depart=$depart&day=$dayCount&ppl=$personCount";
                                } else {
                                    $redirect = "itinerary_user.php?id=$id&des=$destination&arrive=$arrive&depart=$depart&day=$dayCount&ppl=$personCount&name=$name";
                                }
                            } else {
                                $redirect = "itinerary_user.php?id=$id&des=$destination&arrive=$arrive&depart=$depart&day=$dayCount&ppl=$personCount&name=$name";
                            }
                            
                            echo "<div class='col-sm-6 col-md-4 iso-item filter-all' style='padding-right: 5px; padding-left: 5px; border-radius:8px; width:25%;'>
                                        <article class='box animated' data-animation-type='fadeInLeft'>
                                            <figure>
                                                <a href='$redirect'><img src='images/iti_ny.jpg' alt=''></a>
                                                <figcaption>
                                                    <span class='price'><img src='images/goldcoin.png' style='width:20px;'></span>
                                                    <h2 class='caption-title'>$name</h2>
                                                </figcaption>
                                            </figure>
                                        </article>
                                    </div>";
                        
                        }

                        ?>                        
                        
                    </div>
                </div>
            </div>
        </section>
        
        <?php
            include "includes/footer.php";
        ?>
    
</body>
</html>

