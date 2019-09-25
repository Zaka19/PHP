<title>Form</title>
<?php include "header.php" ?>
<?php require "menu.php" ?>
<h1 style="text-align:center;margin: 30px;">Forms</h1>
<div class="container">
<form>
  <div class="row">
    <div class="col form-group">
      <input type="text" class="form-control" placeholder="First name">
    </div>
    <div class="col form-group">
      <input type="text" class="form-control" placeholder="Last name">
    </div>
  </div>
  <div class="row">
    <div class="col-sm-12 col-md-4 form-group">
      <input type="text" class="form-control" placeholder="City">
    </div>            
     <div class="col-sm-12 col-md-4 form-group">
      <input type="text" class="form-control" placeholder="Zipcode">
    </div>  
    <div class="col-sm-12 col-md-4 form-group">
      <input type="text" class="form-control" placeholder="Country">
    </div>
  </div>
  <button type="submit" class="btn btn-info">Submit</button>
</form>
</div>
<?php include "footer.php" ?>
