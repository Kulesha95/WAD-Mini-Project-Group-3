<?php 
include_once '../headerHTML.php';
include_once '../config.php'; 

$gallerySql="select * from gallery_image where id='$_GET[id]'";
$galleryResult=mysqli_query($connection,$gallerySql);
$galleryData=mysqli_fetch_assoc($galleryResult);

?>
<div class="container jumbotron bg-white shadow mt-4 col-11">
    <div class="card">
        <div class="card-header bg-white">
            <div class="row">
                <i class="fas fa-info-circle mx-2 my-auto fa-2x"></i>
                <h4 class="ml-2 my-auto">Edit Gallery Images</h4>
            </div>
        </div>
        <div class="card-body">
        	<form action="editController.php" method="POST" class="m-3" enctype="multipart/form-data">
                <input type="hidden" id="id" name="id" value="<?php echo $_GET['id'];?>">
                <div class="form-group row">
                    <label for="name" class="col-3 col-md-2 col-xl-2">Image</label>
                    <input type="file" class="form-control form-control-sm col-9 col-md-10 col-xl-10" id="path" name="path" value="<?php echo $userData['path'];?>">
                </div>

               <!-- <div class="form-group row">
                    <label for="name" class="col-3 col-md-2 col-xl-2">Type</label>
                    <input type="text" class="form-control form-control-sm col-9 col-md-10 col-xl-10" id="type" name="type" placeholder="Type" value="<?php echo $userData['type'];?>">
                </div>-->
                <div class="form-group row">
                    <label for="name" class="col-3 col-md-2 col-xl-1">Type</label>
                    <select class="form-control form-control-sm col-9 col-md-10 col-xl-11" id="type" name="type" value="<?php echo $amenityData['type'];?>">
                        <option value="" Selected Disabled>Select Type</option>
                        <option value="Connectivity" <?php if($galleryData['type']=="Interior"){echo "selected";}?>>Exterior</option>
                        <option value="Services" <?php if($galleryData['type']=="Exterior"){echo "selected";}?>>Interior</option>
                        <option value="Extras" <?php if($galleryData['type']=="Places Near By"){echo "selected";}?>>Places Near By</option>
                    </select>
                </div>

                <div class="form-group row">
                    <label for="name" class="col-3 col-md-2 col-xl-2">Location Name</label>
                    <input type="text" class="form-control form-control-sm col-9 col-md-10 col-xl-10" id="locatin_name" name="locatin_name" placeholder="Location Name" value="<?php echo $userData['locatin_name'];?>">
                </div>

                <div class="form-group row">
                    <label for="name" class="col-3 col-md-2 col-xl-2">Description</label>
                    <input type="text" class="form-control form-control-sm col-9 col-md-10 col-xl-10" id="description" name="description" placeholder="Description" value="<?php echo $userData['description'];?>">
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