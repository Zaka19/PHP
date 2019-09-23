<?php session_start();?>
<html>
<body>
<?php include 'header.php';?>
<?php require 'menu.php';?>
<br>
<form action ="index1.php" method="post">
<div  class="container">
<div class="col-sm-">
  <input type="text" name="login" class="fadeIn second" name="login" placeholder="login">
  <br><br><input type="submit" class="fadeIn fourth" value="Log In">
</div>
</div>
</form>
<?php include 'footer.php';?>
</body>
</html>