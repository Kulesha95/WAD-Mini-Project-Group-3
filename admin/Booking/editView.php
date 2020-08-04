<?php 
include_once '../headerHTML.php';
include_once '../config.php'; 

$bookingSql="select * from booking where id='$_GET[id]'";
$bookingResult=mysqli_query($connection,$bookingSql);
$bookingData=mysqli_fetch_assoc($bookingResult);

?>
<div class="container jumbotron bg-white shadow mt-4 col-11">
    <div class="card">
        <div class="card-header bg-white">
            <div class="row">
                <i class="fas fa-hotel mx-2 my-auto fa-2x"></i>
                <h4 class="ml-2 my-auto">Edit Booking</h4>
            </div>
        </div>
        <div class="card-body">
            <form action="editController.php" method="POST" class="m-3" enctype="multipart/form-data">
                <input type="hidden" id="id" name="id" value="<?php echo $_GET['id'];?>">
                <input type="hidden" id="user_id" name="user_id" value="<?php echo $bookingData['user_id'];?>">
                <input type="hidden" id="room_id" name="room_id" value="<?php echo $bookingData['room_id'];?>">
                <div class="form-group row">
                    <label for="name" class="col-3 col-md-2 col-xl-1">From</label>
                    <input type="date" class="form-control form-control-sm col-9 col-md-10 col-xl-11" id="from" name="from" placeholder="Date From" value="<?php echo $bookingData['from'];?>" required>
                </div>
                <div class="form-group row">
                    <label for="name" class="col-3 col-md-2 col-xl-1">To</label>
                    <input type="date" class="form-control form-control-sm col-9 col-md-10 col-xl-11" id="to" name="to" placeholder="Date To" value="<?php echo $bookingData['to'];?>" required>
                </div>
                <div class="form-group row">
                    <label for="name" class="col-3 col-md-2 col-xl-1">Room</label>
                    <select class="form-control form-control-sm col-9 col-md-10 col-xl-11" id="room" name="room" required>
                        <option value="" Selected Disabled>Select Room</option>
                        <?php
                        $listSql='select * from room';
                        $listResult=mysqli_query($connection,$listSql);
                        while($listRow=mysqli_fetch_assoc($listResult)){
                        ?>
                        <option value="<?php $listRow['id']?>" <?php if($bookingData['room_id']==$listRow['id']){echo "selected";}?>><?php echo $listRow['name']?></option>
                        <?php }
                        ?>
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