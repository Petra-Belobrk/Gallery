<?php include("includes/init.php");


if(!$session->is_signed_in()) {

    redirect("login.php");

}
if(empty($_GET['id'])) {

    redirect("../admin/comments.php");
}

$comment = Comment::find_by_id($_GET['id']);

if($comment) {

    $comment->delete();
    $session->message("The comment with id {$comment->id} has been deleted");
    redirect("../admin/comment_photo.php?id={$comment->photo_id}");

} else {
    redirect("../admin/comments.php");
}
