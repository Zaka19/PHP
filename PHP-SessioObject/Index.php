<?php 
    include "User.php";
    include "Header.php";

    if(!empty(filter_input(INPUT_POST,"NameUser"))){
        $User1 = new User();
        $NameLogin = filter_input(INPUT_POST,"NameUser");
        $User1->setNameUser($NameLogin);
        $_SESSION['user'] = $User1;
    }

    require "Top-menu.php";
?>
<?php include "Footer.php" ?>