<script>
    function redirect(target) {
        window.location.replace(target);
    }
</script>
<head>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <style>
        .swal-button{
            padding: 0px 24px;
        }
    </style>
</head>

<?php
include_once('./db.php');
require_once "fb-config.php";
require_once "g-config.php";

//Facebook Login
$redirectURL = "http://localhost/fritugo/includes/fb-callback.php";
$permissions = ['email'];
$loginURL = $helper->getLoginUrl($redirectURL, $permissions);

//Google Login
$gLoginURL = $gClient->createAuthUrl();

if(isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if($_POST['username'] == "" || $_POST['password'] == "") {
        echo "<script>
            swal({
                title: 'Fail to Login!',
                text: 'Both username and password must be filled',
                icon: 'error',
                closeOnClickOutside: false
            })
        </script>";

    } else {
        if (DB::query('SELECT username FROM users WHERE username=:username', array(':username'=>$username))) {
            if (password_verify($password, DB::query('SELECT pass FROM users WHERE username=:username', array(':username'=>$username))[0]['pass'])) {
                    $cstrong = TRUE;
                    $token = bin2hex(openssl_random_pseudo_bytes(64, $cstrong));
                    $user_id = DB::query('SELECT id FROM users WHERE username=:username', array(':username'=>$username))[0]['id'];
                    DB::query('INSERT INTO login_tokens VALUES (\'\', :token, :user_id)', array(':token'=>sha1($token), ':user_id'=>$user_id));
    
                    setcookie("FCID", $token, time() + 60 * 60 * 24 * 7, "/", NULL, NULL, TRUE);
                    setcookie("FCID_", '1', time() + 60 * 60 * 24 * 3, "/", NULL, NULL, TRUE);
                    echo "<script>
                        swal({
                            title: 'Success!',
                            text: 'Logging In',
                            icon: 'success',
                            closeOnClickOutside: false
                        }).then(function() {
                            window.location = 'dashboard.php';
                        })
                    </script>";
            } else {
                echo "<script>
                        swal({
                            title: 'Fail to Login!',
                            text: 'Incorrect password',
                            icon: 'error',
                            closeOnClickOutside: false
                        })
                </script>";
            }
        } else {
            echo "<script>
                swal({
                    title: 'Fail to Login!',
                    text: 'User not registered',
                    icon: 'error',
                    closeOnClickOutside: false
                })
            </script>";
        }
    }
}

?>
<div id="travelo-login" class="travelo-login-box travelo-box" style="width:870px; padding:0px;">

    <div id="dialogoverlay"></div>
    <div id="dialogbox">
        <div>
            <div id="dialogboxbody"></div>
            <div id="dialogboxfoot"></div>
        </div>
    </div>

    <table>
        <tr>
            <td>
                <div style="position:relative;">
                    <img src="images/login.jpg" style="padding-right:60px; border-top-left-radius:8px; border-bottom-left-radius:8px;">
                </div>
            </td>
            <td style="padding-right:50px;">
                <div class="login-social"><p style="font-size:25px; color: #000; font-weight:700; text-align:center; line-height:1px; padding-top:30px;">Good to see you again!</p><br>
                    <p style="font-size:14px; color: #000; font-weight:400; text-align:center;">Log in and explore all the <br>new itineraries we found for you</p><br>
                    <button onclick="redirect('<?php echo $loginURL ?>')" type="button" class="button login-facebook"  style="border-radius:30px; padding: 5px 30px 40px 30px;"><i class="soap-icon-facebook"></i>Log in with Facebook</button>
                    <!-- class="button login-googleplus" style="border-radius:30px; padding: 5px 30px 40px 30px;"<i class="soap-icon-googleplus"></i> -->
                    <button onclick="redirect('<?php echo $gLoginURL ?>')" type="button" class="button login-googleplus" style="border-radius:30px; padding: 5px 30px 40px 30px;"><i class="soap-icon-googleplus"></i>Log in with Google+</button>
                </div>
                <div class="seperator"><label>OR</label></div>
                <form action="" method="post">
                    <div class="form-group">
                        <input type="text" class="input-text full-width" placeholder="username" value="" name="username" style="border-radius:30px; padding: 20px 20px 20px 15px">
                    </div>
                    <div class="form-group">
                        <input type="password" class="input-text full-width" placeholder="password" value="" name="password" style="border-radius:30px; padding: 20px 20px 20px 15px">
                    </div>
                    <button type="submit" onclick="redirect(target)" class="full-width btn-medium" name="login" style="border-radius:30px; background: #0095da; padding: 10px 30px 40px 30px; font-size:15px; font-weight:600;">Log in</button>
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