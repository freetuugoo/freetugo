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
.dropbtn {
    background-color: #19285f;
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
    background-color: #19285f;
}
</style>

</head>
<body>
       <div id="page-wrapper">
        
        <section id="content" style="min-height:700px;">
            <header id="header" class="navbar-static-top">
            <?php
                include "includes/menu2.php";
            ?>
            
            <?php
                include "includes/menu_mobile.php";
            ?>
            <?php
                include "includes/signup.php"
            ?>
            <?php
                include "includes/login.php"
            ?>
        </header>
            <div style="background-color:#19285f; width:100%; height:70px; position:relative; z-index:99;">
                <div class="container">
                    <div style="border-style: solid; border:1px; border-color:#222; padding: 30px 20px 30px 30px; text-align:center; ">
                        <h1 style="color:#fff; font-size:20px; margin-top:-5px; font-weight:700;">Jon Snow personal travel guide</h1>
                    </div>                    
                </div>
            </div>
            <div style="background-color:#fff; width:100%; height:330px; position:relative; z-index:99;">
                <div class="container">
                    <div style="border-style: solid; border:1px; border-color:#222; padding: 30px 70px 30px 60px; ">
                        <table style="text-align:center; border:0px solid #000; width:100%;">
                                <tr>
                                    <th rowspan="3" width="350px;">
                                        <img src="images/result_iti_pic.jpg" style="padding-right:20px; width:100%;">
                                        <a href="#" style="font-size:13px; font-weight:400; margin-top:10px;">
                                        <img src="images/changeimg.png" style="width:5%;">&nbsp change cover image</a><br><br>
                                        <div style="border-style: solid; border:1px; border-color:#222; text-align:left; ">

                                            <a style="border:1px solid #d8d8d8; padding: 7px 14px 7px 14px; border-radius:30px; font-size:12px; font-weight:400;">museum &nbsp&nbsp x</a>
                                            &nbsp
                                            <a style="border:1px solid #d8d8d8; padding: 7px 14px 7px 14px; border-radius:30px; font-size:12px; font-weight:400;">sightseeing &nbsp&nbsp x</a>
                                            &nbsp
                                            <a style="border:1px solid #d8d8d8; padding: 7px 14px 7px 14px; border-radius:30px; font-size:12px; font-weight:400;">couple &nbsp&nbsp x</a>
                                            &nbsp
                                            <a href="#"><img src="images/add.png" style="width:13px;"></a>
                                        </div>
                                    </th>
                                    <th colspan="2" width="1000px" style="color:#19285f; font-size:16px; font-weight:700; padding: 10px 10px 10px 0px; text-align:left;">
                                        Trip to Rome in 3 days itinerary &nbsp<a href="#"><img src="images/pencil.png" style="padding-right:20px; width:12%;"></a><br>
                                        <p style="font-size:11px; font-weight:400;"><i>by</i>&nbsp&nbsp<a href="#" style="color:#5b5784;"><i>Jon Snow</i></a></p></th>
                                    <th colspan="2" style="color:#4e4e4e; font-size:18px; font-weight:400; padding: 10px 10px 10px 10px; text-align:right;">
                                        <a href="#" style="font-size:13px;">8 Dec - 10 Dec, 2017 &nbsp<img src="images/pencil.png" style="width:3%;"></a><br>
                                        <a href="#" style="font-size:13px;">2 persons &nbsp<img src="images/pencil.png" style="width:3%;"></a>
                                    </th>
                                </tr>
                                <tr>
                                    <td colspan="4" style="color:#636363; font-size:14px; padding: 10px 10px 10px 0px; text-align:justify; height:150px;">
                                        This pre-planned 3 days Rome itinerary will allow you to explore Rome's must-sees, landmarks, museums and attractions. See how you can make the best out of a 3 days stay in Rome as you make your way through the Sistine Chapel with its world famous ceiling fresco, the Vatican Museums, the Colosseum and all other Rome's attractions - religious and imperial. 
                                        <br><br>
                                        If you are planning a 3 days visit to Rome and are interested to visit its top attractions then this plan may well suit your needs.&nbsp<a href="#"><img src="images/pencil.png" style="width:1.7%;"></a></td>
                                </tr>
                                <tr>
                                    <td width="150px"></td>
                                    <td style="color:#19285f; font-size:13px; font-weight:500; padding: 10px 10px 0px 10px; text-align:right;">
                                    </td>
                                    <td style="color:#19285f; font-size:13px; font-weight:500; padding: 10px 10px 0px 10px; text-align:right;">
                                    </td>
                                    <td style="color:#636363; font-size:13px; font-weight:500; padding: 10px 10px 0px 10px; text-align:right;">
                                        <a href="#">flight + accommodations approx. <a style="font-size:17px; color:#19285f">Rp. 36,712,500</a></a><br><br>
                                        <a href="#"><img src="images/saveas_icon.png" style="width:7%; padding-right:5px;">save as</a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                                        <a href="#"><img src="images/download_icon.png" style="width:7%; padding-right:5px;">download</a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                                        <a href="#"><img src="images/print_icon.png" style="width:7%; padding-right:5px;">print</a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                                        <a href="#"><img src="images/share_icon.png" style="width:7%; padding-right:5px;">share</a>
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
                                        <div style="background-color:#19285f; border-radius:4px; height:40px; width:750px;">
                                            <div style="padding: 10px 10px 10px 10px;">
                                                <a style="font-size:14px; color:#fff; font-weight: 500; padding-top:10px;">Total trip : 3 days</a>
                                            </div>
                                        </div>
                                    </th>
                                </tr>
                            </table>
                            <div style="height:400px;width:290px;overflow:auto;color:white;scrollbar-base-color:gold;"><br>
                                        
                                        <tr>
                                            <th></th>
                                            <th rowspan="5"></th>
                                        </tr>
                                        <tr>
                                            <td style="padding-top:10px">
                                                <div style="background-color:#fff; border-radius:4px; height:55px; width:270px;">
                                                    <div style="padding: 10px 10px 10px 10px; text-align: left;">
                                                        <a style="font-size:16px; color:#636363; font-weight: 500;">Vatican Garden</a><br>
                                                        <a style="font-size:10px; color:#636363; font-weight: 500;">00120 Vatican City</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="padding-top:0px; padding-left:20px;">
                                                <div style="border-left: 2px solid #636363; height:30px; width:270px; margin-left:20px;">
                                                    <div style="padding: 8px 10px 10px 10px; text-align: left;">
                                                        <a style="font-size:10px; color:#636363; font-weight: 500;"><img src="images/walking.png" style="width:4%;">&nbsp 10 minutes</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="padding-top:0px">
                                                <div style="background-color:#fff; border-radius:4px; height:55px; width:270px;">
                                                    <div style="padding: 10px 10px 10px 10px; text-align: left;">
                                                        <a style="font-size:16px; color:#636363; font-weight: 500; padding-top:10px;">The Sistine Chapel</a><br>
                                                        <a style="font-size:10px; color:#636363; font-weight: 500; padding-top:10px;">00120 Vatican City</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="padding-top:0px; padding-left:20px;">
                                                <div style="border-left: 2px solid #636363; height:30px; width:270px; margin-left:20px;">
                                                    <div style="padding: 8px 10px 10px 10px; text-align: left; ">
                                                        <a style="font-size:10px; color:#636363; font-weight: 500;"><img src="images/walking.png" style="width:4%;">&nbsp 10 minutes</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="padding-top:0px">
                                                <div style="background-color:#fff; border-radius:4px; height:55px; width:270px;">
                                                    <div style="padding: 10px 10px 10px 10px; text-align: left;">
                                                        <a style="font-size:16px; color:#636363; font-weight: 500; padding-top:10px;">Vatican Museums</a><br>
                                                        <a style="font-size:10px; color:#636363; font-weight: 500; padding-top:10px;">00120 Vatican City</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="padding-top:0px; padding-left:20px;">
                                                <div style="border-left: 2px solid #636363; height:30px; width:270px; margin-left:20px;">
                                                    <div style="padding: 8px 10px 10px 10px; text-align: left;">
                                                        <a style="font-size:10px; color:#636363; font-weight: 500;"><img src="images/walking.png" style="width:4%;">&nbsp 10 minutes</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="padding-top:0px">
                                                <div style="background-color:#fff; border-radius:4px; height:55px; width:270px;">
                                                    <div style="padding: 10px 10px 10px 10px; text-align: left;">
                                                        <a style="font-size:16px; color:#636363; font-weight: 500; padding-top:10px;">St. Peter's Basilica</a><br>
                                                        <a style="font-size:10px; color:#636363; font-weight: 500; padding-top:10px;">00120 Vatican City</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="padding-top:0px; padding-left:20px;">
                                                <div style="border-left: 2px solid #636363; height:30px; width:270px; margin-left:20px;">
                                                    <div style="padding: 8px 10px 10px 10px; text-align: left;">
                                                        <a style="font-size:10px; color:#636363; font-weight: 500;"><img src="images/walking.png" style="width:4%;">&nbsp 10 minutes</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="padding-top:0px">
                                                <div style="background-color:#fff; border-radius:4px; height:55px; width:270px;">
                                                    <div style="padding: 10px 10px 10px 10px; text-align: left;">
                                                        <a style="font-size:16px; color:#636363; font-weight: 500; padding-top:10px;">St. Peter's Square</a><br>
                                                        <a style="font-size:10px; color:#636363; font-weight: 500; padding-top:10px;">00120 Vatican City</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="padding-top:0px; padding-left:20px;">
                                                <div style="border-left: 2px solid #636363; height:30px; width:270px; margin-left:20px;">
                                                    <div style="padding: 8px 10px 10px 10px; text-align: left;">
                                                        <a style="font-size:10px; color:#636363; font-weight: 500;"><img src="images/walking.png" style="width:4%;">&nbsp 10 minutes</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="padding-top:0px">
                                                <div style="background-color:#fff; border-radius:4px; height:55px; width:270px;">
                                                    <div style="padding: 10px 10px 10px 10px; text-align: left;">
                                                        <a style="font-size:16px; color:#636363; font-weight: 500; padding-top:10px;">Castel Sant'Angelo</a><br>
                                                        <a style="font-size:10px; color:#636363; font-weight: 500; padding-top:10px;">00120 Vatican City</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                </div>
                                <div style="position:relative; margin-top:-400px; margin-left:285px;height:400px;width:280px;color:black;"><br>
                                        
                                        <tr>
                                            <th><img src="images/map.jpg" style="width:748px;"></th>
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

                                            <a style="background-color:#19285f; color:#fff; padding: 7px 14px 7px 14px; border-radius:30px; font-size:12px; font-weight:700;">Day 1</a>
                                            &nbsp
                                            <a style="border:1px solid #d8d8d8; padding: 7px 14px 7px 14px; border-radius:30px; font-size:12px; font-weight:700;">Day 2</a>
                                            &nbsp
                                            <a style="border:1px solid #d8d8d8; padding: 7px 14px 7px 14px; border-radius:30px; font-size:12px; font-weight:700;">Day 3</a>
                                            &nbsp
                                            <a href="#"><img src="images/add.png" style="width:13px;"> Add day</a>
                                        </div>
                        
                    </div>   
                    <div class="container">
                    <div style="border-style: solid; border:0px solid #fff; border-color:#222; background-color: #fff; padding: 0px 0px 0px 10px;  border-radius:8px;">
                        <table style="text-align:center; border:0px solid #000; width:100%;">
                                    <tr>
                                        <th rowspan="3" width="300px"><img src="images/vaticangarden.jpg" width="300px;"></th>
                                        <th colspan="2" style="color:#19285f; font-size:16px; font-weight:500; padding: 10px 10px 10px 20px; text-align:left;">
                                        Vatican Garden<br>
                                        <img src="images/stars.png" style="width:10%;"></th>
                                        <th rowspan="3" style="background-color:#fafafa; width:220px;vertical-align: text-top; font-weight:700; padding: 10px 10px 10px 10px; border-top-right:8px;">
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
                                        <td style="color:#636363; font-size:13px; font-weight:400; padding: 10px 10px 10px 20px; text-align:left;">00120 Vatican City</td>
                                        <td style="color:#636363; font-size:13px; font-weight:400; padding: 10px 10px 10px 20px; text-align:right;"><a href="#">remove</a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<a href="#">change</a></td>
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
                                        <th rowspan="3" width="300px"><img src="images/chapel.jpg" width="300px;"></th>
                                        <th colspan="2" style="color:#19285f; font-size:16px; font-weight:500; padding: 10px 10px 10px 20px; text-align:left;">
                                        The Sistine Chapel<br>
                                        <img src="images/stars.png" style="width:10%;"></th>
                                        <th rowspan="3" style="background-color:#fafafa; width:220px;vertical-align: text-top; font-weight:700; padding: 10px 10px 10px 10px; border-top-right:8px;">
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
                                        <td style="color:#636363; font-size:13px; font-weight:400; padding: 10px 10px 10px 20px; text-align:left;">00120 Vatican City</td>
                                        <td style="color:#636363; font-size:13px; font-weight:400; padding: 10px 10px 10px 20px; text-align:right;"><a href="#">remove</a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<a href="#">change</a></td>
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
                                        <th rowspan="3" width="300px"><img src="images/vaticanmuseum.jpg" width="300px;"></th>
                                        <th colspan="2" style="color:#19285f; font-size:16px; font-weight:500; padding: 10px 10px 10px 20px; text-align:left;">
                                        Vatican Museums<br>
                                        <img src="images/stars.png" style="width:10%;"></th>
                                        <th rowspan="3" style="background-color:#fafafa; width:220px;vertical-align: text-top; font-weight:700; padding: 10px 10px 10px 10px; border-top-right:8px;">
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
                                        <td style="color:#636363; font-size:13px; font-weight:400; padding: 10px 10px 10px 20px; text-align:left;">00120 Vatican City</td>
                                        <td style="color:#636363; font-size:13px; font-weight:400; padding: 10px 10px 10px 20px; text-align:right;"><a href="#">remove</a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<a href="#">change</a></td>
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
                                        <th rowspan="3" width="300px"><img src="images/basilica.jpg" width="300px;"></th>
                                        <th colspan="2" style="color:#19285f; font-size:16px; font-weight:500; padding: 10px 10px 10px 20px; text-align:left;">
                                        St. Peter's Basilica<br>
                                        <img src="images/stars.png" style="width:10%;"></th>
                                        <th rowspan="3" style="background-color:#fafafa; width:220px;vertical-align: text-top; font-weight:700; padding: 10px 10px 10px 10px; border-top-right:8px;">
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
                                        <td style="color:#636363; font-size:13px; font-weight:400; padding: 10px 10px 10px 20px; text-align:left;">00120 Vatican City</td>
                                        <td style="color:#636363; font-size:13px; font-weight:400; padding: 10px 10px 10px 20px; text-align:right;"><a href="#">remove</a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<a href="#">change</a></td>
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
                                        <th rowspan="3" width="300px"><img src="images/square.jpg" width="300px;"></th>
                                        <th colspan="2" style="color:#19285f; font-size:16px; font-weight:500; padding: 10px 10px 10px 20px; text-align:left;">
                                        St. Peter's Square<br>
                                        <img src="images/stars.png" style="width:10%;"></th>
                                        <th rowspan="3" style="background-color:#fafafa; width:220px;vertical-align: text-top; font-weight:700; padding: 10px 10px 10px 10px; border-top-right:8px;">
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
                                        <td style="color:#636363; font-size:13px; font-weight:400; padding: 10px 10px 10px 20px; text-align:left;">00120 Vatican City</td>
                                        <td style="color:#636363; font-size:13px; font-weight:400; padding: 10px 10px 10px 20px; text-align:right;"><a href="#">remove</a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<a href="#">change</a></td>
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
                                        <th rowspan="3" width="300px"><img src="images/castel.jpg" width="300px;"></th>
                                        <th colspan="2" style="color:#19285f; font-size:16px; font-weight:500; padding: 10px 10px 10px 20px; text-align:left;">
                                        Castel Sant'Angelo<br>
                                        <img src="images/stars.png" style="width:10%;"></th>
                                        <th rowspan="3" style="background-color:#fafafa; width:220px;vertical-align: text-top; font-weight:700; padding: 10px 10px 10px 10px; border-top-right:8px;">
                                            Category:<br>
                                            <a style="font-weight:500;">Museums</a>
                                            <br><br><br>
                                            Opening hours:<br>
                                            <a style="font-weight:500;">09:00 - 19:30</a>
                                        </th>
                                    </tr>
                                    <tr>
                                        <td colspan="2" style="color:#636363; font-size:13px; font-weight:400; padding: 10px 10px 10px 20px; text-align:left;">
                                            The Museum is divided into four sections, the history of Castel Sant'Angelo is illustrated by vintage prints, scenic views and interesting reconstructions ideals of the monument, as suggested by the imagination of artists and architects of the Renaissance, from its construction until the nineteenth century, in a path that highlights the intense and ongoing ...
                                            <br><a href="#" style="color:#625f93; font-size:12px;"><i>view detail</i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="color:#636363; font-size:13px; font-weight:400; padding: 10px 10px 10px 20px; text-align:left;">Lungotevere Castello 50, 00193 Rome, Italy</td>
                                        <td style="color:#636363; font-size:13px; font-weight:400; padding: 10px 10px 10px 20px; text-align:right;"><a href="#">remove</a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<a href="#">change</a></td>
                                    </tr>
                        </table>
                        <div style="text-align:center; border:0px solid #000; width:100%; padding: 0px 0px 20px 0px; border-bottom-left-radius:8px;">
                                    <img src="images/detail_att.jpg" style="width:1150px;">
                        </div>

                    </div><br>
                    <div style="border-style: solid; border:1px; border-color:#222; padding: 10px 70px 30px 60px; ">
                        <div style="border-style: solid; border:1px; border-color:#222; text-align:left; ">

                                            <a style="background-color:#19285f; color:#fff; padding: 7px 14px 7px 14px; border-radius:30px; font-size:12px; font-weight:700;">Day 1</a>
                                            &nbsp
                                            <a style="border:1px solid #d8d8d8; padding: 7px 14px 7px 14px; border-radius:30px; font-size:12px; font-weight:700;">Day 2</a>
                                            &nbsp
                                            <a style="border:1px solid #d8d8d8; padding: 7px 14px 7px 14px; border-radius:30px; font-size:12px; font-weight:700;">Day 3</a>
                                            &nbsp
                                            <a href="#"><img src="images/add.png" style="width:13px;"> Add day</a>
                                        </div>
                        
                    </div> 
                                       
                </div>

