<?php
include_once "headerHTML.php";
?>

<div class="container-fluid background-color-purple h-100 d-flex" style="background-image: url('https://www.avenrahotels.com/images/2019/03/15/carousel_5.jpg')">
    <div class="card col-12 col-md-6 col-lg-5 mx-auto my-auto shadow" style="background-color:rgba(68,0,169,0.5); border: solid #4400A9 5px; border-radius:30px;">
        <div class="card-body">
            <div class="row my-3">
                <h3 class="mx-auto text-light">Welcome To Avenra Garden</h53>
            </div>
            <div class="row">
                <span class="fa-stack fa-2x mx-auto my-3">
                    <i class="fas fa-circle fa-stack-2x text-color-purple"></i>
                    <i class="fas fa-user fa-stack-1x fa-inverse"></i>
                </span>
            </div>
            <form action="loginController.php" method="POST" class="mt-3">
                <div class="form-group row mx-3">
                    <label for="name" class="col-4 text-light">Username</label>
                    <input type="text" class="form-control form-control-sm col-8" id="username" name="username"
                        placeholder="Username">
                </div>
                <div class="form-group row mx-3">
                    <label for="name" class="col-4 text-light">Password</label>
                    <input type="password" class="form-control form-control-sm col-8" id="password" name="password"
                        placeholder="Password">
                </div>
                <div class="row form-group mx-3">
                    <button  onclick="window.location='User/addView.php';" name="Signup" value="Login" type="button" class="btn  background-color-purple text-light btn-sm ml-auto"><i
                            class="fas fa-user mr-2"></i>Sign Up</button>
                    <button name="Login" value="Login" type="submit" class="btn background-color-purple text-light btn-sm ml-1"><i
                            class="fas fa-sign-in-alt mr-2"></i>Login</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php
include_once "footerHTML.php";

?>