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
include_once('./classes/login_class.php');

if(isset($_POST['save'])) {
    $username = $_POST['username'];
    $fullname = $_POST['fullname'];
    $biodata = $_POST['biodata'];
    $id = DB::query('SELECT id FROM users WHERE username=:username', array(':username'=>$username))[0]['id'];

    //update or post new data to database
    DB::query(
        'UPDATE users
        SET fullname=:fullname, biodata=:biodata
        WHERE id=:id',
        array(':id'=>$id, ':fullname'=>$fullname, ':biodata'=>$biodata));
        echo "<script>
            swal({
                title: 'Success!',
                text: 'Successfully updated profile',
                icon: 'success',
                closeOnClickOutside: false
            })
        </script>";
}
?>
<head>
    <style>
        .overlay {
            position: fixed;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            background: rgba(0, 0, 0, 0.7);
            transition: opacity 500ms;
            visibility: hidden;
            opacity: 0;
        }
        .overlay:target {
            visibility: visible;
            opacity: 1;
        }
        
        .popup {
            margin: 200px auto;
            padding: 20px;
            background: white;
            opacity: 0.8;
            border-radius: 5px;
            width: 30%;
            position: relative;
            transition: all 5s ease-in-out;
            font-family: Tahoma, Arial, sans-serif;
        }
        .popup .close {
            position: absolute;
            top: 15px;
            right: 30px;
            transition: all 200ms;
            font-size: 30px;
            font-weight: bold;
            text-decoration: none;
            color: black;
        }
        .popup-content{
            color: black;
        }
        .popup-content a{
            text-decoration: none;
            color: black;
        }
        .popup .close:hover {
            color: white;
        }
    </style>
</head>

<div id="edit_profile" class="travelo-signup-box travelo-box">
                <form action="dashboard.php" method="post">
                        <div class="form-group">Username
                            <textarea type="text" class="input-text full-width" name="username" rows="1" style="border-radius:30px;"><?php
                                if (Login::isLoggedIn()) {
                                    $username = DB::query(
                                        'SELECT u.username
                                        FROM users u
                                        JOIN login_tokens lt ON lt.user_id = u.id
                                        WHERE lt.token = :token', array(':token'=>sha1($_COOKIE['FCID']))
                                        )[0]['username'];
                                    echo $username;
                                }
                                ?></textarea>
                        </div>
                        <div class="form-group">Full Name
                            <textarea type="text" class="input-text full-width" name="fullname" rows="1" style="border-radius:30px;"><?php
                                if (Login::isLoggedIn()) {
                                    $fullname = DB::query(
                                        'SELECT u.fullname
                                        FROM users u
                                        JOIN login_tokens lt ON lt.user_id = u.id
                                        WHERE lt.token = :token', array(':token'=>sha1($_COOKIE['FCID']))
                                        )[0]['fullname'];
                                    echo $fullname;
                                }
                                ?></textarea>
                        </div>
                        <div class="form-group">Bio
                            <textarea rows="6" class="input-text full-width" name="biodata" style="border-radius:8px"><?php
                                if (Login::isLoggedIn()) {
                                    $biodata = DB::query(
                                        'SELECT u.biodata
                                        FROM users u
                                        JOIN login_tokens lt ON lt.user_id = u.id
                                        WHERE lt.token = :token', array(':token'=>sha1($_COOKIE['FCID']))
                                        )[0]['biodata'];
                                    echo $biodata;
                                }
                                ?></textarea>
                        </div>

                        <!--<div class="login-social">
                    <a href="#" class="login-facebook" style="font-size:13px; color:#fff; padding: 5px 9px 5px 9px; border-radius:30px; text-align:center;">
                        <i class="soap-icon-facebook" >&nbsp&nbsp&nbsp</i>Connect with Facebook</a>
                    <a href="#" class="login-googleplus"  style="font-size:13px; color:#fff; padding: 5px 9px 5px 9px; border-radius:30px; text-align:center;">
                        <i class="soap-icon-googleplus">&nbsp&nbsp&nbsp</i>Connect with Google+</a>
                </div>--><br>
                        <button type="submit" class="full-width btn-medium" name="save" style="border-radius:30px;">Save</button>
                    </form>
                    
            </div>