<hr style="border-color:#d3d3d3;">
                </div>
                <hr>
                <div class="container">
                        <img src="images/flighacco.jpg" style="width:100%; margin-top:-40px;">             
                </div>
                <div style="background-color:#f0f0f0; width:100%; position:relative; z-index:99; margin-top:10px;">
                                    <div class="container">
                                        <h1 class="page-title" style="font-size:20px; color:#222; padding-top:40px; text-align:left; padding-left:40px;">
                                            Popular attractions
                                        </h1>
                                        <div style="border-style: solid; border:1px; border-color:#222; padding: 0px 10px 10px 10px; text-align:center;">
                                            <a style="border:1px solid #d8d8d8; border-radius:30px; font-size:15px; "><img src="images/iti.jpg" width="260px" style="padding:10px 10px 10px 10px;"></a>
                                            <a style="border:1px solid #d8d8d8; border-radius:30px; font-size:15px; "><img src="images/iti.jpg" width="260px" style="padding:10px 10px 10px 10px;"></a>
                                            <a style="border:1px solid #d8d8d8; border-radius:30px; font-size:15px; "><img src="images/iti.jpg" width="260px" style="padding:10px 10px 10px 10px;"></a>
                                            <a style="border:1px solid #d8d8d8; border-radius:30px; font-size:15px; "><img src="images/iti.jpg" width="260px" style="padding:10px 10px 10px 10px;"></a>
                                            
                                        </div>
                                     </div>  
            </div><br><br><br>
            </div>
                </div>
        </section>
        <?php
            include "includes/footer.php";
        ?>
</body>
</html>

