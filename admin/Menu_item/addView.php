<?php 
include_once '../headerHTML.php';
include_once '../config.php'; 
?>
<div class="container jumbotron bg-white shadow mt-4 col-11">
    <div class="card">
        <div class="card-header bg-white">
            <div class="row">
                <i class="fas fa-hamburger mx-2 my-auto fa-2x"></i>
                <h4 class="ml-2 my-auto">Add Menu Item</h4>
            </div>
        </div>
        <div class="card-body">
            <form action="addController.php" method="POST" class="m-3" enctype="multipart/form-data">
                <input type="hidden" id="id" name="id" value="<?php if(isset($_GET['id'])){ echo $_GET['id'];}?>">
                <div class="form-group row">
                    <label for="name" class="col-12 col-md-3 col-xl-2">Food Name</label>
                    <input type="text" class="form-control form-control-sm col-12 col-md-9 col-xl-10" id="name"
                        name="name" placeholder="Food Name" required>
                </div>
                <div class="form-group row">
                    <label for="name" class="col-12 col-md-3 col-xl-2">Description</label>
                    <textarea class="form-control form-control-sm col-12 col-md-9 col-xl-10" id="description"
                        name="description" placeholder="Description" required></textarea>
                </div>
                <div class="form-group row">
                    <label for="name" class="col-12 col-md-3 col-xl-2">Price</label>
                    <input type="text" class="form-control form-control-sm col-12 col-md-9 col-xl-10" id="price"
                        name="price" placeholder="Price" required>
                </div>
                <div class="form-group row">
                    <label for="name" class="col-12 col-md-3 col-xl-2">Image</label>
                    <div class="custom-file mb-3 col-12 col-md-9 col-xl-10">
                        <input type="file" class="custom-file-input" id="image" name="image" required>
                        <label class="custom-file-label" for="customFile">Choose file</label>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="name" class="col-12 col-md-3 col-xl-2">Type</label>
                    <select class="form-control form-control-sm col-6 col-12 col-md-9 col-xl-10" id="type" name="type" required>
                        <option value="" selected disabled>Select </option>
                        <option value="Breakfast">Breakfast</option>
                        <option value="Lunch">Lunch</option>
                        <option value="Dinner">Dinner</option>
                    </select>
                </div>
                <div class="form-group row d-flex">
                    <button name="Save" value="Save" type="submit" class="btn btn-primary btn-sm ml-auto"><i
                            class="fas fa-save mr-2"></i>Save</button>
                </div>
            </form>
        </div>
    </div>
</div>
<?php
    include_once '../footerHTML.php';
?>