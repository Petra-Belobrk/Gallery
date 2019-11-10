<?php include("includes/init.php"); ?>

<?php
if(!$session->is_signed_in()) {

    redirect("login.php");

}
if(empty($_GET['user_id'])) {

    redirect("../admin/users.php");
}

$user = User::find_by_id($_GET['id']);

if($user) {

    $user->delete_photo();
    $session->message("The user {$user->username} has been deleted");
    redirect("../admin/users.php");

} else {
    redirect("../admin/users.php");
}
