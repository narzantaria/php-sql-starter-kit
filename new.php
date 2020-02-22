<!DOCTYPE html>
<html>
<?php include 'head.php';?>
<body>

<div class="container">
  <?php include 'header.php';?>
  <div class="wrapper">
    <form action="addpost.php">
      <p><label for="title">Title</label></p>
      <p><input type="text" name="title"></p>
      <p><label for="img">Photo</label></p>
      <p><input type="text" name="img"></p>
      <p><label for="body">Text</label></p>
      <p><textarea id="" cols="30" rows="10" name="body"></textarea></p>
      <p><button type="submit">OK</button></p>
    </form>
  </div>
</div>

</body>
</html> 