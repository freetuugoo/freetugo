<script>
    // javascript redirect
    function redirect($target) {
        window.location.replace($target);
    }
</script>

<?php
ob_start();
include('./db.php');
include('classes/login_class.php');

//Login System
if (Login::isLoggedIn()) {
    // echo "<script type=text/javascript>alert('Logged In')</script>";
} else {
    // echo "<script type=text/javascript>alert('Not Logged In')</script>";
}

//Trip Planner
if (Login::isLoggedIn()) {
    if (isset($_POST['submitPlan'])) {
        $destination = $_POST['destination'];
        $origin = $_POST['origin'];
        $fromDate = $_POST['from-date'];
        $toDate = $_POST['to-date'];
        $personCount = $_POST['person'];
        $budget = $_POST['budget']; 
        
        $arrive = date_create($fromDate);
        $depart = date_create($toDate);
        $dayDiff = date_diff($arrive,$depart);
        $dayCount = $dayDiff->format('%a') + 1;

        $dayArrive = $arrive->format('d M Y');
        $dayDepart = $depart->format('d M Y');

        $name = "";
        if ($dayCount == 1){
            $name = "Trip to $destination in $dayCount day";
        } else {
            $name = "Trip to $destination in $dayCount days";
        }

        $user_id = DB::query('SELECT user_id FROM login_tokens WHERE token=:token', array(':token'=>sha1($_COOKIE['FCID'])))[0]['user_id'];
        
        if(empty($_POST['destination']) || empty($_POST['from-date']) || empty($_POST['to-date']) || empty($_POST['person'])){
            echo "<script>redirect('index.php')</script>";
        } else {
                DB::query('INSERT INTO itineraries VALUES (\'\', :destination, :day_arrive, :day_depart, :day_count, :person_count, :user_id, :name)', array(':destination'=>$destination, ':day_arrive'=>$dayArrive, ':day_depart'=>$dayDepart, ':day_count'=>$dayCount, ':person_count'=>$personCount, ':user_id'=>$user_id, ':name'=>$name));
                echo "<script type=text/javascript>alert('Success')</script>";
                echo "<script>redirect('itinerary_result.php?des=$destination&arrive=$dayArrive&depart=$dayDepart&day=$dayCount&ppl=$personCount&name=$name')</script>";
        }
    }
}
elseif (isset($_POST['submitPlan'])) {
    $des = $_POST['destination'];
    $pc = $_POST['person'];
    $fromDate = $_POST['from-date'];
    $toDate = $_POST['to-date'];

    $arrive = date_create($fromDate);
    $depart = date_create($toDate);
    $dayDiff = date_diff($arrive,$depart);
    $day = $dayDiff->format('%a') + 1;

    $dArrive = $arrive->format('d M Y');
    $dDepart = $depart->format('d M Y');
    
    $name = "";
    if ($dayCount == 1){
        $name = "Trip to $des in $day day";
    } else {
        $name = "Trip to $des in $day days";
    }

    echo "<script>redirect('itinerary_result.php?des=$des&arrive=$dArrive&depart=$dDepart&day=$day&ppl=$pc&name=$name')</script>";
}


?>


<!DOCTYPE html>
<!--[if IE 8]>          <html class="ie ie8"> <![endif]-->
<!--[if IE 9]>          <html class="ie ie9"> <![endif]-->
<!--[if gt IE 9]><!-->  
<html> <!--<![endif]-->


<head>
    <!-- <meta http-equiv="refresh" content="0; url=<?php echo $page ?>"> -->

    <!-- Page Title -->
    <title>fritugo - get unlimited, create your own dream itinerary for your future trip</title>
    <?php
        include "includes/common.php";
    ?>
    
<style>
/*custom font*/

@import url(http://fonts.googleapis.com/css?family=Montserrat);
/*basic reset*/
* {
margin: 0;
padding: 0;
}
html {
height: 100%;
}
body {
    font-family: "Myriad Pro", "Gill Sans", "Gill Sans MT", Calibri, sans-serif;
}
/*form styles*/
#msform {
width: 1050px;
text-align: left;
position: relative;
}
#msform fieldset {
border-radius: 30px;
box-sizing: border-box;
width: 100%;
position: absolute;
/*stacking fieldsets above each other*/

