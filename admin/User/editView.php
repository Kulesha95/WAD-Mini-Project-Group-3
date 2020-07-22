<?php 
include_once '../headerHTML.php';
include_once '../config.php'; 

$userSql="select * from user where id='$_GET[id]'";
$userResult=mysqli_query($connection,$userSql);
$userData=mysqli_fetch_assoc($userResult);

?>
<div class="container jumbotron bg-white shadow mt-4 col-11">
    <div class="card">
        <div class="card-header bg-white">
            <div class="row">
                <i class="fas fa-info-circle mx-2 my-auto fa-2x"></i>
                <h4 class="ml-2 my-auto">Edit User</h4>
            </div>
        </div>
        <div class="card-body">
        	<form action="editController.php" method="POST" class="m-3" enctype="multipart/form-data">
                <input type="hidden" id="id" name="id" value="<?php echo $_GET['id'];?>">
                 <div class="form-group row">
                    <label for="name" class="col-3 col-md-2 col-xl-2">First Name</label>
                    <input type="text" class="form-control form-control-sm col-9 col-md-10 col-xl-10" id="first_name" name="first_name" placeholder="First Name" value="<?php echo $userData['first_name'];?>">
                </div>
                <div class="form-group row">
                    <label for="name" class="col-3 col-md-2 col-xl-2">Last Name</label>
                    <input type="text" class="form-control form-control-sm col-9 col-md-10 col-xl-10" id="last_name" name="last_name" placeholder="Last Name" value="<?php echo $userData['last_name'];?>">
                </div>
                <div class="form-group row">
                    <label for="name" class="col-3 col-md-2 col-xl-2">User Name</label>
                    <input type="text" class="form-control form-control-sm col-9 col-md-10 col-xl-10" id="username" name="username" placeholder="User Name" value="<?php echo $userData['username'];?>">
                </div>

                <div class="form-group row">
                    <label for="name" class="col-3 col-md-2 col-xl-2">Password</label>
                    <input type="password" class="form-control form-control-sm col-9 col-md-10 col-xl-10" id="password" name="password" placeholder="Password" value="<?php echo $userData['password'];?>">
                </div>
                <div class="form-group row">
                    <label for="name" class="col-3 col-md-2 col-xl-2">Email</label>
                    <input type="text" class="form-control form-control-sm col-9 col-md-10 col-xl-10" id="email" name="email" placeholder="Email" value="<?php echo $userData['email'];?>">
                </div>
                <div class="form-group row">
                    <label for="name" class="col-3 col-md-2 col-xl-2">Status</label>
                    <input type="text" class="form-control form-control-sm col-9 col-md-10 col-xl-10" id="status" name="status" placeholder="Status" value="<?php echo $userData['status'];?>">
                </div>

                <div class="form-group row">
                    <label for="name" class="col-3 col-md-2 col-xl-2">Image</label>
                    <input type="file" class="form-control form-control-sm col-9 col-md-10 col-xl-10" id="image" name="image" value="<?php echo $userData['image'];?>">
                </div>

                <div class="form-group row d-flex">
                    <button name="Save" value="Save" type="submit" class="btn btn-primary btn-sm ml-auto"><i class="fas fa-save mr-2"></i>Save</button>
                </div>
            </form>    
        </div>	
    </div>
</div> 
<?php
    include_once '../footerHTML.php';
?>       