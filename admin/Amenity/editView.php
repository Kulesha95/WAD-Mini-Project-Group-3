<?php 
include_once '../headerHTML.php';
include_once '../config.php'; 
// get amenity details
$amenitySql="select * from amenity where id='$_GET[id]'";
$amenityResult=mysqli_query($connection,$amenitySql);
$amenityData=mysqli_fetch_assoc($amenityResult);

?>
<div class="container jumbotron bg-white shadow mt-4 col-11">
    <div class="card">
        <div class="card-header bg-white">
            <div class="row">
                <i class="fas fa-wifi mx-2 my-auto fa-2x"></i>
                <h4 class="ml-2 my-auto">Edit Amenity</h4>
            </div>
        </div>
        <div class="card-body">
            <form action="editController.php" method="POST" class="m-3" enctype="multipart/form-data">
                <input type="hidden" id="id" name="id" value="<?php echo $_GET['id'];?>">
                <div class="form-group row">
                    <label for="name" class="col-12 col-md-2 col-xl-1">Amenity</label>
                    <input type="text" class="form-control form-control-sm col-12 col-md-10 col-xl-11" id="amenity" name="amenity" placeholder="Amenity" value="<?php echo $amenityData['amenity'];?>" required>
                </div>
                <div class="form-group row">
                    <label for="name" class="col-12 col-md-2 col-xl-1">Type</label>
                    <select class="form-control form-control-sm col-12 col-md-10 col-xl-11" id="type" name="type" required>
                        <option value="" Selected Disabled>Select Type</option>
                        <option value="Connectivity" <?php if($amenityData['type']=="Connectivity"){echo "selected";}?>>Connectivity</option>
                        <option value="Services" <?php if($amenityData['type']=="Services"){echo "selected";}?>>Services</option>
                        <option value="Extras" <?php if($amenityData['type']=="Extras"){echo "selected";}?>>Extras</option>
                    </select>
                </div>
                <div class="form-group row">
                    <label for="name" class="col-12 col-md-2 col-xl-1">Icon</label>
                    <div class="input-group col-12 col-md-10 col-xl-11 m-0 p-0">
                        <input type="text" class="form-control form-control-sm" id="icon" name="icon"
                            placeholder="Icon" value="<?php echo $amenityData['icon'];?>" required>
                        <div class="input-group-append">
                            <a class="btn btn-dark btn-sm text-light" type="button"
                                href="https://fontawesome.com/icons?d=gallery">Cheat Sheet</a>
                        </div>
                    </div>
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