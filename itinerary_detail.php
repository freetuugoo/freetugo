<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<?php
include_once('./db.php');
include_once('./classes/login_class.php');
$url = "http://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
$des = $_GET['des'];

$user_id = DB::query('SELECT user_id FROM login_tokens WHERE token=:token', array(':token'=>sha1($_COOKIE['FCID'])))[0]['user_id'];

if(!DB::query('SELECT id FROM itineraries WHERE destination=:destination AND user_id=:user_id ORDER BY id DESC', array(':destination'=>$des, ':user_id'=>$user_id))) {
    $dArrive = $_GET['arrive'];
    $dDepart = $_GET['depart'];
    $day = $_GET['day'];
    $ppl = $_GET['ppl'];
    $name = $_GET['name'];
    DB::query('INSERT INTO itineraries VALUES (\'\', :destination, :day_arrive, :day_depart, :day_count, :person_count, :user_id, :name)', array(':destination'=>$des, ':day_arrive'=>$dArrive, ':day_depart'=>$dDepart, ':day_count'=>$day, ':person_count'=>$ppl, ':user_id'=>$user_id, ':name'=>$name));
}
echo "<script>
        swal({
            title: 'Success!',
            text: 'Successfully created a new itinerary',
            icon: 'success',
            closeOnClickOutside: false
        }).then(function() {
            window.location = $url;
        })
</script>";
$id = "";
if(empty($_GET['id'])) {
    $id = DB::query('SELECT id FROM itineraries WHERE destination=:destination AND user_id=:user_id ORDER BY id DESC', array(':destination'=>$des, ':user_id'=>$user_id))[0]['id'];
} else {
    $id = $_GET['id'];
}
?>

<!DOCTYPE html>
<!--[if IE 8]>          <html class="ie ie8"> <![endif]-->
<!--[if IE 9]>          <html class="ie ie9"> <![endif]-->
<!--[if gt IE 9]><!-->  <html> <!--<![endif]-->
<head>
    <!-- Page Title -->
    <title>fritugo - get unlimited, create your own dream itinerary for your future trip</title>

    <!-- google places library + API Key -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDZTzuxSItuhzQgG85ebwVWfpuS5HTCgGw&libraries=places&callback=placeSearch"></script>


    <?php
        include "includes/common.php";
    ?>

    <script>
        function redirect(target) {
            window.location.replace(target);
        }
    </script>

    <style>
        .swal-button{
            padding: 0px 24px;
        }

.dropbtn {
    background-color: #0095da;
    color: white;
    font-size: 14px;
    border: none;
    cursor: pointer;
    border-radius:4px;
}

.dropdown {
    position: relative;
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 270px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    border-radius:4px;
    z-index: 1;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
    display: block;
}

.dropdown:hover .dropbtn {
    background-color: #0095da;
}
</style>

