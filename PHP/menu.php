
<?php 
    if(empty($_SESSION['id'])){

        if(empty(filter_input(INPUT_POST,"login")))
        {
            $Nom = "Usuari no identificat";
            $_SESSION['id'] = $Nom;
        }

        else
        {
            $Nom = $_POST["login"];
            $_SESSION['id'] = $Nom;
        }

    }
?>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
<a class="navbar-brand" href="#">Menu</a>
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
<a class="nav-link navbar-right" href="#">Hola <?php echo $_SESSION['id']; ?>
</a>
</li>
</ul>
</div>
</nav>
