<title>Login</title>
<?php include "header.php" ?>
<?php require "menu.php" ?>
<h1 style="text-align:center;margin: 30px;">Login</h1>
<main class="login-form" style="margin-top:120px;margin-bottom:120px;">
    <div class="cotainer">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Register</div>
                    <div class="card-body">
                        <form action="index1.php" method="post">
                            <div class="form-group row">
                                <label for="login" class="col-md-4 col-form-label text-md-right">Login Name</label>
                                <div class="col-md-6">
                                    <input type="text" id="login" class="form-control" name="login" required autofocus>
                                </div>
                            </div>

                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Login
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
</main>
<?php include "footer.php" ?>
