<!-- javascript redirect -->
<script>
    function redirect(target) {
        window.location.replace(target);
    }
</script>

<?php
ob_start();
include_once('./db.php');
include_once('./classes/login_class.php');

$des = $_GET['des'];
$dArrive = $_GET['arrive'];
$dDepart = $_GET['depart'];
$day = $_GET['day'];
$ppl = $_GET['ppl'];
$name = $_GET['name'];

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
        
        <section id="content" style="min-height:700px;">
            <header id="header" class="navbar-static-top">
            <?php
                if(Login::isLoggedIn()) {
                    include "includes/menu-loggedin.php";
                } else {
                    include "includes/menu2.php";
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
            <?php
                include "includes/login-seefull-iti.php";
            ?>
        </header>
            <div style="background-color:#343434; width:100%; height:70px; position:relative; z-index:99;">
                <div class="container">
                    <div style="border-style: solid; border:1px; border-color:#222; padding: 30px 20px 30px 30px; text-align:center; ">
                        <h1 style="color:#fff; font-size:20px; margin-top:-5px; font-weight:700;">Your personal travel guide</h1>
                    </div>                    
                </div>
            </div>
            <div style="background-color:#fff; width:100%; height:330px; position:relative; z-index:99;">
                <div class="container">
                    <div style="border-style: solid; border:1px; border-color:#222; padding: 30px 70px 30px 60px; ">
                        <table style="text-align:center; border:0px solid #000; width:100%;">
                                <tr>
                                    <th rowspan="3" width="400px;"><img src="images/result_iti_pic.jpg" style="padding-right:20px; width:100%;"></th>
                                    <th colspan="2" width="1000px" style="color:#343434; font-size:18px; font-weight:700; padding: 10px 10px 10px 0px; text-align:left;">
                                        <a href="itinerary_detail.php">
                                            <?php
                                                echo $name;
                                            ?> 
                                    </th>
                                    <th colspan="2" style="color:#4e4e4e; font-size:18px; font-weight:400; padding: 10px 10px 10px 10px; text-align:right;">

                                        <img src="images/goldcoin.png" style="width:32px;"><br>
                                        <a href="policies.php" target="_blank" style="font-size:8px;"><i>what's this?</i></a>
                                    </th>
                                </tr>
                                <tr>
                                    <td colspan="4" style="color:#343434; font-size:14px; padding: 10px 10px 10px 0px; text-align:justify; height:150px;">
                                        This pre-planned 3 days Rome itinerary will allow you to explore Rome's must-sees, landmarks, museums and attractions. See how you can make the best out of a 3 days stay in Rome as you make your way through the Sistine Chapel with its world famous ceiling fresco, the Vatican Museums, the Colosseum and all other Rome's attractions - religious and imperial. 
                                        <br><br>
                                        If you are planning a 3 days visit to Rome and are interested to visit its top attractions then this plan may well suit your needs.</td>
                                </tr>
                                <tr>
                                    <td width="150px">
                                        <form action="" method="post">
                                            <?php
                                                if (Login::isLoggedIn()) {
                                                    echo "<button onclick='redirect(target)' type='submit' name='seefull' class='full-width btn-medium' style='border-radius:30px; background-color:#0095da; font-size:13px;'>see full itinerary</button>";
                                                } else {
                                                    echo "<a href='#travelo-signup' class='soap-popupbox'><button type='submit' name='seefull' class='full-width btn-medium' style='border-radius:30px; background-color:#0095da; font-size:13px;'>see full itinerary</button></a>";
                                                }

                                                if(isset($_POST['seefull'])) {
                                                    echo "<script>redirect('itinerary_detail.php?des=$des&arrive=$dArrive&depart=$dDepart&day=$day&$ppl=$ppl&name=$name')</script>";
                                                }
                                            ?>
                                        </form>
                                    </td>
                                    <td style="color:#343434; font-size:13px; font-weight:500; padding: 10px 10px 0px 10px; text-align:right;">
                                    </td>
                                    <td style="color:#343434; font-size:13px; font-weight:500; padding: 10px 10px 0px 10px; text-align:right;">
                                    </td>
                                    <td style="color:#636363; font-size:13px; font-weight:500; padding: 10px 10px 0px 10px; text-align:right;">
                                        <a href="#travelo-login" class="soap-popupbox"><img src="images/download_icon.png" style="width:7%; padding-right:5px;">download</a>&nbsp&nbsp&nbsp
                                        <a href="#travelo-login" class="soap-popupbox"><img src="images/print_icon.png" style="width:7%; padding-right:5px;">print</a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                                        <a href="#travelo-login" class="soap-popupbox soap-icon-facebook circle" style="border: 1px solid #3b5998; background-color:#3b5998; color:#fff; "></a>&nbsp&nbsp&nbsp
                                        <a href="#travelo-login" class="soap-popupbox soap-icon-twitter circle" style="border: 1px solid #00aced; background-color:#00aced; color:#fff;"></a>&nbsp&nbsp&nbsp
                                        <a href="#travelo-login" class="soap-popupbox soap-icon-googleplus circle" style="border: 1px solid #d34836; background-color:#d34836; color:#fff;"></a>&nbsp&nbsp&nbsp
                                        <a href="#travelo-login" class="soap-popupbox soap-icon-pinterest circle" style="border: 1px solid #cb2027; background-color:#cb2027; color:#fff;"></a>&nbsp&nbsp&nbsp
                                        <a href="#travelo-login" class="soap-popupbox soap-icon-tumblr circle" style="border: 1px solid #35465c; background-color:#35465c; color:#fff;"></a>
                                    
                                    </td>
                                </tr>
                            </table>
                    </div>                    
                </div>
            </div>

                            <div style="background-color:#f0f0f0; width:100%; position:relative; z-index:99; margin-top:0px;">
                                    <div class="container" style="padding-top:20px; padding-bottom:-10px;">
                                        <?php
                                            include "includes/related_itineraries.php";
                                        ?>
                                     </div> 
            </div>
        </section>
        <?php
            include "includes/footer.php";
        ?>
</body>
</html>