border-radius:30px;
}
/*Hide all except first fieldset*/
#msform fieldset:not(:first-of-type) {
display: none;
}
/*inputs*/
#msform input, #msform textarea {
padding: 15px;
border: 0px solid #ccc;
width: 100%;
box-sizing: border-box;
font-family: montserrat;
color: #2C3E50;
font-size: 13px;
}
/*buttons*/
#msform .action-button {
width: 100px;
background: #27AE60;
font-weight: bold;
color: white;
border: 0 none;
border-radius: 1px;
cursor: pointer;
}
#msform .action-button:hover, #msform .action-button:focus {
box-shadow: 0 0 0 0px white, 0 0 0 0px #27AE60;
}
/*headings*/
.fs-title {
font-size: 15px;
text-transform: uppercase;
color: #2C3E50;
margin-bottom: 10px;
}
.fs-subtitle {
font-weight: normal;
font-size: 13px;
color: #666;
margin-bottom: 20px;
}
/*progressbar*/
#progressbar {
margin-bottom: 30px;
overflow: hidden;
/*CSS counters to number the steps*/
counter-reset: step;
}
#progressbar li {
list-style-type: none;
color: white;
font-size: 9px;
width: 33.33%;
float: left;
position: relative;
}
#progressbar li:before {
content: counter(step);
counter-increment: step;
width: 20px;
line-height: 20px;
display: block;
font-size: 10px;
color: #333;
background: white;
border-radius: 3px;
}
/*progressbar connectors*/
#progressbar li:after {
content: '';
width: 100%;
height: 2px;
background: white;
position: absolute;
left: -50%;
top: 9px;
z-index: -1; /*put it behind the numbers*/
}
#progressbar li:first-child:after {
/*connector not needed before the first step*/
content: none;
}
/*marking active/completed steps green*/
/*The number of the step and the connector before it = green*/
#progressbar li.active:before, #progressbar li.active:after {
background: #27AE60;
color: white;
}

.fullscreen-bg {
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    overflow: hidden;
    z-index: -100;
}

.fullscreen-bg__video {
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
}

.dropdown-menu {
    top: 30px;
    width: 215px;
    margin-left: -5px;
}

@import "compass/css3";

body.highlight-is-active {
  pointer-events:  none;
}

