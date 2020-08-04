<?php
    include_once '../config.php';
    include_once '../headerHTML.php';
    include_once "../function.php";
?>
<div class="container jumbotron bg-white shadow mt-4 col-11">
    <div class="card">
        <div class="card-header bg-white">
            <div class="row">
                <i class="fas fa-user mx-2 my-auto fa-2x"></i>
                <h4 class="ml-2 my-auto">Users List</h4>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover table-sm">
                    <thead class="thead-dark">
                        <tr>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Username</th>
                            <th>Password</th>
                            <th>Email</th>
                            <th>Image</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                    $listSql='select * from user';
                    $listResult=mysqli_query($connection,$listSql);
                    while($listRow=mysqli_fetch_assoc($listResult)){
                ?>
                        <tr>
                            <td><?php echo $listRow['first_name'];?></td>
                            <td><?php echo $listRow['last_name'];?></td>
                            <td><?php echo $listRow['username'];?></td>
                            <td><?php echo $listRow['password'];?></td>
                            <td><?php echo $listRow['email'];?></td>
                            <td class="d-flex">
                                <a href="../../<?php echo $listRow['image'];?>" target="_blank" class="mx-auto">
                                    <img src="../../<?php echo $listRow['image'];?>" alt="Image" class="rounded-circle"
                                        style="width:50px; height:50px; object-fit:cover;">
                                </a>
                            </td>

                            <td>
                                <div class="btn-group" role="group">
                                    <a class="btn btn-primary btn-sm"
                                        href="editView.php?id=<?php echo $listRow['id'];?>"
                                        onclick="return confirm('Are you sure you want to edit this record?')"><i
                                            class="fas fa-edit mr-2"></i>Edit</a>
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