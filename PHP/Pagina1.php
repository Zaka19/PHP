<title>Form</title>
<?php include "header.php" ?>
<?php require "menu.php" ?>
<h1 style="text-align:center;margin: 30px;">Forms</h1>
<div class="container">
  <form action="Pagina2.php" method="post">
    <div class="form-group">
      <label for="text">Name:</label>
      <input type="text" class="form-control" id="n" placeholder="Enter Name" name="name">
    </div>
    <div class="form-group">
      <label for="text">First Name:</label>
      <input type="text" class="form-control" id="fn" placeholder="Enter First Name" name="firstname">
    </div>
    <div class="form-group">
      <label for="number">Code Client:</label>
      <input type="number" class="form-control" id="cc" placeholder="Enter code" name="codeclient">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>
<?php include "footer.php" ?>
