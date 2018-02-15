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

    $url = "http://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];

    if(isset($_POST['signup'])){
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        if (!DB::query('SELECT username FROM users WHERE username=:username', array(':username'=>$username))) {
            if (strlen($username) >= 3 && strlen($username) <= 32) {
                    if (preg_match('/[a-zA-Z0-9_]+/', $username)) {
                            if (strlen($password) >= 6 && strlen($password) <= 60) {
                            if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
                                if(!DB::query('SELECT email FROM users WHERE email=:email', array(':email'=>$email))) {
                                    DB::query('INSERT INTO users VALUES (\'\', :username, :email, :pass, \'\', \'\')', array(':username'=>$username, ':email'=>$email, ':pass'=>password_hash($password, PASSWORD_BCRYPT)));
                                    if ($url === "http://localhost/fritugo/index.php" || $url === "http://localhost/fritugo/itineraries.php" || $url === "http://localhost/fritugo/discovery.php") {
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
                                                            title: 'Successfully created new account!',
                                                            text: 'Logging In',
                                                            icon: 'success',
                                                            closeOnClickOutside: false
                                                        }).then(function() {
                                                            window.location = 'dashboard.php';
                                                        })
                                                    </script>";
                                            } else {
                                                    echo "<script type=text/javascript>alert('Incorrect password !!')</script>";
                                            }
                                        } else {
                                            echo "<script type=text/javascript>alert('User not registered !!')</script>";
                                        }
                                    } else {
                                        $des = $_GET['des'];
                                        $arrive = $_GET['arrive'];
                                        $depart = $_GET['depart'];
                                        $day = $_GET['day'];
                                        $ppl = $_GET['ppl'];

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
                                                            title: 'Successfully created new account!',
                                                            text: 'Logging In',
                                                            icon: 'success',
                                                            closeOnClickOutside: false
                                                        }).then(function(){
                                                            swal({
                                                                title: 'Successfully created a new itinerary',
                                                                icon: 'success',
                                                                closeOnClickOutside: false
                                                            }).then(function() {
                                                                window.location = 'itinerary_detail.php?des=$des&arrive=$arrive&depart=$depart&day=$day&ppl=$ppl&name=$name';
                                                            });
                                                        });
                                                    </script>";
                                            } else {
                                                    echo "<script type=text/javascript>alert('Incorrect password !!')</script>";
                                            }
                                        } else {
                                            echo "<script type=text/javascript>alert('User not registered !!')</script>";
                                        }
                                        
                                    }
                                } else {
                                    // echo "<script type=text/javascript>alert('Email already exist')</script>";
                                    echo "<script>
                                        swal({
                                            title: 'Fail to Signup!',
                                            text: 'Email already exist',
                                            icon: 'error',
                                            closeOnClickOutside: false
                                        })
                                    </script>";
                                }
                            } else {
                                // echo "<script type=text/javascript>alert('Invalid email')</script>";
                                echo "<script>
                                    swal({
                                        title: 'Fail to Signup!',
                                        text: 'Invalid email',
                                        icon: 'error',
                                        closeOnClickOutside: false
                                    })
                                </script>";
                            }
                    } else {
                        // echo "<script type=text/javascript>alert('Use a valid password between 6 and 60 characters')</script>";
                        echo "<script>
                            swal({
                                title: 'Fail to Signup!',
                                text: 'Please use a valid password between 6 and 60 characters',
                                icon: 'error',
                                closeOnClickOutside: false
                            })
                        </script>";
                    }
                    } else {
                        // echo "<script type=text/javascript>alert('Invalid username')</script>";
                        echo "<script>
                            swal({
                                title: 'Fail to Signup!',
                                text: 'Invalid username',
                                icon: 'error',
                                closeOnClickOutside: false
                            })
                        </script>";
                    }
            } else {
                // echo "<script type=text/javascript>alert('Use a valid username between 3 and 32 characters')</script>";
                echo "<script>
                    swal({
                        title: 'Fail to Signup!',
                        text: 'Please use a valid username between 3 and 32 characters',
                        icon: 'error',
                        closeOnClickOutside: false
                    })
                </script>";
            }
    } else {
        // echo "<script type=text/javascript>alert('Username already exist')</script>";
        echo "<script>
            swal({
                title: 'Fail to Signup!',
                text: 'Username already exist',
                icon: 'error',
                closeOnClickOutside: false
            })
        </script>";
    }
    }
