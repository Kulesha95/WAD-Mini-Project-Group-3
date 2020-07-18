<?php 
include_once '../headerHTML.php';
include_once '../config.php'; 
?>
<div class="container jumbotron bg-white shadow mt-4 col-11">
    <div class="card">
        <div class="card-header bg-white">
            <div class="row">
                <i class="fas fa-info-circle mx-2 my-auto fa-2x"></i>
                <h4 class="ml-2 my-auto">Room Feature Management</h4>
            </div>
        </div>
        <div class="card-body">
            <form action="roomfeatureController.php" method="POST" class="m-3" enctype="multipart/form-data">
                <input type="hidden" id="id" name="id" value="<?php if(isset($_GET['id'])){ echo $_GET['id'];}?>">
                <div class="row">
                    <?php
                        $featureSql="select * from feature";
                        $featureResult=mysqli_query($connection,$featureSql);
                        while($featureData=mysqli_fetch_assoc($featureResult)){
                            $roomfeatureSql="select * from room_has_feature WHERE feature_id='$featureData[id]'and room_id='$_GET[id]'";
                            $roomfeatureResult=mysqli_query($connection,$roomfeatureSql);
                            if($roomfeatureData=mysqli_fetch_assoc($roomfeatureResult)){
                                $checked="checked";
                            }else{
                                $checked="";
                            }
                            ?>
                            <div class="custom-control custom-checkbox col-12 col-md-3">
                                <input type="checkbox" value="1" class="custom-control-input" id="feature<?php echo $featureData['id']?>" name="feature<?php echo $featureData['id']?>" <?php echo $checked ?>>
                                <label class="custom-control-label" for="feature<?php echo $featureData['id']?>"><?php echo $featureData['feature']?></label>
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