.highlight {
  box-shadow: 0 0 0 99999px rgba(0, 0, 0, .8);
  position: relative;
  z-index: 9999;
  pointer-events:  auto;
  transition: all 0.5s ease;
}
</style>
</head>
<body id="body">
    <div id="page-wrapper">
        <section id="content" class="slideshow-bg">
            <header id="header" class="navbar-static-top">
            <?php
                if(Login::isLoggedIn()) {
                    include "includes/menublank-loggedin.php";
                } else {
                    include "includes/menu.php";
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
            <?php
                include "includes/slider.php";
            ?>
            <div id="container" class="container">
                <div id="main">
                    <h1 class="page-title"><img width="20%" src="images/logowhite.png"></h1>
                    
                    <h1 class="page-title" style="font-size:32px;">fritugo is the best place to make and discover itineraries</h1>
                    <h2 style="text-align:center; color:#fff; font-size:15px; margin-top:-15px;">get unlimited, create your own dream itinerary for your future trip</h2>
                    <div class="search-box-wrapper style2">
                        <br>
                        
                            <div class="search-tab-content">
                                <div class="tab-pane fade active in" id="hotels-tab">
                                    <form name="form" id="msform" action="" method="post" style="positition:abosolute;">
                                        <fieldset>
                                                <!-- <span class="tag">beach<span class="close"></span></span> -->
                                                <input style="width:79%; border-top-left-radius:30px; border-bottom-left-radius:30px" type="text" name="destination" id="location-input" placeholder="Your destination" />
                                                <input id="next" style="width:19%; border-top-right-radius:30px; border-bottom-right-radius:30px; margin-left:-3px;background-color:#ffb400; color:#fff;" type="button" name="next" class="next" value="Next" />
                                                <button id="onHL" type="button">Highlight tag</button>
                                        </fieldset>
                                        <fieldset>
                                            <input style="width:6%; border-top-left-radius:30px; border-bottom-left-radius:30px; background-color:#ffb400; color:#fff;" type="button" name="previous" class="previous" value="Back" />
                                            <a class=""><input style="width:26.5%; margin-left:-3px;" type="text" name="origin" id="user-location" placeholder="You're from" /></a>
                                            <a class="datepicker-wrap form-group" ><input style="width:10%; margin-left:-4px;" type="text" name="from-date" value="" /></a>
                                            <a class="datepicker-wrap form-group" ><input style="width:10%; margin-left:-3px;" type="text" name="to-date" value="" /></a>
                                            <span class="dropdown">
                                                <a class="dropdown-toggle form-group" data-toggle="dropdown"><input style="width:15%; margin-left:-4px;" type="text" id="people" name="person" value="1 adult" /><span class="caret" style="position:absolute; left:140px; top:8px; cursor:pointer"></a>
                                                <ul class="dropdown-menu">
                                                    <li style="margin-bottom: 10px; margin-top: 10px;"> &nbsp <span id="adultCount">1</span> Adult <span style="cursor:pointer; margin-left:100px; border:2px solid #0095DA; border-radius:30px; padding:0px 5px;" onclick="personSelect()";><strong id="aPlus" style="color:#0095DA">+</strong></span> <span style="cursor:pointer; border:2px solid #0095DA; border-radius:30px; padding:0px 6px;" onclick="personSelect()";><strong id="aMin" style="color:#0095DA; margin-top:-2px;">-</strong></span></li>
                                                    <li style="margin-bottom: 10px;"> &nbsp <span id="childCount">0</span> Child <span style="cursor:pointer; margin-left:100px; border:2px solid #0095DA; border-radius:30px; padding:0px 5px;" onclick="childSelect()";><strong id="cPlus" style="color:#0095DA">+</strong></span> <span style="cursor:pointer; border:2px solid #0095DA; border-radius:30px; padding:0px 6px;" onclick="childSelect()";><strong id="cMin" style="color:#0095DA; margin-top:-2px;">-</strong></span></li>
                                                    <a href="#" style="float:right; margin-right:10px;">close</a>
                                                </ul>
                                            </span>
                                            <span class="dropdown">
                                                <a class="dropdown-toggle form-group" data-toggle="dropdown"><input style="width:20%; margin:-4px;" id="budget" type="text" name="budget" placeholder="budget"><span class="caret" style="position:absolute; left:190px; top:8px; cursor:pointer"></span></a>
                                                    <ul class="dropdown-menu" onclick="budgetSelect()">
                                                        <li><a href="#" class="opt">< IDR 3,000,000</a></li>
                                                        <li><a href="#" class="opt">IDR 3,000,001 - IDR 6,000,000</a></li>
                                                        <li><a href="#" class="opt">IDR 6,000,001 - IDR 12,000,000</a></li>
                                                        <li><a href="#" class="opt">IDR 12,000,001 - IDR 24,000,000</a></li>
                                                        <li><a href="#" class="opt">IDR 24,000,001 - IDR 50,000,000</a></li>
                                                        <li><a href="#" class="opt">> IDR 50,000,000</a></li> 
                                                    </ul>
                                            </span>
                                            <a class="form-group"><input style="border-top-right-radius:30px; border-bottom-right-radius:30px; width:11%; margin-left:-3px; background-color:#ffb400; color:#fff;" type="submit" onclick="redirect($target)" name="submitPlan" class="action-button" value="Plan my trip" /></a>
                                        </fieldset>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <br><br><br><br>
                    </div>
                </div>
                <div id="tag">
                    <?php
                        include "includes/tags.php";
                        echo "<button id='offHL' style='border-radius: 30px; float:right'>Skip</button>";
                    ?>
                </div>
                            <div style="background-color:#f0f0f0; width:100%; position:relative; z-index:99;">
                                <div class="container">
                <!-- <div style="padding-top:20px;">
                    <div class="image-box style6">
                        <article class="box">
                            <figure class="col-md-5 pull-right middle-block">
                                <a href="#" title=""><img class="middle-item" src="images/homebansml.jpg" alt="" width="476" height="318" /></a>
                            </figure>
                            <div class="details col-md-7">
                                <h4 class="box-title">What We Do?</h4>
                                <p style="font-size:14px;">
                                    Fritugo is a travel search platform that aims to inspire you where, when, and why to travel. And finds your places, activities, flights, and accommodations. We combined travelers experience with data mining and put this into our technology.
Now you don’t need to visit dozens of websites during weeks looking for all components for you trip.
                                </p>
                            </div>
                        </article>
                    </div>
                </div> -->
            </div><br><br>
                                     <?php
                                        include "includes/popular_itineraries.php";
                                     ?>

                                     <!-- <?php
                                        include "includes/nearby_attractions.php";
                                     ?> -->
                                     <?php
                                        include "includes/popular_destinations.php";
                                     ?>
                                     <!-- <?php
                                        include "includes/popular_attractions.php";
                                     ?> -->

            </div>

        </section>

        <?php
            include "includes/footer.php";
        ?>

<script>
    function validateForm() {
        var field = document.form['form']['destination'];
        if (field == "") {
            return false;
        }
    }
</script>

<script>
    // javascript select budget (x)
    function budgetSelect() {
        var check = array['< IDR 3,000,000', 'IDR 3,000,001 - IDR 6,000,000', 'IDR 6,000,001 - IDR 12,000,000', 'IDR 12,000,001 - IDR 24,000,000', 'IDR 24,000,001 - IDR 50,000,000', '> IDR 50,000,000'];
        var text = "";
        var i;
        var m
        for (i = 0; i < 6; i++){
            for (m = 0; m < check.length; m++) {
                text=+ check[m];
                if(document.getElementsByClassName('opt')[i].innerHTML == check[m]) {
                    document.getElementById('budget').value = document.getElementsByClassName('opt')[i].innerHTML;
                }
            }
        }
    }
    // javascript person
    function personSelect() {
        var counter = document.getElementById('people').value;
        document.getElementById('aPlus').addEventListener('click', function(){
            document.getElementById('people').value = parseInt(counter) + parseInt(1) + " adult";
        });
        document.getElementById('aMin').addEventListener('click', function(){
            document.getElementById('people').value = parseInt(counter) - parseInt(1) + " adult";
        });
    }
    function childSelect() {
        var start = 0;
        document.getElementById('cPlus').addEventListener('click', function(){
            var adult = document.getElementById('people').value;
            document.getElementById('people').value = adult + ", " + (start + 1) + " children";
        });
        document.getElementById('cMin').addEventListener('click', function(){
            document.getElementById('people').value + ", " + parseInt(ccounter) - parseInt(1) + " children";
        });
    }
</script>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script>
    $(document).ready(function(){
        $('#onHL').click(function(){
            $('#tag').addClass('highlight');
            $('#body').addClass('highlight-is-active');
        });
    });

    $(document).ready(function(){
        $('#offHL').click(function(){
            $('#tag').removeClass('highlight');
            $('#body').removeClass('highlight-is-active');
        });
    });

    $('#offHL').click(function(){
        $('#next').click();
    });
</script>

<!-- auto complete script -->
<script>
    function placeSearch(){
        var input = document.getElementById('location-input');
        var autoComplete = new google.maps.places.Autocomplete(input);
    }
</script>
<!-- google places library + API Key -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDZTzuxSItuhzQgG85ebwVWfpuS5HTCgGw&libraries=places&callback=placeSearch"></script>

        
<!-- jQuery easing plugin --> 
<script src="js/jquery.easing.min.js" type="text/javascript"></script> 
<script>
$(function() {

//jQuery time
var current_fs, next_fs, previous_fs; //fieldsets
var left, opacity, scale; //fieldset properties which we will animate
var animating; //flag to prevent quick multi-click glitches

$(".next").click(function(){
    if(animating) return false;
    animating = true;
    
    current_fs = $(this).parent();
    next_fs = $(this).parent().next();
    
    //activate next step on progressbar using the index of next_fs
    $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");
    
    //show the next fieldset
    next_fs.show(); 
    //hide the current fieldset with style
    current_fs.animate({opacity: 0}, {
        step: function(now, mx) {
            //as the opacity of current_fs reduces to 0 - stored in "now"
            //1. scale current_fs down to 80%
            scale = 1 - (1 - now) * 0.2;
            //2. bring next_fs from the right(50%)
            left = (now * 50)+"%";
            //3. increase opacity of next_fs to 1 as it moves in
            opacity = 1 - now;
            current_fs.css({'transform': 'scale('+scale+')'});
            next_fs.css({'left': left, 'opacity': opacity});
        }, 
        duration: 800, 
        complete: function(){
            current_fs.hide();
            animating = false;
        }, 
        //this comes from the custom easing plugin
        easing: 'easeInOutBack'
    });
});

$(".previous").click(function(){
    if(animating) return false;
    animating = true;
    
    current_fs = $(this).parent();
    previous_fs = $(this).parent().prev();
    
    //show the previous fieldset
    previous_fs.show(); 
    //hide the current fieldset with style
    current_fs.animate({opacity: 0}, {
        step: function(now, mx) {
            //as the opacity of current_fs reduces to 0 - stored in "now"
            //1. scale previous_fs from 80% to 100%
            scale = 0.8 + (1 - now) * 0.2;
            //2. take current_fs to the right(50%) - from 0%
            left = ((1-now) * 50)+"%";
            //3. increase opacity of previous_fs to 1 as it moves in
            opacity = 1 - now;
            current_fs.css({'left': left});
            previous_fs.css({'transform': 'scale('+scale+')', 'opacity': opacity});
        }, 
        duration: 800, 
        complete: function(){
            current_fs.hide();
            animating = false;
        }, 
        //this comes from the custom easing plugin
        easing: 'easeInOutBack'
    });
});

$(".submit").click(function(){
    return false;
})

});
</script>
        
</body>
</html>