?>
<div id="travelo-signup" class="travelo-login-box travelo-box" style="width:870px; padding:0px;">
                <table>
                    <tr>
                        <td>
                            <div style="position:relative;">
                                <img src="images/signup.jpg" style="padding-right:60px; border-top-left-radius:8px; border-bottom-left-radius:8px;">
                            </div>
                        </td>
                        <td style="padding-right:50px;">
                            <div class="login-social"><p style="font-size:25px; color: #000; font-weight:700; text-align:center; line-height:24px; padding-top:30px;">Join the fritugo community!</p><br>
                                <p style="font-size:14px; color: #000; font-weight:400; text-align:center;">Create and save your dream itinerary </p><br>
                            
                                <a href="#" class="button login-facebook"  style="border-radius:30px; padding: 5px 30px 40px 30px;"><i class="soap-icon-facebook"></i>Sign up with Facebook</a>
                                <a href="#" class="button login-googleplus"  style="border-radius:30px; padding: 5px 30px 40px 30px;"><i class="soap-icon-googleplus"></i>Sign up with Google+</a>
                            </div>
                            <div class="seperator"><label>OR</label></div>
                            <div class="simple-signup">
                </div>
                <div class="email-signup">
                    <form action="" method="post">
                        <div class="form-group">
                            <input type="text" class="input-text full-width" placeholder="username" name="username" style="border-radius:30px;padding: 20px 20px 20px 15px">
                        </div>
                        <!--<div class="form-group">
                            <input type="text" class="input-text full-width" placeholder="full name"  style="border-radius:30px;">
                        </div>-->
                        <div class="form-group">
                            <input type="email" class="input-text full-width" placeholder="email address" name="email" style="border-radius:30px;padding: 20px 20px 20px 15px">
                        </div>
                        <div class="form-group">
                            <input type="password" class="input-text full-width" placeholder="password" name="password" style="border-radius:30px;padding: 20px 20px 20px 15px">
                        </div>
                        <!--<div class="form-group">
                            <input type="password" class="input-text full-width" placeholder="confirm password"  style="border-radius:30px;">
                        </div>-->
                        <!--<div class="form-group">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox"  style="border-radius:30px;"> Tell me about Fritugo news
                                </label>
                            </div>
                        </div>-->
                        <div class="form-group">
                            <p class="description" style="text-align:center;">By signing up you agree to Fritugo's Terms of Service</p>
                        </div>
                            <button type="submit" onclick="redirect(target)" class="full-width btn-medium" name="signup" style="border-radius:30px; background: #0095da; padding: 10px 30px 40px 30px; font-size:15px; font-weight:600">Sign up</button>
                        <!-- <?php
                            // if ("<script>window.location.href === 'http://localhost/fritugo/index.php'</script>") {
                            //     echo "<button type='submit' onclick='redirect(target)' class='full-width btn-medium' name='signup' style='border-radius:30px; background: #0095da; padding: 10px 30px 40px 30px; font-size:15px; font-weight:600;'>Sign up</button>";
                            // }
                            // elseif ("<script>window.location.href === 'http://localhost/fritugo/itinerary_result.php'</script>") {
                            //     echo "<button type='submit' class='full-width btn-medium' name='signup' style='border-radius:30px; background: #0095da; padding: 10px 30px 40px 30px; font-size:15px; font-weight:600;'>Sign up</button>";
                            // }
                        ?> -->
                    </form>
                </div>
                            <div class="seperator" ></div>
                            <p style=" text-align:center;">Already a member?
                            <?php
                                // echo $url;
                                if ($url === "http://localhost/fritugo/index.php" || $url === "http://localhost/fritugo/itineraries.php" || $url === "http://localhost/fritugo/discovery.php") {
                                    echo "<a href='#travelo-login' class='goto-login soap-popupbox'><b>Log in here</b></a>";
                                } else {
                                    echo "<a href='#travelo-login-seefull' class='goto-login soap-popupbox'><b>Log in here</b></a>";
                                }
                            ?>
                            </p>
                        </td>
                    </tr>
                </table>
</div>