<?php
    include_once '../config.php';
    include_once '../headerHTML.php';
    include_once "../function.php";
?>
<div class="container jumbotron bg-white shadow mt-4 col-11">
    <div class="card">
        <div class="card-header bg-white">
            <div class="row">
                <i class="fas fa-hotel mx-2 my-auto fa-2x"></i>
                <h4 class="ml-2 my-auto">Bookings List</h4>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover table-sm">
                    <thead class="thead-dark">
                        <tr>
                            <th>Room</th>
                            <th>From</th>
                            <th>To</th>
                            <th>User</th>
                            <th>Reserved Date</th>
                            <th>Reserved Time</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                <?php
                    $listSql='select * from booking';
                    $listResult=mysqli_query($connection,$listSql);
                    while($listRow=mysqli_fetch_assoc($listResult)){
                ?>            
                        <tr>
                            <td><?php echo room($listRow['room_id']);?></td>
                            <td><?php echo $listRow['from'];?></td>
                            <td><?php echo $listRow['to'];?></td>
                            <td>
                                <img class="rounded-circle profile-picture"
                                    src="../../<?php echo userImage($listRow['user_id']);?>"
                                    alt="User Profile Picture"><br>
                                <?php echo user($listRow['user_id']);?>
                            </td>
                            <td><?php echo $listRow['reserved_date'];?></td>
                            <td><?php echo $listRow['reserved_time'];?></td>
                            <td>
                                <div class="btn-group" role="group">
                                    <a class="btn btn-primary btn-sm" href="editView.php?id=<?php echo $listRow['id'];?>" onclick="return confirm('Are you sure you want to edit this record?')"><i class="fas fa-edit mr-2"></i>Edit</a>
                                    <a class="btn btn-danger btn-sm" href="deleteController.php?id=<?php echo $listRow['id'];?>" onclick="return confirm('Are you sure you want to delete this record?')"><i class="fas fa-trash-alt mr-2"></i>Delete</a>
                                </div>
                            </td>
                        </tr>
                <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?php
    include_once '../footerHTML.php';
?>