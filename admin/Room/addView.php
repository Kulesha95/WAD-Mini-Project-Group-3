<?php 
include_once '../headerHTML.php';
include_once '../config.php'; 
?>
<div class="container jumbotron bg-white shadow mt-4 col-11">
    <div class="card">
        <div class="card-header bg-white">
            <div class="row">
                <i class="fas fa-bed mx-2 my-auto fa-2x"></i>
                <h4 class="ml-2 my-auto">Add Room</h4>
            </div>
        </div>
        <div class="card-body">
            <form action="addController.php" method="POST" class="m-3" enctype="multipart/form-data">
                <input type="hidden" id="id" name="id" value="<?php if(isset($_GET['id'])){ echo $_GET['id'];}?>">
                <div class="form-group row">
                    <label for="name" class="col-12 col-md-3 col-xl-2">Room Name</label>
                    <input type="text" class="form-control form-control-sm col-12 col-md-9 col-xl-10" id="name" name="name" placeholder="Room Name" required>
                </div>
                <div class="form-group row">
                    <label for="name" class="col-12 col-md-3 col-xl-2">Description</label>
                    <textarea class="form-control form-control-sm col-12 col-md-9 col-xl-10" id="description" name="description" placeholder="Description" required></textarea>
                </div>
                <div class="form-group row">
                    <label for="name" class="col-12 col-md-3 col-xl-2">Room Size</label>
                    <input type="text" class="form-control form-control-sm col-12 col-md-9 col-xl-10" id="size" name="size" placeholder="Room Size" required>
                </div>
                <div class="form-group row">
                    <label for="name" class="col-12 col-md-3 col-xl-2">Bed Type</label>
                    <input type="text" class="form-control form-control-sm col-12 col-md-9 col-xl-10" id="bed_type" name="bed_type" placeholder="Bed Type" required>
                </div>
                <div class="form-group row">
                    <label for="name" class="col-12 col-md-3 col-xl-2">Ideal For</label>
                    <input type="text" class="form-control form-control-sm col-12 col-md-9 col-xl-10" id="ideal_for" name="ideal_for" placeholder="Ideal For" required>
                </div>
                <div class="form-group row">
                    <label for="name" class="col-12 col-md-3 col-xl-2">View</label>
                    <input type="text" class="form-control form-control-sm col-12 col-md-9 col-xl-10" id="view" name="view" placeholder="View" required>
                </div>
                <div class="form-group row">
                    <label for="name" class="col-12 col-md-3 col-xl-2">Inter Connections</label>
                    <select class="form-control form-control-sm col-6 col-12 col-md-9 col-xl-10" id="inter_connections" name="inter_connections" required>
                        <option value="" selected disabled>Select Availability</option>
                        <option value="Available">Available</option>
                        <option value="Not Available">Not Available</option>
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