<?php include 'db.php';

if(isset($_POST['submit'])){

$title = $_POST['title'];
$content = $_POST['content'];
$author = $_POST['author'];
$status = $_POST['status'];

$sql = "INSERT INTO posts(title,content,author,status)
VALUES('$title','$content','$author','$status')";

$conn->query($sql);

header("Location:index.php");

}
?>

<h2>Create Post</h2>

<form method="POST">

<input type="text" name="title" placeholder="Title"><br><br>

<textarea name="content" placeholder="Content"></textarea><br><br>

<input type="text" name="author" placeholder="Author"><br><br>

<select name="status">
<option value="draft">Draft</option>
<option value="published">Publish</option>
</select>

<br><br>

<button name="submit">Save</button>

</form>
