<?php include 'db.php';

$id = $_GET['id'];

$result = $conn->query("SELECT * FROM posts WHERE id=$id");
$row = $result->fetch_assoc();

if(isset($_POST['update'])){

$title=$_POST['title'];
$content=$_POST['content'];
$status=$_POST['status'];

$conn->query("UPDATE posts 
SET title='$title',content='$content',status='$status'
WHERE id=$id");

header("Location:index.php");
}
?>

<h2>Edit Post</h2>

<form method="POST">

<input type="text" name="title" value="<?php echo $row['title']; ?>"><br><br>

<textarea name="content"><?php echo $row['content']; ?></textarea><br><br>

<select name="status">
<option value="draft">Draft</option>
<option value="published">Published</option>
</select>

<br><br>

<button name="update">Update</button>

</form>
