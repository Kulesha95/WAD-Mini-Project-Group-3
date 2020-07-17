<?php 
include_once '../headerHTML.php';
include_once '../config.php'; 

$amenitySql="select * from amenity where id='$_GET[id]'";
$amenityResult=mysqli_query($connection,$amenitySql);
$amenityData=mysqli_fetch_assoc($amenityResult);

?>
<div class="container jumbotron bg-white shadow mt-4 col-11">
    <div class="card">
        <div class="card-header bg-white">
            <div class="row">
                <i class="fas fa-info-circle mx-2 my-auto fa-2x"></i>
                <h4 class="ml-2 my-auto">Edit Amenity</h4>
            </div>
        </div>
        <div class="card-body">
            <form action="editController.php" method="POST" class="m-3" enctype="multipart/form-data">
                <input type="hidden" id="id" name="id" value="<?php echo $_GET['id'];?>">
                <div class="form-group row">
                    <label for="name" class="col-3 col-md-2 col-xl-1">Amenity</label>
                    <input type="text" class="form-control form-control-sm col-9 col-md-10 col-xl-11" id="amenity" name="amenity" placeholder="Amenity" value="<?php echo $amenityData['amenity'];?>">
                </div>
                <div class="form-group row">
                    <label for="code" class="col-3 col-md-2 col-xl-1">Type</label>
                    <input type="text" class="form-control form-control-sm col-9 col-md-10 col-xl-11" id="type" name="type" placeholder="Type" value="<?php echo $amenityData['type'];?>">
                </div>
                <div class="form-group row">
                    <label for="code" class="col-3 col-md-2 col-xl-1">Icon</label>
                    <input type="text" class="form-control form-control-sm col-6 col-md-8 col-xl-10" id="icon" name="icon" placeholder="Icon" value="<?php echo $amenityData['icon'];?>">
                    <a href="https://fontawesome.com/icons?d=gallery" class="btn btn-primary btn-sm ml-auto col-3 col-md-2 col-xl-1" type="button" target="_blank">Search</a>
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