<!DOCTYPE html>
<html>
<?php include 'head.php';?>
<body>

<div class="container">
  <?php include 'header.php';?>

  <div class="wrapper">
    <form action="updpost.php">
      <input class='hidden' type="text" name='id' value=<?=$_GET['id'] ?>>
      <p><label for="title">Title</label></p>
      <p><input type="text" name="title" value=<?=$_GET['title'] ?>></p>
      <img src=<?=$_GET['img'] ?> alt="">
      <p><label for="img">Photo</label></p>
      <p><input type="text" name="img" value=<?=$_GET['img'] ?>></p>
      <p><label for="body">Text</label></p>
      <p><textarea id="" cols="30" rows="10" name="body"><?=$_GET['body'] ?></textarea></p>
      <p><button type="submit">OK</button></p>
    </form>
  </div>

</div>

</body>
</html>