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
                <i class="fas fa-user mx-2 my-auto fa-2x"></i>
                <h4 class="ml-2 my-auto">Edit User</h4>
            </div>
        </div>
        <div class="card-body">
        	<form action="editController.php" method="POST" class="m-3" enctype="multipart/form-data">
                <input type="hidden" id="id" name="id" value="<?php echo $_GET['id'];?>">
                 <div class="form-group row">
                    <label for="name" class="col-12 col-md-2 col-xl-2">First Name</label>
                    <input type="text" class="form-control form-control-sm col-12 col-md-10 col-xl-10" id="first_name" name="first_name" placeholder="First Name" value="<?php echo $userData['first_name'];?>" required>
                </div>
                <div class="form-group row">
                    <label for="name" class="col-12 col-md-2 col-xl-2">Last Name</label>
                    <input type="text" class="form-control form-control-sm col-12 col-md-10 col-xl-10" id="last_name" name="last_name" placeholder="Last Name" value="<?php echo $userData['last_name'];?>" required>
                </div>
                <div class="form-group row">
                    <label for="name" class="col-12 col-md-2 col-xl-2">User Name</label>
                    <input type="text" class="form-control form-control-sm col-12 col-md-10 col-xl-10" id="username" name="username" placeholder="User Name" value="<?php echo $userData['username'];?>" required>
                </div>

                <div class="form-group row">
                    <label for="name" class="col-12 col-md-2 col-xl-2">Password</label>
                    <input type="password" class="form-control form-control-sm col-12 col-md-10 col-xl-10" id="password" name="password" placeholder="Password" value="<?php echo $userData['password'];?>" required>
                </div>
                <div class="form-group row">
                    <label for="name" class="col-12 col-md-2 col-xl-2">Email</label>
                    <input type="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" class="form-control form-control-sm col-12 col-md-10 col-xl-10" id="email" name="email" placeholder="Email" value="<?php echo $userData['email'];?>" required>
                </div>
                <div class="form-group row">
                    <label for="name" class="col-12 col-md-2 col-xl-2">Image</label>
                    <div class="custom-file form-control-sm col-12 col-md-10 col-xl-10">
                        <input type="file" class="custom-file-input" id="image" name="image">
                        <label class="custom-file-label" for="image">Choose file</label>
                    </div>
                </div>

                <div class="form-group row d-flex">
                    <button name="Save" value="Save" type="submit" class="btn btn-primary btn-sm ml-auto"><i class="fas fa-edit mr-2"></i>Save</button>
                </div>
            </form>    
        </div>	
    </div>
</div>
<script>
// Display the selected file name in the file input box
$(".custom-file-input").on("change", function() {
    var fileName = $(this).val().split("\\").pop();
    $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
});
</script> 
<?php
    include_once '../footerHTML.php';
?>       