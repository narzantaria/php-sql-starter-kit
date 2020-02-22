<!DOCTYPE html>
<html>
<?php include 'head.php';?>
<body>

<div class="container">
<?php include 'header.php';?>

<div class="wrapper">
  <h3>Posts</h3>
</div>

<?php 
$servername = "localhost";
$username = "shutruk";
$password = "82gsu92x";
$dbname = "qwerty";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM posts";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
  ?>
  <div class="row">
  <div class="col s12 m6 l6">
    <img src=<?=$row["img"] ?> alt="">
  </div>
  <div class="col s12 m6 l6">
    <a href='post.php?id=<?=$row["id"]?>&title=<?=$row["title"]?>&img=<?=$row["img"]?>&body=<?=$row["body"]?>'>
      <h3><?=$row["title"] ?></h3>
    </a>    
    <p><?=$row["body"] ?></p>
    <form action='removepost.php'>
      <input class='hidden' type="text" name='id' value=<?=$row["id"]?>>
      <button class='submit' type="submit"><i class="material-icons">delete</i></button>
    </form>
  </div>
  </div>
  <?php
  }
} else {
  echo "0 results";
}
$conn->close();
?>
</div>

</body>
</html>