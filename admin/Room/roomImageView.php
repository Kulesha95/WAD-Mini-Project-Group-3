<?php 
include_once '../headerHTML.php';
include_once '../config.php'; 
?>
<div class="container jumbotron bg-white shadow mt-4 col-11">
    <div class="card">
        <div class="card-header bg-white">
            <div class="row">
                <i class="fas fa-info-circle mx-2 my-auto fa-2x"></i>
                <h4 class="ml-2 my-auto">Room Images </h4>
            </div>
        </div>
        <div class="card-body">
            <form action="roomImageController.php" method="POST" class="m-3" enctype="multipart/form-data">
                <input type="hidden" id="id" name="id" value="<?php if(isset($_GET['id'])){ echo $_GET['id'];}?>">
                
                <div class="form-group row">
                    <label for="name" class="col-4 col-md-4 col-xl-2">Room Image</label>
                    <div class="custom-file mb-3 col-8 col-md-8 col-xl-10">
                        <input type="file" class="custom-file-input" id="image" name="image">
                        <label class="custom-file-label" for="customFile">Choose file</label>
                </div>
                </div>
                <div class="form-group row d-flex">
                    <button name="Save" value="Save" type="submit" class="btn btn-primary btn-sm ml-auto"><i class="fas fa-save mr-2"></i>Save</button>
                </div>
            </form>
            <div class="row"> 
            <?php
                $roomSql="select * from room_image WHERE room_id='$_GET[id]'";
                $roomResult=mysqli_query($connection,$roomSql);
                while($roomData=mysqli_fetch_assoc($roomResult)){
                    ?>
                    <div class="col-12 col-md-4 p-3">
                    <img src="../../<?php echo $roomData['path']?>" class"img-fluid" style="height:30vh; width:100%;object-fit:cover">
                    </div>
                    <?php
                }
            ?>
            </div>
        </div>
    </div>
</div>
<?php
    include_once '../footerHTML.php';
?>