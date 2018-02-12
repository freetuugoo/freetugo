<?php
    $user_id = DB::query('SELECT user_id FROM login_tokens WHERE token=:token', array(':token'=>sha1($_COOKIE['FCID'])))[0]['user_id'];
    $des = $_GET['des'];
    
    $id = "";
    if(empty($_GET['id'])) {
        $id = DB::query('SELECT id FROM itineraries WHERE destination=:destination AND user_id=:user_id ORDER BY id DESC', array(':destination'=>$des, ':user_id'=>$user_id))[0]['id'];
    } else {
        $id = $_GET['id'];
    }
    
    $url = "http://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
    
    if(isset($_POST['date-btn'])) {
        $newArrive = $_POST['iti-arrive'];
        $newDepart = $_POST['iti-depart'];
        DB::query(
            'UPDATE itineraries
            SET day_arrive=:day_arrive, day_depart=:day_depart
            WHERE id=:id', array(':id'=>$id, ':day_arrive'=>$newArrive, ':day_depart'=>$newDepart)
            );
    }
?>
<head>
    <style>
        .ui-datepicker {
            z-index:10000001 !important;
        }
        .datepicker-wrap:after {
            background: transparent;
            color: black;
            top:-8px;
        }
        .datepicker-wrap .ui-datepicker-trigger {
            top:-8px;
        }
    </style>
</head>
<div id="edit_iti_date" class="travelo-signup-box travelo-box">
    <form action="<?php $url ?>" method="post">
            <h4>Arrival Date</h4>
            <a class="datepicker-wrap form-group" ><input class="input-text full-width" style="border-radius:30px;" type="text" name="iti-arrive" value="" /></a><br>
            <h4>Departure Date</h4>
            <a class="datepicker-wrap form-group" ><input class="input-text full-width" style="border-radius:30px;" type="text" name="iti-depart" value="" /></a>
        <br><br>
        <button type="submit" class="full-width btn-medium" name="date-btn" style="border-radius:30px;">Save</button>
    </form>
</div>