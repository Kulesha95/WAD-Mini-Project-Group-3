<?php 
include_once '../headerHTML.php';
include_once '../config.php'; 

$featureSql="select * from feature where id='$_GET[id]'";
$featureResult=mysqli_query($connection,$featureSql);
$featureData=mysqli_fetch_assoc($featureResult);

?>
<div class="container jumbotron bg-white shadow mt-4 col-11">
    <div class="card">
        <div class="card-header bg-white">
            <div class="row">
                <i class="fas fa-glass-cheers mx-2 my-auto fa-2x"></i>
                <h4 class="ml-2 my-auto">Edit Feature</h4>
            </div>
        </div>
        <div class="card-body">
            <form action="editController.php" method="POST" class="m-3" enctype="multipart/form-data">
                <input type="hidden" id="id" name="id" value="<?php echo $_GET['id'];?>">
                <div class="form-group row">
                    <label for="name" class="col-12 col-md-2 col-xl-1">Feature</label>
                    <input type="text" class="form-control form-control-sm col-12 col-md-10 col-xl-11" id="feature" name="feature" placeholder="Feature" value="<?php echo $featureData['feature'];?>" required>
                </div>
                <div class="form-group row">
                    <label for="name" class="col-12 col-md-2 col-xl-1">Type</label>
                    <select class="form-control form-control-sm col-12 col-md-10 col-xl-11" id="type" name="type" value="<?php echo $featureData['type'];?>" required>
                        <option value="" Selected Disabled>Select Type</option>
                        <option value="Overview" <?php if($featureData['type']=="Overview"){echo "selected";}?>>Overview</option>
                        <option value="Bedroom" <?php if($featureData['type']=="Bedroom"){echo "selected";}?>>Bedroom</option>
                        <option value="Bathroom" <?php if($featureData['type']=="Bathroom"){echo "selected";}?>>Bathroom</option>
                    </select>
                </div>
                <div class="form-group row">
                    <label for="name" class="col-12 col-md-2 col-xl-1">Icon</label>
                    <div class="input-group col-12 col-md-10 col-xl-11 m-0 p-0">
                        <input type="text" class="form-control form-control-sm" id="icon" name="icon"
                            placeholder="Icon" required>
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