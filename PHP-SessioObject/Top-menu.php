<?php
    if(!empty($_SESSION['user'])){
        $User = $_SESSION['user'];
        $NameUser = $User->getNameUser();
    }
    else{
        $NameUser = "I don't have name...";
    }
?>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
<a class="navbar-brand" href="login.php">Menu</a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
<span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="collapsibleNavbar">
<ul class="navbar-nav">
<li class="nav-item">
<a class="nav-link" href="Index.php">Index</a>
</li>
<li class="nav-item">
<a class="nav-link" href="Form.php">Form</a>
</li>
<li class="nav-item">
<a class="nav-link" href="Info.php">Info</a>
</li>
<li class="nav-item">
<a class="nav-link navbar-right" href="#">Hello <?php echo $NameUser; ?>
</a>
</li>
</ul>
</div>
</nav>