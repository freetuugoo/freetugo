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
</head>
<body>
    <div id="page-wrapper">
        
        <section id="content" class="slideshow-bg">
            <header id="header" class="navbar-static-top">
            <?php
                include "includes/menu_discovery.php";
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
            <?php
                include "includes/slider_discovery.php";
            ?>
            <div class="container">
                <div id="main"><br><br><br><br>
                    <h1 class="page-title" style="font-size:17px; font-weight:400;">europe</h1>
                    <h1 class="page-title" style="font-size:92px; font-weight:600;">Italy</h1>
                    <h2 style="text-align:center; color:#fff; font-size:25px; margin-top:-15px;"><i>is turning one more corner</i></h2>
                    <div class="search-box-wrapper style2">
                        <br><br><br><br><br><br><br><br><br><br><br><br><br>
                        </div>

                    </div>
                </div>
                            <div style="background-color:#f0f0f0; width:100%; position:relative; z-index:99;">
                                <div class="container">
                <div style="padding-top:20px;">
                    <div class="image-box style6"  style="text-align:center; padding-top:80px;padding-bottom:80px;">
                        <p style="font-size:25px; font-weight:400;">Home to many of the world's greatest works of art, architecture and gastronomy, <br>Italy elates, inspires and moves like no other.</p>
                    </div>
                </div>
            </div><br><br>
                                     <?php
                                        include "includes/country_attractions.php";
                                     ?><br><br>
                                     <?php
                                        include "includes/country_restaurant.php";
                                     ?>
                                     <?php
                                        include "includes/country_itineraries.php";
                                     ?>

        </section><br><br><br><br><br><br>

        <?php
            include "includes/footer.php";
        ?>
        
</body>
</html>

