<?php 
include_once '../headerHTML.php';
include_once '../config.php'; 

$staffSql="select * from staff where id='$_GET[id]'";
$staffResult=mysqli_query($connection,$staffSql);
$staffData=mysqli_fetch_assoc($staffResult);

?>
<div class="container jumbotron bg-white shadow mt-4 col-11">
    <div class="card">
        <div class="card-header bg-white">
            <div class="row">
                <i class="fas fa-user-tie mx-2 my-auto fa-2x"></i>
                <h4 class="ml-2 my-auto">Edit Staff</h4>
            </div>
        </div>
        <div class="card-body">
            <form action="editController.php" method="POST" class="m-3" enctype="multipart/form-data">
                <input type="hidden" id="id" name="id" value="<?php echo $_GET['id'];?>">
                <div class="form-group row">
                    <label for="name" class="col-12 col-md-3 col-xl-2">Title</label>
                    <input type="text" class="form-control form-control-sm col-12 col-md-9 col-xl-10" id="title" name="title" placeholder="Title" value="<?php echo $staffData['title'];?>" required>
                </div>
                <div class="form-group row">
                    <label for="code" class="col-12 col-md-3 col-xl-2">First Name</label>
                    <input type="text" class="form-control form-control-sm col-12 col-md-9 col-xl-10" id="first_name" name="first_name" placeholder="First Name" value="<?php echo $staffData['first_name'];?>" required>
                </div>
                <div class="form-group row">
                    <label for="code" class="col-12 col-md-3 col-xl-2">Last Name</label>
                    <input type="text" class="form-control form-control-sm col-12 col-md-9 col-xl-10" id="last_name" name="last_name" placeholder="Last Name" value="<?php echo $staffData['last_name'];?>" required>
                </div>
                <div class="form-group row">
                    <label for="code" class="col-12 col-md-3 col-xl-2">Designation</label>
                    <input type="text" class="form-control form-control-sm col-12 col-md-9 col-xl-10" id="designation" name="designation" placeholder="Designation" value="<?php echo $staffData['designation'];?>" required>
                </div>
                <div class="form-group row">
                    <label for="code" class="col-12 col-md-3 col-xl-2">E-mail</label>
                    <input type="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" class="form-control form-control-sm col-12 col-md-9 col-xl-10" id="email" name="email" placeholder="E-mail" value="<?php echo $staffData['email'];?>">
                </div>
                <div class="form-group row">
                    <label for="code" class="col-12 col-md-3 col-xl-2">Mobile</label>
                    <input type="tel" pattern="[0-9]{10}" class="form-control form-control-sm col-12 col-md-9 col-xl-10" id="mobile" name="mobile" placeholder="Mobile" value="<?php echo $staffData['mobile'];?>">
                </div>
                <div class="form-group row">
                    <label for="code" class="col-12 col-md-3 col-xl-2">Direct</label>
                    <input type="tel" pattern="[0-9]{10}" class="form-control form-control-sm col-12 col-md-9 col-xl-10" id="direct" name="direct" placeholder="Direct" value="<?php echo $staffData['direct'];?>">
                </div>
                <div class="form-group row">
                    <label for="name" class="col-12 col-md-3 col-xl-2">Type</label>
                    <select class="form-control form-control-sm  col-12 col-md-9 col-xl-10" id="type" name="type" value="<?php echo $staffData['type'];?>" required>
                        <option value="Chairman">Chairman</option>
                        <option value="Director">Director</option> 
                        <option value="Management Team">Management Team</option>                   
                    </select>
                </div>
                <div class="form-group row d-flex">
                    <button name="Edit" value="Edit" type="submit" class="btn btn-primary btn-sm ml-auto"><i class="fas fa-edit mr-2"></i>Edit</button>
                </div>
            </form>
        </div>
    </div>
</div>
<?php
    include_once '../footerHTML.php';
?>