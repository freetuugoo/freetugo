<script>
    function redirect(target) {
        window.location.replace(target);
    }
</script>
<?php
include_once('./db.php');
include_once('./classes/login_class.php');
// $user_id = DB::query('SELECT user_id FROM login_tokens WHERE token=:token', array(':token'=>sha1($_COOKIE['FCID'])))[0]['user_id'];
$user_id="71";
if (isset($_POST['img_update'])) {   
    $filetmp = $_FILES['file_img']['tmp_name'];
    $filename = $_FILES['file_img']['name'];
    $filepath = "images/user_image/".$filename;

    move_uploaded_file($filetmp,$filepath);
    DB::query(
        'UPDATE user_images
        SET image=:image
        WHERE user_id=:user_id', array(':image'=>$filepath,':user_id'=>$user_id)
        );
    echo "<script>
        swal({
            title: 'Successfully updated your image',
            icon: 'success',
            closeOnClickOutside: false
        }).then(function() {
            window.location = 'dashboard.php';
        })
    </script>";
}
?>

<div id="change_user_image" class="travelo-signup-box travelo-box">
    <form action="dashboard.php" method="post" enctype="multipart/form-data">
        <div class="form-group">Choose New Image<br><br>
            <input type="file" class="form-control" name="file_img" style="border-radius: 0px 30px 30px 0px; padding-left:0px; padding-top:0px; height: 24px;">
        </div>
        <br>
        <button onclick="redirect(target)" type="submit" class="full-width btn-medium" name="img_update" style="border-radius:30px;">Save</button>
    </form>
</div>
