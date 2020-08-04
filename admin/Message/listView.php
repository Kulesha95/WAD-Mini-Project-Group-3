<?php
    include_once '../config.php';
    include_once '../headerHTML.php';
    include_once "../function.php";
?>
<!-- List down all contact messages -->
<div class="container jumbotron bg-white shadow mt-4 col-11">
    <div class="card">
        <div class="card-header bg-white">
            <div class="row">
                <i class="fas fa-envelope mx-2 my-auto fa-2x"></i>
                <h4 class="ml-2 my-auto">Messages List</h4>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover table-sm">
                    <thead class="thead-dark">
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Message</th>
                            <th>Subject</th>
                            <th>User</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                <?php
                    $listSql='select * from `Message`';
                    $listResult=mysqli_query($connection,$listSql);
                    while($listRow=mysqli_fetch_assoc($listResult)){
                ?>            
                        <tr>
                            <td><?php echo $listRow['name'];?></td>
                            <td><?php echo $listRow['email'];?></td>
                            <td><?php echo $listRow['message'];?></td>
                            <td><?php echo $listRow['subject'];?></td>
                            <td><?php echo user($listRow['user_id']);?></td>
                            <td>
                                <div class="btn-group" role="group">
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