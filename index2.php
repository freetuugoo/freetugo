<!DOCTYPE html>
<!--[if IE 8]>          <html class="ie ie8"> <![endif]-->
<!--[if IE 9]>          <html class="ie ie9"> <![endif]-->
<!--[if gt IE 9]><!-->  
<html> <!--<![endif]-->


<head>
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
</style>
</head>
<body>
    <div id="page-wrapper">
        
        <section id="content" class="slideshow-bg">
            <header id="header" class="navbar-static-top">
            <?php
                include "includes/menu.php";
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
            <div class="container">
                <div id="main">
                    <h1 class="page-title"><img width="20%" src="images/logowhite.png"></h1>
                    
                    <h1 class="page-title" style="font-size:32px;">fritugo is the best place to make and discover itineraries</h1>
                    <h2 style="text-align:center; color:#fff; font-size:15px; margin-top:-15px;">get unlimited, create your own dream itinerary for your future trip</h2>
                    <div class="search-box-wrapper style2">
                        <br>
                        
                            <div class="search-tab-content">
                                <div class="tab-pane fade active in" id="hotels-tab">
                                    <form id="msform" action="itinerary_result.php" method="post" style="positition:abosolute;">
                                        <fieldset>
                                                <input style="width:79%; border-top-left-radius:30px; border-bottom-left-radius:30px;" type="text" name="destination" placeholder="Your destination" />
                                                <input style="width:19%; border-top-right-radius:30px; border-bottom-right-radius:30px; margin-left:-3px;background-color:#ffb400; color:#fff;" type="button" name="next" class="next" value="Next" />
                                        </fieldset>
                                        <fieldset>
                                            <input style="width:6%; border-top-left-radius:30px; border-bottom-left-radius:30px; background-color:#ffb400; color:#fff;" type="button" name="previous" class="previous" value="Back" />
                                            <a class=""><input style="width:26.5%; margin-left:-3px;" type="text" name="from" placeholder="You're from" /></a>
                                            <a class="datepicker-wrap form-group" ><input style="width:11%; margin-left:-3px;" type="text" name="from-date" placeholder="from date" /></a>
                                            <a class="form-group"><input style="width:3.5%; margin-left:-3px;" type="text" name="person" placeholder="-" /></a>
                                            <a class="datepicker-wrap form-group" ><input style="width:11%; margin-left:-3px;" type="text" name="to-date" placeholder="to date" /></a>
                                            <a class="form-group"><input style="width:9%; margin-left:-3px;" type="text" name="person" placeholder="1 person" /></a>
                                            <a class="form-group"><input style="width:20%; margin-left:-3px;" type="text" name="budget" placeholder="budget :      < Rp. 5,000,000" /></a>
                                            <a class="form-group"><input style="border-top-right-radius:30px; border-bottom-right-radius:30px; width:11%; margin-left:-3px; background-color:#ffb400; color:#fff;" type="submit" name="submit" class="action-button" value="Plan my trip" /></a>
                                        </fieldset>
                                    </form>

                                </div>
                            </div>
                        </div><br><br><br><br><br>

                    </div>
                </div>
                <?php
                    include "includes/tags.php";
                ?>
                            <div style="background-color:#f0f0f0; width:100%; position:relative; z-index:99;">
                                <div class="container">
                <div style="padding-top:20px;">
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
                </div>
            </div><br><br>
                                     <?php
                                        include "includes/popular_itineraries.php";
                                     ?>

                                     <?php
                                        include "includes/nearby_attractions.php";
                                     ?>
                                     <?php
                                        include "includes/popular_destinations.php";
                                     ?>
                                     <?php
                                        include "includes/popular_attractions.php";
                                     ?>

            </div>

        </section>

        <?php
            include "includes/footer.php";
        ?>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
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

