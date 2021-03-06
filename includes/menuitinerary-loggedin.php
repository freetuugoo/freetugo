<!-- javascript redirect -->
<script>
    function redirect($target) {
        window.location.replace($target);
    }
</script>

<?php
include_once('./db.php');
include_once('classes/login_class.php');

if (isset($_POST['logout'])) {
    if (isset($_COOKIE['FCID'])) {
            DB::query('DELETE FROM login_tokens WHERE token=:token', array(':token'=>sha1($_COOKIE['FCID'])));
    } 
    setcookie('FCID', '1', time()-60 * 60 * 24 * 7);
    setcookie('FCID_', '1', time()-60 * 60 * 24 * 3);
    echo "<script>redirect('index.php')</script>";
}

?>
<div class="topnav hidden-xs" style="background-color:#fff; height:75px;">
    <div class="container">
            <ul class="quick-menu pull-left" style="margin-left:-51px;">
            <li>
            <a href="index.php" title="Fritugo - home">
                <img src="images/logo_small.png" alt="Fritugo" />
            </a>
            </li>
            <li><a href="index.php" style="color: #636363; border-radius:30px; padding: 0px 17px 0px 17px;">trip planner</a></li>
            <li><a href="discovery.php" style="color: #636363; border-radius:30px; padding: 2px 17px 0px 17px;">discovery</a></li>
            <li><a href="itineraries.php" style="border:2px solid #636363; color: #636363; border-radius:30px; padding: 2px 17px 0px 17px;">itineraries</a></li>
        </ul>
        <ul class="quick-menu pull-right">
            <li>
                <div >
                    <input type="text" class="input-text full-width" placeholder="search..." style="height: 30px; border-radius:30px;" />
                </div>
            </li>
            <li class="ribbon currency" style="color:#636363;">
                <a href="dashboard.php" style="color:#636363;">
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
                </a>
            </li>
            <li>
                <form action="index.php" method="post">
                    <button name="logout" onclick="redirect($target)" style="color:#636363; background:none; border:none; font-size:112%; margin-top:-3px;">log out</button>
                </form>
            </li>
            <li class="ribbon currency" style="color:#636363;">
                <a href="#" title="" style="color:#636363;">Rp</a>
                <ul class="menu mini" style="color:#636363;">
                    <li><a href="#" title="idr" style="text-align:center;"><img src="./images/ind_flag.png" style="width:15px; text-align:center; padding-top:5px; padding-bottom:5px;">Rp</a></li>
                    <li><a href="#" title="usd" style="text-align:center;"><img src="./images/usa_flag.png" style="width:15px; text-align:center; padding-top:5px; padding-bottom:5px;"><br>$</a></li>
                </ul>
            </li>
            <li class="ribbon currency">
                <a href="#" title="" style="color:#636363;"><img src="./images/eng_flag.png" style="width:15px; text-align:center; padding-top:5px; padding-bottom:5px;"></a>
                <ul class="menu mini">
                    <li><a href="#" title="EN" style="text-align:center;"><img src="./images/eng_flag.png" style="width:15px; text-align:center; padding-top:5px; padding-bottom:5px;">en</a></li>
                    <li><a href="#" title="IN" style="text-align:center;"><img src="./images/ind_flag.png" style="width:15px; text-align:center; padding-top:5px; padding-bottom:5px;">in</a></li>
                </ul>
            </li>
        </ul>
    </div>
</div>