<?php
    include_once '../config.php';
    include_once '../headerHTML.php';
    include_once "../function.php";
?>
<!--List down all gallery data -->
<div class="container jumbotron bg-white shadow mt-4 col-11">
    <div class="card">
        <div class="card-header bg-white">
            <div class="row">
                <i class="fas fa-images mx-2 my-auto fa-2x"></i>
                <h4 class="ml-2 my-auto">Images List</h4>
            </div>
        </div>
        <div class="card-body">
        	<div class="table-responsive">
                <table class="table table-striped table-bordered table-hover table-sm">
                    <thead class="thead-dark">
                        <tr>
                            <th>Image</th>
                            <th>Type</th>
                            <th>Location Name</th>
                            <th>Description</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    	<?php
                    $listSql='select * from gallery_image';
                    $listResult=mysqli_query($connection,$listSql);
                    while($listRow=mysqli_fetch_assoc($listResult)){
                        ?>            
                        <tr>
                        <td><a href="../../<?php echo $listRow['path'];?>" target="_blank"><img src="../../<?php echo $listRow['path'];?>" alt="Image" class="img-fluid" style="width:100px;"></a></td>
                            <td><?php echo $listRow['type'];?></td>
                            <td><?php echo $listRow['location_name'];?></td>
                            <td><?php echo $listRow['description'];?></td>

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