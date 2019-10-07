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
<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aliquam, ea debitis. Soluta obcaecati sunt illum quod blanditiis inventore itaque, eum excepturi veniam qui quos, minus officiis sit quidem nemo voluptatum?
Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aliquam, ea debitis. Soluta obcaecati sunt illum quod blanditiis inventore itaque, eum excepturi veniam qui quos, minus officiis sit quidem nemo voluptatum?
Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aliquam, ea debitis. Soluta obcaecati sunt illum quod blanditiis inventore itaque, eum excepturi veniam qui quos, minus officiis sit quidem nemo voluptatum?
Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aliquam, ea debitis. Soluta obcaecati sunt illum quod blanditiis inventore itaque, eum excepturi veniam qui quos, minus officiis sit quidem nemo voluptatum?
Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aliquam, ea debitis. Soluta obcaecati sunt illum quod blanditiis inventore itaque, eum excepturi veniam qui quos, minus officiis sit quidem nemo voluptatum?
Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aliquam, ea debitis. Soluta obcaecati sunt illum quod blanditiis inventore itaque, eum excepturi veniam qui quos, minus officiis sit quidem nemo voluptatum?
Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aliquam, ea debitis. Soluta obcaecati sunt illum quod blanditiis inventore itaque, eum excepturi veniam qui quos, minus officiis sit quidem nemo voluptatum?
Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aliquam, ea debitis. Soluta obcaecati sunt illum quod blanditiis inventore itaque, eum excepturi veniam qui quos, minus officiis sit quidem nemo voluptatum?
Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aliquam, ea debitis. Soluta obcaecati sunt illum quod blanditiis inventore itaque, eum excepturi veniam qui quos, minus officiis sit quidem nemo voluptatum?
Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aliquam, ea debitis. Soluta obcaecati sunt illum quod blanditiis inventore itaque, eum excepturi veniam qui quos, minus officiis sit quidem nemo voluptatum?
Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aliquam, ea debitis. Soluta obcaecati sunt illum quod blanditiis inventore itaque, eum excepturi veniam qui quos, minus officiis sit quidem nemo voluptatum?
</p>

<style>
.center {
    text-align: center; 
}

</style>

<div class="container">
  <div class="row">
    <div class="col-sm-4">
      <h3>Column 1</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
    </div>
    <div class="col-sm-4">
      <h3>Column 2</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
    </div>
    <div class="col-sm-4">
      <h3>Column 3</h3>        
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
    </div>
  </div>
</div>


<div class="center">
  <h2>Photo</h2>
            
  <img src="hyper.jpg" class="img-circle" alt="Cinque Terre" width="150" height="150"> 
   <p>Description</p> 
</div>

<?php include "Footer.php" ?>