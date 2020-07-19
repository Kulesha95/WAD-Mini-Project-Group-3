<?php 
include_once '../headerHTML.php';
include_once '../config.php'; 
?>
<div class="container jumbotron bg-white shadow mt-4 col-11">
    <div class="card">
        <div class="card-header bg-white">
            <div class="row">
                <i class="fas fa-info-circle mx-2 my-auto fa-2x"></i>
                <h4 class="ml-2 my-auto">Add Menu Item</h4>
            </div>
        </div>
        <div class="card-body">
            <form action="addController.php" method="POST" class="m-3" enctype="multipart/form-data">
                <input type="hidden" id="id" name="id" value="<?php if(isset($_GET['id'])){ echo $_GET['id'];}?>">
                <div class="form-group row">
                    <label for="name" class="col-4 col-md-3 col-xl-2">Food Name</label>
                    <input type="text" class="form-control form-control-sm col-8 col-md-9 col-xl-10" id="name" name="name" placeholder="Food Name">
                </div>
                <div class="form-group row">
                    <label for="name" class="col-4 col-md-3 col-xl-2">Description</label>
                    <textarea class="form-control form-control-sm col-8 col-md-9 col-xl-10" id="description" name="description" placeholder="Description"></textarea>
                </div>
                <div class="form-group row">
                    <label for="name" class="col-4 col-md-3 col-xl-2">Price</label>
                    <input type="text" class="form-control form-control-sm col-8 col-md-9 col-xl-10" id="price" name="size" placeholder="Price">
                </div>
                <div class="form-group row">
                    <label for="name" class="col-4 col-md-3 col-xl-2">Image</label>
                   <div class="file-upload-wrapper form-control form-control-sm col-8 col-md-9 col-xl-10">
                    <input type="file" id="input-file-now"  id="image" placeholder="add image" />
                </div>
                </div>
                
                <div class="form-group row">
                    <label for="name" class="col-4 col-md-3 col-xl-2">Type</label>
                    <select class="form-control form-control-sm col-6 col-8 col-md-9 col-xl-10" id="type" name="type">
                        <option value="" selected disabled>Select </option>
                        <option value="Available">Breakfast</option>
                        <option value="Not Available">Lunch</option>
                        <option value="Not Available">Dinner</option>
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