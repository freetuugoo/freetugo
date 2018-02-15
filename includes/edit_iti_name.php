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

if(isset($_POST['name-btn'])) {
    $newName = $_POST['iti-name'];
    if(empty($newName)) {

    } else {
        DB::query(
            'UPDATE itineraries
            SET name=:name
            WHERE id=:id', array(':id'=>$id, ':name'=>$newName)
            );
    }
}
?>
<div id="edit_iti_name" class="travelo-signup-box travelo-box">
    <form action="<?php $url ?>" method="post">
        <div class="form-group">
            <h4>New Itinerary Name</h4>
            <input type="text" class="input-text full-width" name="iti-name" rows="1" style="border-radius:30px;">
        </div>
        <br>
        <button onclick="redirect(target)" type="submit" class="full-width btn-medium" name="name-btn" style="border-radius:30px;">OK</button>
    </form>
</div>