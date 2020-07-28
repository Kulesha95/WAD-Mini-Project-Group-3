<?php 
include_once '../headerHTML.php';
include_once '../config.php'; 

$menuSql="select * from menu_item where id='$_GET[id]'";
$menuResult=mysqli_query($connection,$menuSql);
$menuData=mysqli_fetch_assoc($menuResult);

?>
<div class="container jumbotron bg-white shadow mt-4 col-11">
    <div class="card">
        <div class="card-header bg-white">
            <div class="row">
                <i class="fas fa-info-circle mx-2 my-auto fa-2x"></i>
                <h4 class="ml-2 my-auto">Edit Menu Item</h4>
            </div>
        </div>
        <div class="card-body">
            <form action="editController.php" method="POST" class="m-3" enctype="multipart/form-data">
                <input type="hidden" id="id" name="id" value="<?php echo $_GET['id'];?>">
                <div class="form-group row">
                    <label for="name" class="col-4 col-md-3 col-xl-2">Food Name</label>
                    <input type="text" class="form-control form-control-sm col-8 col-md-9 col-xl-10" id="name"
                        name="name" placeholder="Food Name" value="<?php echo $menuData['name'];?>">
                </div>
                <div class="form-group row">
                    <label for="name" class="col-4 col-md-3 col-xl-2">Description</label>
                    <textarea class="form-control form-control-sm col-8 col-md-9 col-xl-10" id="description"
                        name="description" placeholder="Description"><?php echo $menuData['description'];?></textarea>
                </div>
                <div class="form-group row">
                    <label for="name" class="col-4 col-md-3 col-xl-2">Price</label>
                    <input type="text" class="form-control form-control-sm col-8 col-md-9 col-xl-10" id="price"
                        name="price" placeholder="price" value="<?php echo $menuData['price'];?>">
                </div>
                <div class="form-group row">
                    <label for="name" class="col-4 col-md-4 col-xl-2">Image</label>
                    <div class="custom-file mb-3 col-8 col-md-8 col-xl-10">
                        <input type="file" class="custom-file-input" id="image" name="image">
                        <label class="custom-file-label" for="customFile">Choose file</label>
                    </div>
                </div>


                <div class="form-group row">
                    <label for="name" class="col-4 col-md-3 col-xl-2">Type</label>
                    <select class="form-control form-control-sm col-8 col-md-9 col-xl-10" id="type" name="type"
                        value="<?php echo $menuData['type'];?>">
                        <option value="" Selected Disabled>Select</option>
                        <option value="Breakfast" <?php if($menuData['type']=="Breakfast"){echo "selected";}?>>Breakfast
                        </option>
                        <option value="Lunch" <?php if($menuData['type']=="Lunch"){echo "selected";}?>>Lunch</option>
                        <option value="Dinner" <?php if($menuData['type']=="Dinner"){echo "selected";}?>>Dinner</option>
                    </select>
                </div>
                <div class="form-group row d-flex">
                    <button name="Edit" value="Edit" type="submit" class="btn btn-primary btn-sm ml-auto"><i
                            class="fas fa-edit mr-2"></i>Edit</button>
                </div>
            </form>
        </div>
    </div>
</div>
<?php
    include_once '../footerHTML.php';
?>