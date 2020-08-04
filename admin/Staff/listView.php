<?php
    include_once '../config.php';
    include_once '../headerHTML.php';
    include_once "../function.php";
?>
<div class="container jumbotron bg-white shadow mt-4 col-11">
    <div class="card">
        <div class="card-header bg-white">
            <div class="row">
                <i class="fas fa-user-tie mx-2 my-auto fa-2x"></i>
                <h4 class="ml-2 my-auto">Staffs List</h4>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover table-sm">
                    <thead class="thead-dark">
                        <tr>
                            <th>Title</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Designation</th>
                            <th>E-mail</th>
                            <th>Mobile</th>
                            <th>Direct</th>
                            <th>Type</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                <?php
                    $listSqlStaff='select * from staff';
                    $listResultStaff=mysqli_query($connection,$listSqlStaff);
                    while($listRowStaff=mysqli_fetch_assoc($listResultStaff)){
                ?>            
                        <tr>
                            <td><?php echo $listRowStaff['title'];?></td>
                            <td><?php echo $listRowStaff['first_name'];?></td>
                            <td><?php echo $listRowStaff['last_name'];?></td>
                            <td><?php echo $listRowStaff['designation'];?></td>
                            <td><?php echo $listRowStaff['email'];?></td>
                            <td><?php echo $listRowStaff['mobile'];?></td>
                            <td><?php echo $listRowStaff['direct'];?></td>
                            <td><?php echo $listRowStaff['type'];?></td>
                            <td>
                                <div class="btn-group" role="group">
                                    <a class="btn btn-primary btn-sm" href="editView.php?id=<?php echo $listRowStaff['id'];?>" onclick="return confirm('Are you sure you want to edit this record?')"><i class="fas fa-edit mr-2"></i>Edit</a>
                                    <a class="btn btn-danger btn-sm" href="deleteController.php?id=<?php echo $listRowStaff['id'];?>" onclick="return confirm('Are you sure you want to delete this record?')"><i class="fas fa-trash-alt mr-2"></i>Delete</a>
                                    
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