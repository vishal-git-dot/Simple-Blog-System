<?php include 'db.php';

$id = $_GET['id'];

$post = $conn->query("SELECT * FROM posts WHERE id=$id");
$row = $post->fetch_assoc();
?>

<h1><?php echo $row['title']; ?></h1>

<p><?php echo $row['content']; ?></p>

<p>Author: <?php echo $row['author']; ?></p>

<hr>

<h3>Comments</h3>

<?php
$comments = $conn->query("SELECT * FROM comments WHERE post_id=$id");

while($c = $comments->fetch_assoc()){
?>

<p><b><?php echo $c['name']; ?></b>: <?php echo $c['comment']; ?></p>

<?php } ?>

<hr>

<h3>Add Comment</h3>

<form action="save_comment.php" method="POST">

<input type="hidden" name="post_id" value="<?php echo $id; ?>">

<input type="text" name="name" placeholder="Your Name"><br><br>

<textarea name="comment"></textarea><br><br>

<button>Post Comment</button>

</form>
