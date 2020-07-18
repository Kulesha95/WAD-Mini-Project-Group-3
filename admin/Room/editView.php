<?php 
include_once '../headerHTML.php';
include_once '../config.php'; 

$roomSql="select * from room where id='$_GET[id]'";
$roomResult=mysqli_query($connection,$roomSql);
$roomData=mysqli_fetch_assoc($roomResult);

?>
<div class="container jumbotron bg-white shadow mt-4 col-11">
    <div class="card">
        <div class="card-header bg-white">
            <div class="row">
                <i class="fas fa-info-circle mx-2 my-auto fa-2x"></i>
                <h4 class="ml-2 my-auto">Edit Room</h4>
            </div>
        </div>
        <div class="card-body">
            <form action="editController.php" method="POST" class="m-3" enctype="multipart/form-data">
                <input type="hidden" id="id" name="id" value="<?php echo $_GET['id'];?>">
                <div class="form-group row">
                    <label for="name" class="col-4 col-md-3 col-xl-2">Room Name</label>
                    <input type="text" class="form-control form-control-sm col-8 col-md-9 col-xl-10" id="name" name="name" placeholder="Room Name" value="<?php echo $roomData['name'];?>">
                </div>
                <div class="form-group row">
                    <label for="name" class="col-4 col-md-3 col-xl-2">Description</label>
                    <textarea class="form-control form-control-sm col-8 col-md-9 col-xl-10" id="description" name="description" placeholder="Description" value="<?php echo $roomData['description'];?>"></textarea>
                </div>
                <div class="form-group row">
                    <label for="name" class="col-4 col-md-3 col-xl-2">Room Size</label>
                    <input type="text" class="form-control form-control-sm col-8 col-md-9 col-xl-10" id="size" name="size" placeholder="Room Size" value="<?php echo $roomData['size'];?>">
                </div>
                <div class="form-group row">
                    <label for="name" class="col-4 col-md-3 col-xl-2">Bed Type</label>
                    <input type="text" class="form-control form-control-sm col-8 col-md-9 col-xl-10" id="bed_type" name="bed_type" placeholder="Bed Type" value="<?php echo $roomData['bed_type'];?>">
                </div>
                <div class="form-group row">
                    <label for="name" class="col-4 col-md-3 col-xl-2">Ideal For</label>
                    <input type="text" class="form-control form-control-sm col-8 col-md-9 col-xl-10" id="ideal_for" name="ideal_for" placeholder="Ideal For" value="<?php echo $roomData['ideal_for'];?>">
                </div>
                <div class="form-group row">
                    <label for="name" class="col-4 col-md-3 col-xl-2">View</label>
                    <input type="text" class="form-control form-control-sm col-8 col-md-9 col-xl-10" id="view" name="view" placeholder="View" value="<?php echo $roomData['view'];?>">
                </div>
                <div class="form-group row">
                    <label for="name" class="col-4 col-md-3 col-xl-2">Inter Connections</label>
                    <select class="form-control form-control-sm col-8 col-md-9 col-xl-10" id="inter_connections" name="inter_connections" value="<?php echo $roomData['inter_connections'];?>">
                        <option value="Available">Available</option>
                        <option value="Not Available">Not Available</option>
                    </select>
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