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
                <i class="fas fa-images mx-2 my-auto fa-2x"></i>
                <h4 class="ml-2 my-auto">Edit Images</h4>
            </div>
        </div>
        <div class="card-body">
        	<form action="editController.php" method="POST" class="m-3" enctype="multipart/form-data">
                <input type="hidden" id="id" name="id" value="<?php echo $_GET['id'];?>">
                <div class="form-group row">
                    <label for="name" class="col-12 col-md-2 col-xl-2">Image</label>
                    <div class="custom-file form-control-sm col-12 col-md-10 col-xl-10">
                        <input type="file" class="custom-file-input" id="image" name="path">
                        <label class="custom-file-label" for="image">Choose file</label>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="name" class="col-12 col-md-2 col-xl-2">Type</label>
                    <select class="form-control form-control-sm col-12 col-md-10 col-xl-10" id="type" name="type" value="<?php echo $amenityData['type'];?>" required>
                        <option value="" Selected Disabled>Select Type</option>
                        <option value="Interior" <?php if($galleryData['type']=="Interior"){echo "selected";}?>>Interior</option>
                        <option value="Exterior" <?php if($galleryData['type']=="Exterior"){echo "selected";}?>>Exterior</option>
                        <option value="Places Near By" <?php if($galleryData['type']=="Places Near By"){echo "selected";}?>>Places Near By</option>
                    </select>
                </div>

                <div class="form-group row">
                    <label for="name" class="col-12 col-md-2 col-xl-2">Location Name</label>
                    <input type="text" class="form-control form-control-sm col-12 col-md-10 col-xl-10" id="locatin_name" name="locatin_name" placeholder="Location Name" value="<?php echo $galleryData['location_name'];?>">
                </div>

                <div class="form-group row">
                    <label for="name" class="col-12 col-md-2 col-xl-2">Description</label>
                    <input type="text" class="form-control form-control-sm col-12 col-md-10 col-xl-10" id="description" name="description" placeholder="Description" value="<?php echo $galleryData['description'];?>">
                </div>

                <div class="form-group row d-flex">
                    <button name="Save" value="Save" type="submit" class="btn btn-primary btn-sm ml-auto"><i class="fas fa-save mr-2"></i>Save</button>
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