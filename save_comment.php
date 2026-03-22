<?php
include 'db.php';

$post_id = $_POST['post_id'];
$name = $_POST['name'];
$comment = $_POST['comment'];

$conn->query("INSERT INTO comments(post_id,name,comment)
VALUES('$post_id','$name','$comment')");

header("Location:view.php?id=$post_id");
?>
