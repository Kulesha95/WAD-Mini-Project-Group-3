<?php 
include_once '../headerHTML.php';
include_once '../config.php'; 
?>
<div class="container jumbotron bg-white shadow mt-4 col-11">
    <div class="card">
        <div class="card-header bg-white">
            <div class="row">
                <i class="fas fa-user-tie mx-2 my-auto fa-2x"></i>
                <h4 class="ml-2 my-auto">Add Staff</h4>
            </div>
        </div>
        <div class="card-body">
            <form action="addController.php" method="POST" class="m-3" enctype="multipart/form-data">
                <input type="hidden" id="id" name="id" value="<?php if(isset($_GET['id'])){ echo $_GET['id'];}?>">
                <div class="form-group row">
                    <label for="name" class="col-12 col-md-3 col-xl-2">Title</label>
                    <input type="text" class="form-control form-control-sm col-12 col-md-9 col-xl-10" id="title" name="title" placeholder="Title" required>
                </div>
                <div class="form-group row">
                    <label for="name" class="col-12 col-md-3 col-xl-2">First Name</label>
                    <input type="text" class="form-control form-control-sm col-12 col-md-9 col-xl-10" id="first_name" name="first_name" placeholder="First Name" required>
                </div>
                <div class="form-group row">
                    <label for="name" class="col-12 col-md-3 col-xl-2">Last Name</label>
                    <input type="text" class="form-control form-control-sm col-12 col-md-9 col-xl-10" id="last_name" name="last_name" placeholder="Last Name" required>
                </div>
                <div class="form-group row">
                    <label for="name" class="col-12 col-md-3 col-xl-2">Designation</label>
                    <input type="text" class="form-control form-control-sm col-12 col-md-9 col-xl-10" id="designation" name="designation" placeholder="Designation" required>
                </div>
                <div class="form-group row">
                    <label for="name" class="col-12 col-md-3 col-xl-2">E-mail</label>
                    <input type="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" class="form-control form-control-sm col-12 col-md-9 col-xl-10" id="email" name="email" placeholder="E-mail">
                </div>
                <div class="form-group row">
                    <label for="name" class="col-12 col-md-3 col-xl-2">Mobile</label>
                    <input type="tel" pattern="[0-9]{10}"  class="form-control form-control-sm col-12 col-md-9 col-xl-10" id="mobile" name="mobile" placeholder="Mobile">
                </div>
                <div class="form-group row">
                    <label for="name" class="col-12 col-md-3 col-xl-2">Direct</label>
                    <input type="tel" pattern="[0-9]{10}" class="form-control form-control-sm col-12 col-md-9 col-xl-10" id="direct" name="direct" placeholder="Direct">
                </div>
                <div class="form-group row">
                    <label for="name" class="col-12 col-md-3 col-xl-2">Type</label>
                    <select class="form-control form-control-sm  col-12 col-md-9 col-xl-10" id="type" name="type" required>
                        <option value="" selected disabled>Select Type</option>
                        <option value="Chairman">Chairman</option>
                        <option value="Director">Director</option> 
                        <option value="Management Team">Management Team</option>                   
                    </select>
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