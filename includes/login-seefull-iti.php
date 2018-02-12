<script>
    function redirect($target) {
        window.location.replace($target);
    }
</script>

<?php
include_once('./db.php');

$url = "http://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
$des = $_GET['des'];
$arrive = $_GET['arrive'];
$depart = $_GET['depart'];
$day = $_GET['day'];
$ppl = $_GET['ppl'];

if(isset($_POST['login-seefull'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if($_POST['username'] == "" || $_POST['password'] == "") {
        echo "<script type=text/javascript>alert('Both username and password musn't be empty')</script>";
        echo "<script>redirect('$url');</script>";
    } else {
        if (DB::query('SELECT username FROM users WHERE username=:username', array(':username'=>$username))) {
            if (password_verify($password, DB::query('SELECT pass FROM users WHERE username=:username', array(':username'=>$username))[0]['pass'])) {
                    echo "<script type=text/javascript>alert('Logged in!')</script>";
                    $cstrong = TRUE;
                    $token = bin2hex(openssl_random_pseudo_bytes(64, $cstrong));
                    $user_id = DB::query('SELECT id FROM users WHERE username=:username', array(':username'=>$username))[0]['id'];
                    DB::query('INSERT INTO login_tokens VALUES (\'\', :token, :user_id)', array(':token'=>sha1($token), ':user_id'=>$user_id));
                    setcookie("FCID", $token, time() + 60 * 60 * 24 * 7, "/", NULL, NULL, TRUE);
                    setcookie("FCID_", '1', time() + 60 * 60 * 24 * 3, "/", NULL, NULL, TRUE);
                    echo "<script>redirect('itinerary_detail.php?des=$des&arrive=$arrive&depart=$depart&day=$day&ppl=$ppl&name=$name')</script>";
            } else {
                    echo "<script type=text/javascript>alert('Incorrect password !!')</script>";
            }
        } else {
            echo "<script type=text/javascript>alert('User not registered !!')</script>";
        }
    }
}
?>
<div id="travelo-login-seefull" class="travelo-login-box travelo-box" style="width:870px; padding:0px;">
                <table>
                    <tr>
                        <td>
                            <div style="position:relative;">
                                <img src="images/login.jpg" style="padding-right:60px; border-top-left-radius:8px; border-bottom-left-radius:8px;">
                            </div>
                        </td>
                        <td style="padding-right:50px;">
                            <div class="login-social"><p style="font-size:25px; color: #000; font-weight:700; text-align:center; line-height:1px; padding-top:3 0px;">Hello!</p><br>
                                <p style="font-size:14px; color: #000; font-weight:400; text-align:center;">Please log in to see <br>this custom itinerary for you</p><br>
                            
                                <a href="itinerary_detail.php" class="button login-facebook"  style="border-radius:30px; padding: 5px 30px 40px 30px;"><i class="soap-icon-facebook"></i>Log in with Facebook</a>
                                <a href="itinerary_detail.php" class="button login-googleplus"  style="border-radius:30px; padding: 5px 30px 40px 30px;"><i class="soap-icon-googleplus"></i>Log in with Google+</a>
                            </div>
                            <div class="seperator"><label>OR</label></div>
                            <form action="" method="post">
                                <div class="form-group">
                                    <input type="text" class="input-text full-width" placeholder="username" name="username" style="border-radius:30px; padding: 20px 20px 20px 15px">
                                </div>
                                <div class="form-group">
                                    <input type="password" class="input-text full-width" placeholder="password" name="password" style="border-radius:30px; padding: 20px 20px 20px 15px">
                                </div>
                                <button type="submit" onlick="redirect($target)" name="login-seefull" class="full-width btn-medium"  style="border-radius:30px; background: #0095da; padding: 10px 30px 40px 30px; font-size:15px; font-weight:600;">Log in</button>
                                <div class="form-group" style="padding-top:10px;">
                                    <a href="#" class="forgot-password pull-right">Forgot password?</a>
                                    <div class="checkbox checkbox-inline">
                                        <label>
                                            <input type="checkbox"> Remember me
                                        </label>
                                    </div>
                                </div>
                            </form>
                            <div class="seperator" ></div>
                            <p style=" text-align:center;">Don't have an account? <a href="#travelo-signup" class="goto-signup soap-popupbox"><b>Sign up here</b></a></p>
                        </td>
                    </tr>
                </table>
            </div>