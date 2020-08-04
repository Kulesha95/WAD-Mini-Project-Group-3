<?php 
include_once '../headerHTML.php';
include_once '../config.php'; 
?>
<div class="container jumbotron bg-white shadow mt-4 col-11">
    <div class="card">
        <div class="card-header bg-white">
            <div class="row">
                <i class="fas fa-wifi mx-2 my-auto fa-2x"></i>
                <h4 class="ml-2 my-auto">Room Amenities</h4>
            </div>
        </div>
        <div class="card-body">
            <form action="roomAmenityController.php" method="POST" class="m-3" enctype="multipart/form-data">
                <input type="hidden" id="id" name="id" value="<?php if(isset($_GET['id'])){ echo $_GET['id'];}?>">
                <div class="row">
                    <?php
                        $amenitySql="select * from amenity";
                        $amenityResult=mysqli_query($connection,$amenitySql);
                        while($amenityData=mysqli_fetch_assoc($amenityResult)){
                            $roomAmenitySql="select * from room_has_amenity WHERE amenity_id='$amenityData[id]'and room_id='$_GET[id]'";
                            $roomAmenityResult=mysqli_query($connection,$roomAmenitySql);
                            if($roomAmenityData=mysqli_fetch_assoc($roomAmenityResult)){
                                $checked="checked";
                            }else{
                                $checked="";
                            }
                            ?>
                            <div class="custom-control custom-checkbox col-12 col-md-3">
                                <input type="checkbox" value="1" class="custom-control-input" id="amenity<?php echo $amenityData['id']?>" name="amenity<?php echo $amenityData['id']?>" <?php echo $checked ?>>
                                <label class="custom-control-label" for="amenity<?php echo $amenityData['id']?>"><?php echo $amenityData['amenity']?></label>
                            </div>
                            <?php
                        }
                    ?>
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