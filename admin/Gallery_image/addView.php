<?php 
include_once '../headerHTML.php';
include_once '../config.php'; 
?>

<div class="container jumbotron bg-white shadow mt-4 col-11">
    <div class="card">
        <div class="card-header bg-white">
            <div class="row">
                <i class="fas fa-info-circle mx-2 my-auto fa-2x"></i>
                <h4 class="ml-2 my-auto">Add Gallery Image</h4>
            </div>
        </div>
        <div class="card-body">
        	<form action="addController.php" method="POST" class="m-3" enctype="multipart/form-data">
                <input type="hidden" id="id" name="id" value="<?php if(isset($_GET['id'])){ echo $_GET['id'];}?>">
                <div class="form-group row">
                    <label for="name" class="col-3 col-md-2 col-xl-2">Image</label>
                    <input type="file" class="form-control form-control-sm col-9 col-md-10 col-xl-10" id="path" name="path">
                </div>

                <!--<div class="form-group row">
                    <label for="name" class="col-3 col-md-2 col-xl-2">Type</label>
                    <input type="text" class="form-control form-control-sm col-9 col-md-10 col-xl-10" id="type" name="type" placeholder="Type">
                </div>-->
                <div class="form-group row">
                    <label for="name" class="col-3 col-md-2 col-xl-2">Type</label>
                    <select class="form-control form-control-sm col-9 col-md-10 col-xl-10" id="type" name="type">
                        <option value="" selected disabled>Select Type</option>
                        <option value="Connectivity">Interior</option>
                        <option value="Services">Exterior</option>
                        <option value="Extras">Places Near By</option>
                    </select>
                </div>    

                <div class="form-group row">
                    <label for="name" class="col-3 col-md-2 col-xl-2">Location Name</label>
                    <input type="text" class="form-control form-control-sm col-9 col-md-10 col-xl-10" id="locatin_name" name="locatin_name" placeholder="Location Name">
                </div>

                <div class="form-group row">
                    <label for="name" class="col-3 col-md-2 col-xl-2">Description</label>
                    <input type="text" class="form-control form-control-sm col-9 col-md-10 col-xl-10" id="description" name="description" placeholder="Description">
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