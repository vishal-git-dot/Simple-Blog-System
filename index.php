<?php include 'db.php'; ?>

<!DOCTYPE html>
<html>
<head>
<title>Simple Blog</title>
<link rel="stylesheet" href="style.css">
</head>
<body>

<h1>My Blog</h1>

<a href="create.php">Create New Post</a>

<?php
$result = $conn->query("SELECT * FROM posts ORDER BY created_at DESC");

while($row = $result->fetch_assoc()){
?>

<div class="post">

<h2><?php echo $row['title']; ?></h2>

<p><?php echo substr($row['content'],0,150); ?>...</p>

<p>Author: <?php echo $row['author']; ?></p>

<p>Status: <?php echo $row['status']; ?></p>

<a href="view.php?id=<?php echo $row['id']; ?>">Read</a>
<a href="edit.php?id=<?php echo $row['id']; ?>">Edit</a>
<a href="delete.php?id=<?php echo $row['id']; ?>">Delete</a>

</div>

<?php } ?>

</body>
</html>
