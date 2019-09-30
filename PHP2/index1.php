<?php 
    include 'Cliente.php';
    include 'header.php';
    if(!empty(filter_input(INPUT_POST,"login"))){
       $Cliente = new Cliente();
       $Cliente->setLogin($_POST["login"]);
       $_SESSION['client'] = $Cliente;
       var_dump($Cliente);
    }
    require 'menu.php';
?>
<?php include 'footer.php';?>