</head>
<body>
       <div id="page-wrapper">
        
        <section id="content" style="min-height:700px;">
            <header id="header" class="navbar-static-top">
            <?php
                include "includes/menu-loggedin.php";
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
            <?php
                include "includes/edit_iti_name.php";
            ?>
            <?php
                include "includes/edit_iti_date.php";
            ?>
            <?php
                include "includes/edit_iti_people.php";
            ?>
            <?php
                include "includes/share_itinerary.php";
            ?>
            <?php
                include "includes/find-nearby-restaurant.php";
            ?>
            <?php
                include "includes/success-save.php";
            ?>
            <?php
                include "includes/change-attraction.php";
            ?>
        </header>
            <div style="background-color:#343434; width:100%; height:70px; position:relative; z-index:99;">
                <div class="container">
                    <div style="border-style: solid; border:1px; border-color:#222; padding: 30px 20px 30px 30px; text-align:center; ">
                        <h1 style="color:#fff; font-size:20px; margin-top:-5px; font-weight:700;">Your personal travel guide</h1>
                    </div>                    
                </div>
            </div>
            <div style="background-color:#fff; width:100%; height:370px; position:relative; z-index:99;">
                <div class="container">
                    <div style="border-style: solid; border:1px; border-color:#222; padding: 30px 70px 30px 60px; ">
                        <table style="text-align:center; border:0px solid #000; width:100%;margin-top:-15px;">
                                <tr>
                                    <th rowspan="3" width="350px;">
                                        <img src="images/result_iti_pic.jpg" style="padding-right:20px; width:100%;">
                                        <a href="#" style="font-size:13px; font-weight:400; margin-top:10px;"><br>
                                        <img src="images/changeimg.png" style="width:4%;">&nbsp change cover image</a><br><br>
                                        <div style="border-style: solid; border:1px; border-color:#222; text-align:left; ">

                                            <a href="#" style="border:1px solid #d8d8d8; padding: 7px 14px 7px 14px; border-radius:30px; font-size:12px; font-weight:400;">museum &nbsp&nbsp x</a>
                                            &nbsp
                                            <a href="#" style="border:1px solid #d8d8d8; padding: 7px 14px 7px 14px; border-radius:30px; font-size:12px; font-weight:400;">sightseeing &nbsp&nbsp x</a>
                                            &nbsp
                                            <a href="#" style="border:1px solid #d8d8d8; padding: 7px 14px 7px 14px; border-radius:30px; font-size:12px; font-weight:400;">couple &nbsp&nbsp x</a>
                                            &nbsp
                                            <a href="#" href="#"><img src="images/add.png" style="width:13px;"></a>
                                        </div>
                                    </th>
                                    <th colspan="2" width="1000px" style="color:#343434; font-size:16px; font-weight:700; padding: 10px 10px 10px 0px; text-align:left;">
                                            <?php
                                                if (Login::isLoggedIn()) {
                                                    $name = DB::query(
                                                        'SELECT name
                                                        FROM itineraries
                                                        WHERE id=:id', array(':id'=>$id)
                                                    )[0]['name'];
                                                    echo $name;
                                                }
                                            ?>
                                        <a data-toggle="tab" href="#edit_iti_name" class="soap-popupbox"><img src="images/pencil.png" style="padding-right:20px; width:12%;"></a>
                                        <br>
                                        <p style="margin-bottom:6px; font-size:11px; font-weight:400;"><i>by</i>&nbsp&nbsp<a href="dashboard.php" style="color:#0095da;">
                                        <i>
                                            <?php
                                                if (Login::isLoggedIn()) {
                                                    $username = DB::query(
                                                        'SELECT u.username
                                                        FROM users u
                                                        JOIN login_tokens lt ON lt.user_id = u.id
                                                        WHERE lt.token = :token', array(':token'=>sha1($_COOKIE['FCID']))
                                                        )[0]['username'];
                                                    echo $username;
                                                }
                                            ?>
                                        </i></a></p>
                                    </th>
                                    <th colspan="2" style="color:#4e4e4e; font-size:18px; font-weight:400; padding: 10px 10px 10px 10px; text-align:right;">
                                        <a data-toggle="tab" href="#edit_iti_date" class="soap-popupbox" style="font-size:13px;">
                                            <?php
                                                if (Login::isLoggedIn()) {
                                                    $arrive = DB::query(
                                                        'SELECT day_arrive
                                                        FROM itineraries
                                                        WHERE id=:id', array(':id'=>$id)
                                                    )[0]['day_arrive'];
                                                    $dayArrive = date_create($arrive);

                                                    $depart = DB::query(
                                                        'SELECT day_depart
                                                        FROM itineraries
                                                        WHERE id=:id', array(':id'=>$id)
                                                    )[0]['day_depart'];
                                                    $dayDepart = date_create($depart);
                                                    $dates = date_format($dayArrive, 'd M') . " - " . date_format($dayDepart, 'd M Y');
                                                    echo $dates;
                                                }
                                            ?>
                                        &nbsp<img src="images/pencil.png" style="width:3%;"></a><br>
                                        <a data-toggle="tab" href="#edit_iti_people" class="soap-popupbox" style="font-size:13px;">
                                        <span id="iti-guest-count">
                                            <?php
                                                if (Login::isLoggedIn()) {
                                                    $personCount = DB::query(
                                                        'SELECT person_count
                                                        FROM itineraries
                                                        WHERE id=:id', array(':id'=>$id)
                                                    )[0]['person_count'];

                                                    if ($personCount == 1) {
                                                        echo $personCount . " person";
                                                    } else {
                                                        echo $personCount . " people";
                                                    }
                                                }
                                            ?>
                                        </span>
                                        &nbsp<img src="images/pencil.png" style="width:3%;"></a>
                                    </th>
                                </tr>
                                <tr>
                                    <td colspan="4" style="line-height:normal; margin-top:1px; color:#636363; font-size:14px; padding: 10px 10px 0px 0px; text-align:justify; height:10px;">
                                        <?php
                                        $dayCount = DB::query(
                                            'SELECT day_count
                                            FROM itineraries
                                            WHERE id=:id', array(':id'=>$id)
                                            )[0]['day_count'];
                                         echo "This pre-planned $dayCount days $des itinerary will allow you to explore all must-sees, landmarks, and attractions. See how you can make the best out of a $dayCount days stay in $des. 
                                                    <br><br>
                                                If you are planning a $dayCount days visit to $des and are interested to visit its top attractions then this plan may well suit your needs.&nbsp<a href='#'><img src='images/pencil.png' style='width:1.7%;'></a>";
                                        ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="150px"></td>
                                    <td style="color:#343434; font-size:13px; font-weight:500; padding: 10px 10px 0px 10px; text-align:right;">
                                    </td>
                                    <td style="color:#343434; font-size:13px; font-weight:500; padding: 10px 10px 0px 10px; text-align:right;">
                                    </td>
                                    <td style="color:#636363; font-size:13px; font-weight:500; padding: 10px 10px 0px 10px; text-align:right;">
                                        <a href="#"><img src="images/goldcoin.png" style="width:32px;">&nbsp&nbsp
                                        <a href="policies.php" target="_blank" style="font-size:8px;"><i>what's this?</i></a><br><br>
                                        <a href="#success-save" class="soap-popupbox" style="border-radius:30px; background-color:#0095da; font-size:13px; padding:10px 30px 10px 30px; color:#fff; font-weight:600;"><button style="padding:0px 2px 0px 2px;">save</button></a>&nbsp&nbsp&nbsp
                                        <a href="#" class="soap-popupbox"><img src="images/download_icon.png" style="width:6%; padding-right:5px;"></a>&nbsp&nbsp&nbsp
                                        <a href="#" class="soap-popupbox"><img src="images/print_icon.png" style="width:6%; padding-right:5px;"></a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                                        <a href="#" class="soap-icon-facebook circle" style="border: 1px solid #3b5998; background-color:#3b5998; color:#fff; "></a>&nbsp&nbsp
                                        <a href="#" class="soap-icon-twitter circle" style="border: 1px solid #00aced; background-color:#00aced; color:#fff;"></a>&nbsp&nbsp
                                        <a href="#" class="soap-icon-googleplus circle" style="border: 1px solid #d34836; background-color:#d34836; color:#fff;"></a>&nbsp&nbsp
                                        <a href="#" class="soap-icon-pinterest circle" style="border: 1px solid #cb2027; background-color:#cb2027; color:#fff;"></a>&nbsp&nbsp
                                        <a href="#" class="soap-icon-tumblr circle" style="border: 1px solid #35465c; background-color:#35465c; color:#fff;"></a>
                                    </td>
                                </tr>
                            </table>
                    </div>                    
                </div>
            </div>
                <div style="background-color:#f0f0f0; width:100%; position:relative; z-index:99; margin-top:0px;">
                    <div class="container">
                        <div style="border-style: solid; border:1px; border-color:#222; padding: 30px 70px 30px 60px;">
                            <table  style="text-align:center; border:0px solid #000; width:100%;">
                                <tr>
                                    <td>
                                        <div class="dropdown">
                                            <button class="dropbtn" style="height:40px; width:270px; text-align:left;">Day 1, Friday, 8 December 2017<span class="fa fa-caret-down fa-lg" style="font-size:14px; position:absolute;right:0px;top:16px;">
                                                &nbsp&nbsp&nbsp&nbsp&nbsp</span>&nbsp&nbsp</button>
                                                <div class="dropdown-content" style="text-align:left;">
                                                    <a href="#">Day 2, Saturday, 9 December 2017</a>
                                                    <a href="#">Day 3, Monday, 10 December 2017</a>
                                                </div>
                                        </div>
                                    </td>
                                    <th style="padding-left:10px;">
                                        <div style="background-color:#0095da; border-radius:4px; height:40px; width:750px;">
                                            <div style="padding: 10px 10px 10px 10px;">
                                                <a style="font-size:14px; color:#fff; font-weight: 500; padding-top:10px;">Total trip : 3 days</a>
                                            </div>
                                        </div>
                                    </th>
                                </tr>
                            </table>
                            <div style="height:400px;width:295px;overflow:auto;color:white;scrollbar-base-color:gold;"><br>
                                        
                                        <tr>
                                            <th></th>
                                            <th rowspan="5"></th>
                                        </tr>
                                        <tr>
                                            <td style="padding-top:10px">
                                                <div style="background-color:#fff; border-radius:4px; height:55px; width:270px;">
                                                    <div style="padding: 11px 10px 10px 10px; text-align: left;">
                                                        <a href="detail_attraction.php"><img src="images/vaticangarden_sq.jpg" style="width:36px; border-radius:1000px;"></a>&nbsp&nbsp&nbsp&nbsp
                                                        <a href="detail_attraction.php" style="font-size:16px; color:#636363; font-weight: 500; padding-top:10px;" class="soap-icon-departure">&nbsp&nbspVatican Garden</a><br>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="padding-top:0px; padding-left:20px;">
                                                <div style="border-left: 2px solid #636363; height:30px; width:270px; margin-left:25px;">
                                                    <div style="padding: 8px 10px 10px 10px; text-align: left;">
                                                        <a style="font-size:10px; color:#636363; font-weight: 500;"><img src="images/walking.png" style="width:4%;">&nbsp 10 minutes</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="padding-top:0px">
                                                <div style="background-color:#fff; border-radius:4px; height:55px; width:270px;">
                                                    <div style="padding: 11px 10px 10px 10px; text-align: left;">
                                                        <a href="detail_attraction.php"><img src="images/thesistinechapel_sq.jpg" style="width:36px; border-radius:1000px;"></a>&nbsp&nbsp&nbsp&nbsp
                                                        <a href="detail_attraction.php" style="font-size:16px; color:#636363; font-weight: 500; padding-top:10px;" class="soap-icon-departure">&nbsp&nbspThe Sistine Chapel</a><br>
                                                        
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="padding-top:0px; padding-left:20px;">
                                                <div style="border-left: 2px solid #636363; height:30px; width:270px; margin-left:25px;">
                                                    <div style="padding: 8px 10px 10px 10px; text-align: left;">
                                                        <a style="font-size:10px; color:#636363; font-weight: 500;"><img src="images/walking.png" style="width:4%;">&nbsp 10 minutes</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="padding-top:0px">
                                                <div style="background-color:#fff; border-radius:30px; height:36px; width:160px; margin-left:10px;">

                                                    <div style="padding: 0px 10px 10px 0px; text-align: left;">
                                                       <a href="detail_attraction.php"><img src="images/piccolobuco_sq.jpg" style="width:36px; border-radius:1000px;"></a>&nbsp&nbsp&nbsp&nbsp
                                                        <a href="detail_attraction.php" style="font-size:13px; color:#636363; font-weight: 500; padding-top:10px;" class="soap-icon-breakfast">&nbsp&nbspPiccolo Buco</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="padding-top:0px; padding-left:20px;">
                                                <div style="border-left: 2px solid #636363; height:30px; width:270px; margin-left:25px;">
                                                    <div style="padding: 8px 10px 10px 10px; text-align: left; ">
                                                        <a style="font-size:10px; color:#636363; font-weight: 500;"><img src="images/walking.png" style="width:4%;">&nbsp 10 minutes</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="padding-top:0px">
                                                <div style="background-color:#fff; border-radius:4px; height:55px; width:270px;">
                                                    <div style="padding: 11px 10px 10px 10px; text-align: left;">
                                                        <a href="detail_attraction.php"><img src="images/vaticanmuseum_sq.jpeg" style="width:36px; border-radius:1000px;"></a>&nbsp&nbsp&nbsp&nbsp
                                                        <a href="detail_attraction.php" style="font-size:16px; color:#636363; font-weight: 500; padding-top:10px;" class="soap-icon-departure">&nbsp&nbspVatican Museums</a><br>
                                                        
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        
                                        <tr>
                                            <td style="padding-top:0px; padding-left:20px;">
                                                <div style="border-left: 2px solid #636363; height:30px; width:270px; margin-left:25px;">
                                                    <div style="padding: 8px 10px 10px 10px; text-align: left;">
                                                        <a style="font-size:10px; color:#636363; font-weight: 500;"><img src="images/walking.png" style="width:4%;">&nbsp 10 minutes</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="padding-top:0px">
                                                <div style="background-color:#fff; border-radius:4px; height:55px; width:270px;">
                                                    <div style="padding: 11px 10px 10px 10px; text-align: left;">
                                                        <a href="detail_attraction.php"><img src="images/stpetersbasilica_sq.jpg" style="width:36px; border-radius:1000px;"></a>&nbsp&nbsp&nbsp&nbsp
                                                        <a href="detail_attraction.php" style="font-size:16px; color:#636363; font-weight: 500; padding-top:10px;" class="soap-icon-departure">&nbsp&nbspSt.Peter's Basilica</a><br>
                                                        
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="padding-top:0px; padding-left:20px;">
                                                <div style="border-left: 2px solid #636363; height:30px; width:270px; margin-left:25px;">
                                                    <div style="padding: 8px 10px 10px 10px; text-align: left;">
                                                        <a style="font-size:10px; color:#636363; font-weight: 500;"><img src="images/walking.png" style="width:4%;">&nbsp 10 minutes</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="padding-top:0px">
                                                <div style="background-color:#fff; border-radius:4px; height:55px; width:270px;">
                                                    <div style="padding: 11px 10px 10px 10px; text-align: left;">
                                                        <a href="detail_attraction.php"><img src="images/stpeterssquare_sq.jpg" style="width:36px; border-radius:1000px;"></a>&nbsp&nbsp&nbsp&nbsp
                                                        <a href="detail_attraction.php" style="font-size:16px; color:#636363; font-weight: 500; padding-top:10px;" class="soap-icon-departure">&nbsp&nbspSt. Peter's Square</a><br>
                                                        
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="padding-top:0px; padding-left:20px;">
                                                <div style="border-left: 2px solid #636363; height:30px; width:270px; margin-left:25px;">
                                                    <div style="padding: 8px 10px 10px 10px; text-align: left;">
                                                        <a style="font-size:10px; color:#636363; font-weight: 500;"><img src="images/walking.png" style="width:4%;">&nbsp 10 minutes</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="padding-top:0px">
                                                <div style="background-color:#fff; border-radius:30px; height:36px; width:160px; margin-left:10px;">

                                                    <div style="padding: 0px 10px 10px 0px; text-align: left;">
                                                       <a href="detail_attraction.php"><img src="images/lapergola.jpg" style="width:36px; border-radius:1000px;"></a>&nbsp&nbsp&nbsp&nbsp
                                                        <a href="detail_attraction.php" style="font-size:13px; color:#636363; font-weight: 500; padding-top:10px;" class="soap-icon-breakfast">&nbsp&nbspLa Pergola</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="padding-top:0px; padding-left:20px;">
                                                <div style="border-left: 2px solid #636363; height:30px; width:270px; margin-left:25px;">
                                                    <div style="padding: 8px 10px 10px 10px; text-align: left;">
                                                        <a style="font-size:10px; color:#636363; font-weight: 500;"><img src="images/walking.png" style="width:4%;">&nbsp 10 minutes</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="padding-top:0px">
                                                <div style="background-color:#fff; border-radius:4px; height:55px; width:270px;">
                                                    <div style="padding: 11px 10px 10px 10px; text-align: left;">
                                                        <a href="detail_attraction.php"><img src="images/castelsantangelo_sq.jpg" style="width:36px; border-radius:1000px;"></a>&nbsp&nbsp&nbsp&nbsp
                                                        <a href="detail_attraction.php" style="font-size:16px; color:#636363; font-weight: 500; padding-top:10px;" class="soap-icon-departure">&nbsp&nbspCastel Sant'Angelo</a><br>
                                                        
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>

                                </div>
                                <div style="position:relative; margin-top:-400px; margin-left:285px;height:400px;width:280px;color:black;"><br>
                                        
                                        <tr>
                                            <th><img src="images/maps.jpg" style="width:748px;"></th>
                                        </tr>
                                        
                                </div><br>
                                <div style="position:relative;"><br>
                                        
                                        <tr>
                                            <th>
                                                <a href="#"><img src="images/add.png">&nbsp add attraction</a>&nbsp&nbsp&nbsp&nbsp&nbsp
                                                <a href="#"><img src="images/add.png">&nbsp add restaurant</a>
                                                &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                                                <a href="#" style="background-color: #f5b418; padding: 7px 14px 7px 14px; border-radius:30px; font-size:12px; font-weight:400; color:#fff;"><img src="images/carrental.png" style="width:1.5%;">&nbsp find rental car</a>
                                                &nbsp&nbsp&nbsp&nbsp&nbsp
                                                <a href="#" style="background-color: #5fdd5f; padding: 7px 14px 7px 14px; border-radius:30px; font-size:12px; font-weight:400; color:#fff;"><img src="images/event.png" style="width:1.5%;">&nbsp find event</a>
                                            </th>
                                        </tr>
                                        
                                </div>

                        </div>
                    </div>
                    <div style="width:100%; position:relative; z-index:99;">
                <div class="container">
                    <div style="border-style: solid; border:1px; border-color:#222; padding: 10px 70px 30px 60px; ">
                        <div style="border-style: solid; border:1px; border-color:#222; text-align:left; ">

                                            <a href="#" style="background-color:#0095da; color:#fff; padding: 7px 14px 7px 14px; border-radius:30px; font-size:12px; font-weight:700;">Day 1</a>
                                            &nbsp
                                            <a href="#" style="border:1px solid #d8d8d8; padding: 7px 14px 7px 14px; border-radius:30px; font-size:12px; font-weight:700;">Day 2</a>
                                            &nbsp
                                            <a href="#" style="border:1px solid #d8d8d8; padding: 7px 14px 7px 14px; border-radius:30px; font-size:12px; font-weight:700;">Day 3</a>
                                            &nbsp
                                            <a href="#"><img src="images/add.png" style="width:13px;"> Add day</a>
                                        </div>
                        
                    </div>   
                    <div class="container">
                    <div style="border-style: solid; border:0px solid #fff; border-color:#222; background-color: #fff; padding: 0px 0px 0px 10px;  border-radius:8px;">
                        <table style="text-align:center; border:0px solid #000; width:100%;">
                                    <tr>
                                        <th rowspan="3" width="300px"><a href="detail_attraction.php"><img src="images/vaticangarden.jpg" width="300px;"></a></th>
                                        <th colspan="2" style="color:#343434; font-size:16px; font-weight:500; padding: 10px 10px 10px 20px; text-align:left;" class="soap-icon-departure">
                                        <a href="detail_attraction.php">Vatican Garden</a><br>
                                        <img src="images/stars.png" style="width:10%;"></th>
                                        <th rowspan="3" style="background-color:#fafafa; width:220px;vertical-align: text-top; font-weight:700; padding: 10px 10px 10px 10px; border-top-right-radius:8px; border-bottom-right-radius:8px;">
                                            Category:<br>
                                            <a style="font-weight:500;">Parks & gardens</a>
                                            <br><br><br>
                                            Opening hours:<br>
                                            <a style="font-weight:500;">09:00 - 16:00</a>
                                        </th>
                                    </tr>
                                    <tr>
                                        <td colspan="2" style="color:#636363; font-size:13px; font-weight:400; padding: 10px 10px 10px 20px; text-align:left;">
                                            Vatican City is a walled sovereign city-state within Rome it covers 110 acres it is the headquarters of the Catholic Church and the home of the Pope. The Vatican Gardens, as the name suggests, are gardens within this walled enclave. The gardens are located in the south and northeastern areas of the city and cover about 50 acres, almost half of the Vatican ...
                                            <br><a href="#" style="color:#625f93; font-size:12px;"><i>view detail</i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="color:#636363; font-size:13px; font-weight:400; padding: 10px 10px 10px 20px; text-align:left;">00120 Vatican City<a href="#" style="color:#625f93; font-size:12px;">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp show direction</a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<a href="#nearby-restaurant" class="soap-popupbox soap-icon-breakfast" style="background-color: #0095da; padding: 7px 14px 7px 14px; border-radius:30px; font-size:12px; font-weight:400; color:#fff;">&nbsp find nearby restaurant</a></td>
                                        <td style="color:#636363; font-size:13px; font-weight:400; padding: 10px 10px 10px 20px; text-align:right;"><a href="#">remove</a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<a href="#change-attraction" class="soap-popupbox" >change</a></td>
                                    </tr>
                        </table>
                    </div>
                    
                    <div style="border-style: solid; border:0px solid #fff; border-color:#222; padding: 0px 0px 0px 40px; margin-left:50px;">
                        <table style="text-align:center; border-left:2.5px solid #636363;">
                                    <tr>
                                        <td style="padding-left:10px; height:80px;">
                                            <a href="#"><img src="images/walking.png" style="padding-right:10px; padding-bottom:10px;">0.9 km, 13 minutes walking</a><br>
                                            <a href="#"><img src="images/car.png" style="padding-right:10px; width:16%;">0.9 km, 8 minutes by car</a>
                                        </td>
                                    </tr>
                        </table>
                    </div>
                    <div style="border-style: solid; border:0px solid #fff; border-color:#222; background-color: #fff; padding: 0px 0px 0px 10px;  border-radius:8px;">
                        <table style="text-align:center; border:0px solid #000; width:100%;">
                                    <tr>
                                        <th rowspan="3" width="300px"><a href="detail_attraction.php"><img src="images/chapel.jpg" width="300px;"></a></th>
                                        <th colspan="2" style="color:#343434; font-size:16px; font-weight:500; padding: 10px 10px 10px 20px; text-align:left;" class="soap-icon-departure">
                                        <a href="detail_attraction.php">The Sistine Chapel</a><br>
                                        <img src="images/stars.png" style="width:10%;"></th>
                                        <th rowspan="3" style="background-color:#fafafa; width:220px;vertical-align: text-top; font-weight:700; padding: 10px 10px 10px 10px; border-top-right-radius:8px; border-bottom-right-radius:8px;">
                                            Category:<br>
                                            <a style="font-weight:500;">Religious sites</a>
                                            <br><br><br>
                                            Opening hours:<br>
                                            <a style="font-weight:500;">09:00 - 16:00</a>
                                        </th>
                                    </tr>
                                    <tr>
                                        <td colspan="2" style="color:#636363; font-size:13px; font-weight:400; padding: 10px 10px 10px 20px; text-align:left;">
                                            The Sistine Chapel is part of the Vatican Museums and is named after Pope Sixtus IV (pope from 1471 to 1484). He ordered the restoration of the old Cappella Magna which was carried out by an illustrious list of artists including Botticelli, The Vatican Gardens, as the name suggests, are gardens within this walled enclave. The gardens are located in the south and northeastern areas of the city and cover about 50 acres, almost half of the Vatican ...
                                            <br><a href="#" style="color:#625f93; font-size:12px;"><i>view detail</i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="color:#636363; font-size:13px; font-weight:400; padding: 10px 10px 10px 20px; text-align:left;">00120 Vatican City<a href="#" style="color:#625f93; font-size:12px;">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp show direction</a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<a href="#nearby-restaurant" class="soap-popupbox soap-icon-breakfast" style="background-color: #0095da; padding: 7px 14px 7px 14px; border-radius:30px; font-size:12px; font-weight:400; color:#fff;">&nbsp find nearby restaurant</a></td>
                                        <td style="color:#636363; font-size:13px; font-weight:400; padding: 10px 10px 10px 20px; text-align:right;"><a href="#">remove</a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<a href="#change-attraction" class="soap-popupbox" >change</a></td>
                                    </tr>
                        </table>
                    </div>
                    <div style="border-style: solid; border:0px solid #fff; border-color:#222; padding: 0px 0px 0px 40px; margin-left:50px;">
                        <table style="text-align:center; border-left:2.5px solid #636363;">
                                    <tr>
                                        <td style="padding-left:10px; height:80px;">
                                            <a href="#"><img src="images/walking.png" style="padding-right:10px; padding-bottom:10px;">0.9 km, 13 minutes walking</a><br>
                                            <a href="#"><img src="images/car.png" style="padding-right:10px; width:16%;">0.9 km, 8 minutes by car</a>
                                        </td>
                                    </tr>
                        </table>
                    </div>
                    <div style="border-style: solid; border:0px solid #fff; border-color:#222; background-color: #fff; padding: 0px 0px 0px 20px;  border-radius:8px; margin-left:30px; width:700px;">
                        <table style="text-align:center; border:0px solid #000;">
                                    <tr>
                                        <th rowspan="3" width="90px"><a href="detail_attraction.php"><img src="images/piccolobuco_sq.jpg" style="border-radius:1000px;" width="90px;"></a></th>
                                        <th colspan="2" style="color:#343434; font-size:16px; font-weight:500; padding: 10px 10px 10px 20px; text-align:left;" class="soap-icon-breakfast">
                                        <a href="detail_attraction.php">Piccolo Buco</a><br>
                                        <img src="images/stars.png" style="width:10%;"></th>
                                    </tr>
                                    <tr>
                                        <td colspan="3" style="color:#636363; font-size:13px; font-weight:400; padding: 10px 10px 10px 20px; text-align:left;">
                                            Takeout, Waitstaff, Serves Alcohol, Accepts Mastercard, Accepts Visa, Reservations, Seating, Highchairs Available, Wine and Beer, Accepts Credit Cards<br><a href="#" style="color:#625f93; font-size:12px;"><i>view detail</i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="color:#636363; font-size:13px; font-weight:400; padding: 10px 10px 10px 20px; text-align:left;">00120 Vatican City<a href="#" style="color:#625f93; font-size:12px;">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp show direction</a></td>
                                        <td style="color:#636363; font-size:13px; font-weight:400; padding: 10px 30px 10px 20px; text-align:right;"><a href="#">remove</a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<a href="#nearby-restaurant" class="soap-popupbox" >change</a></td>
                                    </tr>
                        </table>
                    </div>
                    <div style="border-style: solid; border:0px solid #fff; border-color:#222; padding: 0px 0px 0px 40px; margin-left:50px;">
                        <table style="text-align:center; border-left:2.5px solid #636363;">
                                    <tr>
                                        <td style="padding-left:10px; height:80px;">
                                            <a href="#"><img src="images/walking.png" style="padding-right:10px; padding-bottom:10px;">0.9 km, 13 minutes walking</a><br>
                                            <a href="#"><img src="images/car.png" style="padding-right:10px; width:16%;">0.9 km, 8 minutes by car</a>
                                        </td>
                                    </tr>
                        </table>
                    </div>
                    <div style="border-style: solid; border:0px solid #fff; border-color:#222; background-color: #fff; padding: 0px 0px 0px 10px;  border-radius:8px;">
                        <table style="text-align:center; border:0px solid #000; width:100%;">
                                    <tr>
                                        <th rowspan="3" width="300px"><a href="detail_attraction.php"><img src="images/vaticanmuseum.jpg" width="300px;"></a></th>
                                        <th colspan="2" style="color:#343434; font-size:16px; font-weight:500; padding: 10px 10px 10px 20px; text-align:left;" class="soap-icon-departure">
                                        <a href="detail_attraction.php">Vatican Museums</a><br>
                                        <img src="images/stars.png" style="width:10%;"></th>
                                        <th rowspan="3" style="background-color:#fafafa; width:220px;vertical-align: text-top; font-weight:700; padding: 10px 10px 10px 10px; border-top-right-radius:8px; border-bottom-right-radius:8px;">
                                            Category:<br>
                                            <a style="font-weight:500;">Museums</a>
                                            <br><br><br>
                                            Opening hours:<br>
                                            <a style="font-weight:500;">09:00 - 16:00</a>
                                        </th>
                                    </tr>
                                    <tr>
                                        <td colspan="2" style="color:#636363; font-size:13px; font-weight:400; padding: 10px 10px 10px 20px; text-align:left;">
                                            Vatican City is a walled sovereign city-state within Rome it covers 110 acres it is the headquarters of the Catholic Church and the home of the Pope. The Vatican Gardens, as the name suggests, are gardens within this walled enclave. The gardens are located in the south and northeastern areas of the city and cover about 50 acres, almost half of the Vatican ...
                                            <br><a href="#" style="color:#625f93; font-size:12px;"><i>view detail</i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="color:#636363; font-size:13px; font-weight:400; padding: 10px 10px 10px 20px; text-align:left;">00120 Vatican City<a href="#" style="color:#625f93; font-size:12px;">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp show direction</a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<a href="#nearby-restaurant" class="soap-popupbox soap-icon-breakfast" style="background-color: #0095da; padding: 7px 14px 7px 14px; border-radius:30px; font-size:12px; font-weight:400; color:#fff;">&nbsp find nearby restaurant</a></td>
                                        <td style="color:#636363; font-size:13px; font-weight:400; padding: 10px 10px 10px 20px; text-align:right;"><a href="#">remove</a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<a href="#change-attraction" class="soap-popupbox" >change</a></td>
                                    </tr>
                        </table>
                    </div>
                    <div style="border-style: solid; border:0px solid #fff; border-color:#222; padding: 0px 0px 0px 40px; margin-left:50px;">
                        <table style="text-align:center; border-left:2.5px solid #636363;">
                                    <tr>
                                        <td style="padding-left:10px; height:80px;">
                                            <a href="#"><img src="images/walking.png" style="padding-right:10px; padding-bottom:10px;">0.9 km, 13 minutes walking</a><br>
                                            <a href="#"><img src="images/car.png" style="padding-right:10px; width:16%;">0.9 km, 8 minutes by car</a>
                                        </td>
                                    </tr>
                        </table>
                    </div> 
                    <div style="border-style: solid; border:0px solid #fff; border-color:#222; background-color: #fff; padding: 0px 0px 0px 10px;  border-radius:8px;">
                        <table style="text-align:center; border:0px solid #000; width:100%;">
                                    <tr>
                                        <th rowspan="3" width="300px"><a href="detail_attraction.php"><img src="images/basilica.jpg" width="300px;"></a></th>
                                        <th colspan="2" style="color:#343434; font-size:16px; font-weight:500; padding: 10px 10px 10px 20px; text-align:left;" class="soap-icon-departure">
                                        <a href="detail_attraction.php">St. Peter's Basilica</a><br>
                                        <img src="images/stars.png" style="width:10%;"></th>
                                        <th rowspan="3" style="background-color:#fafafa; width:220px;vertical-align: text-top; font-weight:700; padding: 10px 10px 10px 10px; border-top-right-radius:8px; border-bottom-right-radius:8px;">
                                            Category:<br>
                                            <a style="font-weight:500;">Museums</a>
                                            <br><br><br>
                                            Opening hours:<br>
                                            <a style="font-weight:500;">09:00 - 16:00</a>
                                        </th>
                                    </tr>
                                    <tr>
                                        <td colspan="2" style="color:#636363; font-size:13px; font-weight:400; padding: 10px 10px 10px 20px; text-align:left;">
                                            Vatican City is a walled sovereign city-state within Rome it covers 110 acres it is the headquarters of the Catholic Church and the home of the Pope. The Vatican Gardens, as the name suggests, are gardens within this walled enclave. The gardens are located in the south and northeastern areas of the city and cover about 50 acres, almost half of the Vatican ...
                                            <br><a href="#" style="color:#625f93; font-size:12px;"><i>view detail</i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="color:#636363; font-size:13px; font-weight:400; padding: 10px 10px 10px 20px; text-align:left;">00120 Vatican City<a href="#" style="color:#625f93; font-size:12px;">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp show direction</a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<a href="#nearby-restaurant" class="soap-popupbox soap-icon-breakfast" style="background-color: #0095da; padding: 7px 14px 7px 14px; border-radius:30px; font-size:12px; font-weight:400; color:#fff;">&nbsp find nearby restaurant</a></td>
                                        <td style="color:#636363; font-size:13px; font-weight:400; padding: 10px 10px 10px 20px; text-align:right;"><a href="#">remove</a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<a href="#change-attraction" class="soap-popupbox">change</a></td>
                                    </tr>
                        </table>
                    </div>
                    <div style="border-style: solid; border:0px solid #fff; border-color:#222; padding: 0px 0px 0px 40px; margin-left:50px;">
                        <table style="text-align:center; border-left:2.5px solid #636363;">
                                    <tr>
                                        <td style="padding-left:10px; height:80px;">
                                            <a href="#"><img src="images/walking.png" style="padding-right:10px; padding-bottom:10px;">0.9 km, 13 minutes walking</a><br>
                                            <a href="#"><img src="images/car.png" style="padding-right:10px; width:16%;">0.9 km, 8 minutes by car</a>
                                        </td>
                                    </tr>
                        </table>
                    </div>
                    <div style="border-style: solid; border:0px solid #fff; border-color:#222; background-color: #fff; padding: 0px 0px 0px 10px;  border-radius:8px;">
                        <table style="text-align:center; border:0px solid #000; width:100%;">
                                    <tr>
                                        <th rowspan="3" width="300px"><a href="detail_attraction.php"><img src="images/square.jpg" width="300px;"></a></th>
                                        <th colspan="2" style="color:#343434; font-size:16px; font-weight:500; padding: 10px 10px 10px 20px; text-align:left;" class="soap-icon-departure">
                                        <a href="detail_attraction.php">St. Peter's Square</a><br>
                                        <img src="images/stars.png" style="width:10%;"></th>
                                        <th rowspan="3" style="background-color:#fafafa; width:220px;vertical-align: text-top; font-weight:700; padding: 10px 10px 10px 10px; border-top-right-radius:8px; border-bottom-right-radius:8px;">
                                            Category:<br>
                                            <a style="font-weight:500;">Parks & gardens</a>
                                            <br><br><br>
                                            Opening hours:<br>
                                            <a style="font-weight:500;">09:00 - 16:00</a>
                                        </th>
                                    </tr>
                                    <tr>
                                        <td colspan="2" style="color:#636363; font-size:13px; font-weight:400; padding: 10px 10px 10px 20px; text-align:left;">
                                            Vatican City is a walled sovereign city-state within Rome it covers 110 acres it is the headquarters of the Catholic Church and the home of the Pope. The Vatican Gardens, as the name suggests, are gardens within this walled enclave. The gardens are located in the south and northeastern areas of the city and cover about 50 acres, almost half of the Vatican ...
                                            <br><a href="#" style="color:#625f93; font-size:12px;"><i>view detail</i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="color:#636363; font-size:13px; font-weight:400; padding: 10px 10px 10px 20px; text-align:left;">00120 Vatican City<a href="#" style="color:#625f93; font-size:12px;">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp show direction</a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<a href="#nearby-restaurant" class="soap-popupbox soap-icon-breakfast" style="background-color: #0095da; padding: 7px 14px 7px 14px; border-radius:30px; font-size:12px; font-weight:400; color:#fff;">&nbsp find nearby restaurant</a></td>
                                        <td style="color:#636363; font-size:13px; font-weight:400; padding: 10px 10px 10px 20px; text-align:right;"><a href="#">remove</a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<a href="#change-attraction" class="soap-popupbox" >change</a></td>
                                    </tr>
                        </table>
                    </div>
                    <div style="border-style: solid; border:0px solid #fff; border-color:#222; padding: 0px 0px 0px 40px; margin-left:50px;">
                        <table style="text-align:center; border-left:2.5px solid #636363;">
                                    <tr>
                                        <td style="padding-left:10px; height:80px;">
                                            <a href="#"><img src="images/walking.png" style="padding-right:10px; padding-bottom:10px;">0.9 km, 13 minutes walking</a><br>
                                            <a href="#"><img src="images/car.png" style="padding-right:10px; width:16%;">0.9 km, 8 minutes by car</a>
                                        </td>
                                    </tr>
                        </table>
                    </div>
                    <div style="border-style: solid; border:0px solid #fff; border-color:#222; background-color: #fff; padding: 0px 0px 0px 20px;  border-radius:8px; margin-left:30px; width:700px;">
                        <table style="text-align:center; border:0px solid #000;">
                                    <tr>
                                        <th rowspan="3" width="90px"><a href="detail_attraction.php"><img src="images/lapergola.jpg" style="border-radius:1000px;" width="90px;"></a></th>
                                        <th colspan="2" style="color:#343434; font-size:16px; font-weight:500; padding: 10px 10px 10px 20px; text-align:left;" class="soap-icon-breakfast">
                                        <a href="detail_attraction.php">La Pergola</a><br>
                                        <img src="images/stars.png" style="width:10%;"></th>
                                    </tr>
                                    <tr>
                                        <td colspan="3" style="color:#636363; font-size:13px; font-weight:400; padding: 10px 10px 10px 20px; text-align:left;">
                                            Reservations, Outdoor Seating, Private Dining, Seating, Waitstaff, Parking Available, Validated Parking, Valet Parking, Wheelchair Accessible, Serves Alcohol, Full Bar<br><a href="#" style="color:#625f93; font-size:12px;"><i>view detail</i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="color:#636363; font-size:13px; font-weight:400; padding: 10px 10px 10px 20px; text-align:left;">00120 Vatican City<a href="#" style="color:#625f93; font-size:12px;">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp show direction</a></td>
                                        <td style="color:#636363; font-size:13px; font-weight:400; padding: 10px 30px 10px 20px; text-align:right;"><a href="#">remove</a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<a href="#nearby-restaurant" class="soap-popupbox" >change</a></td>
                                    </tr>
                        </table>
                    </div>
                    <div style="border-style: solid; border:0px solid #fff; border-color:#222; padding: 0px 0px 0px 40px; margin-left:50px;">
                        <table style="text-align:center; border-left:2.5px solid #636363;">
                                    <tr>
                                        <td style="padding-left:10px; height:80px;">
                                            <a href="#"><img src="images/walking.png" style="padding-right:10px; padding-bottom:10px;">0.9 km, 13 minutes walking</a><br>
                                            <a href="#"><img src="images/car.png" style="padding-right:10px; width:16%;">0.9 km, 8 minutes by car</a>
                                        </td>
                                    </tr>
                        </table>
                    </div>
                    <div style="background-color: #fff; padding: 0px 0px 0px 10px; border-top-left-radius:8px; border-top-right-radius:8px;">
                        <table style="text-align:center; border:0px solid #000; width:100%;">
                                    <tr>
                                        <th rowspan="3" width="300px"><a href="detail_attraction.php"><img src="images/castel.jpg" width="300px;" style="padding-top:10px;"></a></th>
                                        <th colspan="2" style="color:#343434; font-size:16px; font-weight:500; padding: 10px 10px 10px 20px; text-align:left;" class="soap-icon-departure">
                                        <a href="detail_attraction.php">Castel Sant'Angelo</a><br>
                                        <img src="images/stars.png" style="width:10%;"></th>
                                        <th rowspan="3" style="background-color:#fafafa; width:220px;vertical-align: text-top; font-weight:700; padding: 10px 10px 10px 10px; border-top-right-radius:8px; border-bottom-right-radius:8px;">
                                            Category:<br>
                                            <a style="font-weight:500;">Museums</a>
                                            <br><br><br>
                                            Opening hours:<br>
                                            <a style="font-weight:500;">09:00 - 19:30</a>
                                        </th>
                                    </tr>
                                    <tr>
                                        <td colspan="2" style="color:#636363; font-size:13px; font-weight:400; padding: 10px 10px 10px 20px; text-align:left;">
                                            The Museum is divided into four sections, the history of Castel Sant'Angelo is illustrated by vintage prints, scenic views and interesting reconstructions ideals of the monument, as suggested by the imagination of artists and architects of the Renaissance, from its construction until the nineteenth century, in a path that highlights the intense and ongoing.
                                            <br><!--<a href="#" style="color:#625f93; font-size:12px;"><i>view detail</i></a>-->
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="color:#636363; font-size:13px; font-weight:400; padding: 10px 10px 10px 20px; text-align:left;">Lungotevere Castello 50, 00193 Rome<a href="#" style="color:#625f93; font-size:12px;">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp show direction</a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<a href="#nearby-restaurant" class="soap-popupbox soap-icon-breakfast" style="background-color: #0095da; padding: 7px 14px 7px 14px; border-radius:30px; font-size:12px; font-weight:400; color:#fff;">&nbsp find nearby restaurant</a></td>
                                        <td style="color:#636363; font-size:13px; font-weight:400; padding: 10px 10px 10px 20px; text-align:right;"><a href="#">remove</a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<a href="#change-attraction" class="soap-popupbox" >change</a></td>
                                    </tr>
                        </table>
                        <div style="text-align:center; border:0px solid #000; width:100%; padding: 0px 0px 20px 0px; border-bottom-left-radius:8px;">
                                    <img src="images/detail_att.jpg" style="width:1150px;">
                        </div>

                    </div><br>
                    <div style="border-style: solid; border:1px; border-color:#222; padding: 10px 70px 30px 60px; ">
                        <div style="border-style: solid; border:1px; border-color:#222; text-align:left; ">

                                            <a href="#" style="background-color:#0095da; color:#fff; padding: 7px 14px 7px 14px; border-radius:30px; font-size:12px; font-weight:700;">Day 1</a>
                                            &nbsp
                                            <a href="#" style="border:1px solid #d8d8d8; padding: 7px 14px 7px 14px; border-radius:30px; font-size:12px; font-weight:700;">Day 2</a>
                                            &nbsp
                                            <a href="#" style="border:1px solid #d8d8d8; padding: 7px 14px 7px 14px; border-radius:30px; font-size:12px; font-weight:700;">Day 3</a>
                                            &nbsp
                                            <a href="#"><img src="images/add.png" style="width:13px;"> Add day</a>
                                        </div>
                        
                    </div> 
                                       
                </div>

