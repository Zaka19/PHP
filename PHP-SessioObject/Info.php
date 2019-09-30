<?php 
    include "User.php";
    include "Header.php";
    require "Top-menu.php";

    $Name=filter_input(INPUT_POST,"name");
    $FirstName=filter_input(INPUT_POST,"firstname");
    $Code=filter_input(INPUT_POST,"codeclient");
    $User = $_SESSION['user'];

    if(!empty($Name)){
        $User->setName($Name);
    }
    if(!empty($FirstName)){
        $User->setFirstName($FirstName);
    }
    if(!empty($Code)){
        $User->setCode($Code);
    }

    $Name = $User->getName();
    $FirstName= $User->getFirstName();
    $Code= $User->getCode();

    $_SESSION['user'] = $User;
?>
<div class="container">
    <div class="form-group" style="margin-top:20px;">
        <label for="text">Name:</label>
        <input type="text" class="form-control" id="n" name="name" value="<?php echo $Name ?>" readonly>
    </div>
    <div class="form-group">
        <label for="text">First Name:</label>
        <input type="text" class="form-control" id="fn" name="firstname" value="<?php echo $FirstName ?>" readonly>
    </div>
    <div class="form-group">
        <label for="number">Code Client:</label>
        <input type="number" class="form-control" id="cc" name="codeclient" value="<?php echo $Code ?>" readonly>
    </div>
</div>
<?php include "footer.php" ?>