<title>Info</title>
<?php include "header.php" ?>
<?php require "menu.php" ?>
<?php include "Cliente.php" ?>
<?php 
    $Cliente = new Cliente();

    $Nom = " ";
    $FirstName = " ";
    $Code = " ";

    $Nom=filter_input(INPUT_POST,"name");
    $FirstName=filter_input(INPUT_POST,"firstname");
    $Code=filter_input(INPUT_POST,"codeclient");

    if(!empty($Nom)){
        $Cliente->setName($Nom);
        $_SESSION['name'] = $Nom;
    }
    else{
        $Cliente->setName(" ");
    }
    if(!empty($FirstName)){
        $Cliente->setFirstName($FirstName);
        $_SESSION['fname'] = $FirstName;
    }
    else{
        $Cliente->setFirstName(" ");
    } if(!empty($Code)){
        $Cliente->setCode($Code);
        $_SESSION['code'] = $Code;
    }
    else{
        $Cliente->setCode(" ");
    }
?>
<div class="container">
    <div class="form-group" style="margin-top:20px;">
        <label for="text">Name:</label>
        <input type="text" class="form-control" id="n" name="name" value="<?php echo $_SESSION['name'] ?>" readonly>
    </div>
    <div class="form-group">
        <label for="text">First Name:</label>
        <input type="text" class="form-control" id="fn" name="firstname" value="<?php echo $_SESSION['fname'] ?>" readonly>
    </div>
    <div class="form-group">
        <label for="number">Code Client:</label>
        <input type="number" class="form-control" id="cc" name="codeclient" value="<?php echo $_SESSION['code'] ?>" readonly>
    </div>
</div>
<?php include "footer.php" ?>