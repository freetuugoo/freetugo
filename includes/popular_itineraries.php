<?php
include_once('./db.php');
include_once('classes/login_class.php');
?>

<div class="container section" style="padding-top:0px; padding-bottom:0px;">
    <h2>Latest Itineraries</h2>
    <div class="car-slideshow image-carousel style2 box" data-animation="slide" data-item-width="270" data-item-margin="30">
        <div class="gallery-filter box">
            <a href="#" class="button btn-medium active" data-filter="filter-all" style="border-radius:30px;">All</a>
            <a href="#" class="button btn-medium" data-filter="filter-beach" style="border-radius:30px;">Beach</a>
            <a href="#" class="button btn-medium" data-filter="filter-mountain" style="border-radius:30px;">Mountain</a>
            <a href="#" class="button btn-medium" data-filter="filter-museums" style="border-radius:30px;">Museums</a>
            <a href="#" class="button btn-medium" data-filter="filter-family" style="border-radius:30px;">Family</a>
            <a href="#" class="button btn-medium" data-filter="filter-sightseeing" style="border-radius:30px;">Sighseeing</a>
        </div>
        <ul class="slides image-box car listing-style1">
            <?php
                
                $popIti = DB::query(
                    'SELECT id, destination, day_arrive, day_depart, day_count, person_count, user_id, name
                    FROM itineraries
                    ORDER BY id DESC
                    LIMIT 5'
                    );
                foreach($popIti as $key => $val) {
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
                    }

                    echo "
                    <li>
                        <article class='box' style='border-radius:8px; height:450px;'>
                            <figure>
                                <a href='$redirect' title=''><img src='images/iti_rome.jpg' alt=''></a>
                            </figure>
                            <div class='details'>
                                <span class='price'><img src='images/goldcoin.png' style='width:20px;'></span>
                                <h4 class='box-title'>$name<small>$destination</small></h4>
                                <div class='amenities'>
                                    <ul>
                                        <li><i class='soap-icon-user circle'></i>$personCount</li>
                                        <li><i class='soap-icon-departure circle'></i>18</li>
                                        <li><i class='soap-icon-breakfast circle'></i>7</li>
                                    </ul>
                                </div>
                                <div class='action'>
                                    <a href='$redirect' class='button btn-small full-width' style='border-radius:30px;'>See detail</a>
                                </div>
                            </div>
                        </article>
                    </li>";
                }
            ?>
        </ul>
    </div>
</div>