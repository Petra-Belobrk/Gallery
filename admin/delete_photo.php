<?php include("includes/init.php"); ?>

<?php
if(!$session->is_signed_in()) {

    redirect("login.php");

}
if(empty($_GET['photo_id'])) {

    redirect("../photos.php");
}

$photo = Photo::find_by_id($_GET['id']);

if($photo) {

    $photo->delete_photo();
    $session->message("The {$photo->filename} has been deleted");
    redirect("../admin/photos.php");

} else {
    redirect("../admin/photos.php");
}
