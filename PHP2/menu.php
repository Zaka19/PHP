
<?php 
if(isset($_SESSION['client'])){ 
    $Client = $_SESSION['client'];
    $Cliente = $Client->getLogin();
}
else{
    $Cliente = "Usuari No conectat";
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
<a class="nav-link" href="index1.php">Index </a>
</li>
<li class="nav-item">
<a class="nav-link" href="Pagina1.php">Pagina 1</a>
</li>
<li class="nav-item">
<a class="nav-link" href="Pagina2.php">Pagina 2</a>
</li>
<li class="nav-item">
<a class="nav-link navbar-right" href="#">Hola <?php echo $Cliente;?>
</a>
</li>
</ul>
</div>
</nav>
