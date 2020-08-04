<?php
    include_once '../config.php';
    include_once '../headerHTML.php';
    include_once "../function.php";
?>
<!-- List down all reviews -->
<div class="container jumbotron bg-white shadow mt-4 col-11">
    <div class="card">
        <div class="card-header bg-white">
            <div class="row">
                <i class="fas fa-award mx-2 my-auto fa-2x"></i>
                <h4 class="ml-2 my-auto">Reviews List</h4>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover table-sm">
                    <thead class="thead-dark">
                        <tr>
                            <th>User</th>
                            <th>Rate</th>
                            <th>Review</th>
                            <th>Date</th>
                            <th>Time</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                    $listSql='select * from `review`';
                    $listResult=mysqli_query($connection,$listSql);
                    while($listRow=mysqli_fetch_assoc($listResult)){
                ?>
                        <tr>
                            <td>
                                <img class="rounded-circle profile-picture"
                                    src="../../<?php echo userImage($listRow['user_id']);?>"
                                    alt="User Profile Picture"><br>
                                <?php echo user($listRow['user_id']);?>
                            </td>
                            <td width="120px;">
                                <div class="text-warning">
                                    <?php
                                //  Display stars according to the rating value  
                                   $ratingValue=$listRow['rate'];   
                                   for($i=1;$i<=5;$i++){
                                        if($ratingValue-$i>=0){
                                            ?>
                                    <i class="fas fa-star"></i>

                                    <?php
                                        }else{
                                            ?>
                                    <i class="far fa-star"></i>
                                    <?php
                                        }
                                    }
                                   ?>
                                </div>
                            </td>
                            <td><?php echo $listRow['review'];?></td>
                            <td><?php echo $listRow['date'];?></td>
                            <td><?php echo $listRow['time'];?></td>
                            <td>
                                <div class="btn-group" role="group">
                                    <a class="btn btn-danger btn-sm"
                                        href="deleteController.php?id=<?php echo $listRow['id'];?>"
                                        onclick="return confirm('Are you sure you want to delete this record?')"><i
                                            class="fas fa-trash-alt mr-2"></i>Delete</a>
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