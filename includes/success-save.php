<?php
$url = "http://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
?>
<div id="success-save" class="travelo-login-box travelo-box" style="width:300px;padding:0px;">
                <table>
                    <tr>
                        <td style="padding:20px 70px 40px 65px; text-align:center;">
                            <div class="login-social"><p style="font-size:25px; color: #000; font-weight:700; text-align:center; line-height:1px; padding-top:30px;">
                                <img src="./images/save.png" width="100px" style="padding-bottom:20px;"><br><br><br><br>Save Success!</p><br>
                                <p style="font-size:14px; color: #000; font-weight:400; text-align:center;">To see your itineraries<br>please go to your <a href="dashboard.php"><i style="color:#0095da;">profile page</i></a></p><br>
                            </div>
                            <a href="<?php echo $url;?>"><button type="submit" class="full-width btn-medium"  style="border-radius:30px; background: #ffb400; padding: 10px 30px 40px 30px; font-size:15px; font-weight:600;">Continue Editing</button></a>
                            </td>
                    </tr>
                </table>
            </div>