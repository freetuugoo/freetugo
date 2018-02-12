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
                    include "includes/menudiscovery-loggedin.php";
                } else {
                    include "includes/menu4.php";
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
                    <li class="active">discovery</li>
                </ul>
            </div>
        </div>
        <section id="content" class="gray-area">
            <div class="container shortcode">
                <div class="block">
                    <div class="row">
                        
                        
                        <div class="col-md-6" style="width:100%; padding-top:20px;">
                            <div class="tab-container style1">
                                <ul class="tabs full-width" style="border-radius:8px;">
                                    <li><a style="border-radius:30px;" href="#africa" data-toggle="tab">africa</a></li>
                                    <li><a style="border-radius:30px;" href="#asia" data-toggle="tab">asia</a></li>
                                    <li><a style="border-radius:30px;" href="#europe" data-toggle="tab">europe</a></li>
                                    <li><a style="border-radius:30px;" href="#middle-east" data-toggle="tab">middle east</a></li>
                                    <li><a style="border-radius:30px;" href="#pacific" data-toggle="tab">pacific</a></li>
                                    <li><a style="border-radius:30px;" href="#south-america" data-toggle="tab">south-america</a></li>
                                    <li><a style="border-radius:30px;" href="#north-america" data-toggle="tab">north-america</a></li>
                                    <li><a style="border-radius:30px;" href="#central-america" data-toggle="tab">central-america</a></li>
                                </ul><br>
                                <div class="tab-content">
                                    <?php
                                        include "includes/africa.php";
                                    ?>
                                    <?php
                                        include "includes/asia.php";
                                    ?>
                                    <?php
                                        include "includes/europe.php";
                                    ?>
                                    <?php
                                        include "includes/middle-east.php";
                                    ?>
                                    <?php
                                        include "includes/pacific.php";
                                    ?>
                                    <?php
                                        include "includes/south-america.php";
                                    ?>
                                    <?php
                                        include "includes/north-america.php";
                                    ?>
                                    <?php
                                        include "includes/central-america.php";
                                    ?>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
                
            
                
            </div>
        </section>

        <?php
            include "includes/footer.php";
        ?>
</body>
</html>

