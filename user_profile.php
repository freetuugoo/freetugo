<?php
ob_start(); 
include_once('./db.php');
include_once('classes/login_class.php');
$userid = $_GET['id'];
$id = DB::query(
    'SELECT i.id
    FROM itineraries i
    JOIN users u ON u.id = i.user_id
    WHERE u.id=:userid', array(':userid'=>$userid)
    )[0]['id'];

$allDes = DB::query('SELECT destination, day_arrive, day_depart, day_count, person_count FROM itineraries WHERE user_id=:user_id', array(':user_id'=>$userid));
$allArray = array();
array_push($allArray, $allDes);

$image = DB::query('SELECT image FROM user_images WHERE user_id=:user_id AND default_image=:default_image', array(':user_id'=>$userid, ':default_image'=>'1'))[0]['image'];
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
</head>
<body>
    
    <div id="page-wrapper">
              <header id="header" class="navbar-static-top">
            <?php
                if(Login::isLoggedIn()) {
                    include "includes/menu-loggedin.php";
                } else {
                    include "includes/menu1.php";
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
                    <li class="active">
                        <?php
                            $username = DB::query(
                                'SELECT username
                                FROM users
                                WHERE id=:id', array(':id'=>$userid)
                                )[0]['username'];
                            echo "@".$username;
                        ?>
                    </li>
                </ul>
            </div>
        </div>
        <div class="block" style="background-color:#FFF;padding-top:30px;">
            <div style="background-color:#fff; text-align:center;">
                <figure>
                    <a title="" href="#"><img width="170" height="170" alt="" src="<?php echo $image;?>" style="border-radius:1000px;"></a>
                    &nbsp&nbsp&nbsp&nbsp
                    <a style="font-size:27px;">
                        <?php
                            $username = DB::query(
                                'SELECT username
                                FROM users
                                WHERE id=:id', array(':id'=>$userid)
                                )[0]['username'];
                            echo "@".$username;
                        ?>
                    </a>
                </figure><br>
                </div>
        </div>
        <div class="section white-bg" style="padding-top:0px;">
                <div class="container">
                    <div class="text-center description block">
                        <p style="font-weight:600; font-size:19px;">
                            <?php
                                $fullname = DB::query(
                                    'SELECT fullname
                                    FROM users
                                    WHERE id=:id', array(':id'=>$userid)
                                    )[0]['fullname'];
                                echo $fullname;
                            ?>
                        </p>
                        <p>
                            <?php
                                $biodata = DB::query(
                                    'SELECT biodata
                                    FROM users
                                    WHERE id=:id', array(':id'=>$userid)
                                    )[0]['biodata'];
                                echo $biodata;
                            ?>
                        </p><br><hr>
                        <p style="font-size:19px;">
                            <?php
                                $itineraryCount = DB::query(
                                    'SELECT COUNT(user_id)
                                    FROM itineraries
                                    WHERE user_id=:id', array(':id'=>$userid)
                                    )[0]['COUNT(user_id)'];
                                if ($itineraryCount == 1) {
                                    echo $itineraryCount . " itinerary";
                                } else {
                                    echo $itineraryCount . " itineraries";
                                }
                            ?>
                        </p>
                    </div>
                    <div class="tour-packages row add-clearfix image-box">
                    <?php
                        foreach($allArray as $key => $innerKey){
                            foreach($innerKey as $val){
                                $des = $val['destination'];
                                $arrive = $val['day_arrive'];
                                $depart = $val['day_depart'];
                                $day = $val['day_count'];
                                $ppl = $val['person_count'];

                                echo "<div class='col-sm-6 col-md-4' style='padding-right: 5px; padding-left: 5px; border-radius:8px;'>
                                <article class='box animated' data-animation-type='fadeInLeft'>
                                    <figure>
                                        <a href='itinerary_user.php?id=$id&des=$des&arrive=$arrive&depart=$depart&day=$day&ppl=$ppl'><img src='images/iti_ny.jpg' alt=''></a>
                                        <figcaption>
                                            <span class='price'><img src='images/goldcoin.png' style='width:20px;'></span>
                                            <h2 class='caption-title'>
                                                $des
                                            </h2>
                                        </figcaption>
                                    </figure>
                                </article>
                            </div>";
                            }
                        }
                    ?>
                    </div>
                </div>
            </div><hr>
        <?php
            include "includes/footer.php";
        ?>
</body>
</html>