<hr style="border-color:#d3d3d3;">
                </div>
                <hr>
                <div class="container">
                    <div class="toggle-container">
                        <!-- Accomodation -->
                        <div class="panel style1">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" href="#tgg1" class="collapsed">Accomodation</a>
                            </h4>
                            <div id="tgg1" class="panel-collapse collapse">
                                <div class="panel-content">
                                    
                                </div>
                            </div>
                        </div>
                        <!-- Flight -->
                        <div class="panel style1">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" href="#tgg2" class="collapsed">Flight</a>
                            </h4>
                            <div id="tgg2" class="panel-collapse collapse">
                                <div class="panel-content">
                                    
                                </div>
                            </div>
                        </div>
                    </div> 
                </div>                                           
                <div style="background-color:#f0f0f0; width:100%; position:relative; z-index:99; margin-top:10px;">
                                    <?php
                                        include "includes/popular_nearby_attractions.php";
                                    ?>
            </div><br><br><br>
            </div>
                </div>
        </section>
        <?php
            include "includes/footer.php";
        ?>

<script>
    function newName() {
        var newName = document.getElementById('new-name').value;
        document.getElementById('iti-name').innerHTML = newName;
    }

    function newDate() {
        var monthNames = ["", "Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Okt", "Nov", "Dec"];
        var fInput = document.getElementById('from-date').value;
        var fCreate = new Date(fInput);
        var fDate = "";
        if(fCreate.getDate() < 10) {
            fDate = "0" + fCreate.getDate();
        } else {
            fDate = fCreate.getDate();
        }
        var fMonth = fCreate.getMonth() + 1;

        var tInput = document.getElementById('to-date').value;
        var tCreate = new Date(tInput);
        var tDate = "";
        if(tCreate.getDate() < 10) {
            tDate = "0" + tCreate.getDate();
        } else {
            tDate = tCreate.getDate();
        }
        var tMonth = tCreate.getMonth() + 1;
        var tYear = tCreate.getFullYear();
        document.getElementById('iti-date').innerHTML = fDate + " " + monthNames[fMonth] + " - " + tDate + " " + monthNames[tMonth] + " " + tYear;
    }

    function newGuestCount(){
        var newCount = document.getElementById('count').value;
        var count = "";
        if (newCount == 1) {
            count = newCount + " person";
        } else {
            count = newCount + " people";
        }
        document.getElementById('iti-guest-count').innerHTML = count;
    }
</script>
</body>
</html>

