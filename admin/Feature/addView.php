<?php 
include_once '../headerHTML.php';
include_once '../config.php'; 
?>
<!--add features-->
<div class="container jumbotron bg-white shadow mt-4 col-11">
    <div class="card">
        <div class="card-header bg-white">
            <div class="row">
                <i class="fas fa-glass-cheers mx-2 my-auto fa-2x"></i>
                <h4 class="ml-2 my-auto">Add Feature</h4>
            </div>
        </div>
        <div class="card-body">
            <form action="addController.php" method="POST" class="m-3" enctype="multipart/form-data">
                <input type="hidden" id="id" name="id" value="<?php if(isset($_GET['id'])){ echo $_GET['id'];}?>">
                <div class="form-group row">
                    <label for="name" class="col-12 col-md-2 col-xl-1">Feature</label>
                    <input type="text" class="form-control form-control-sm col-12 col-md-10 col-xl-11" id="feature" name="feature" placeholder="Feature" required>
                </div>
                <div class="form-group row">
                    <label for="name" class="col-12 col-md-2 col-xl-1">Type</label>
                    <select class="form-control form-control-sm col-12 col-md-10 col-xl-11" id="type" name="type" required>
                        <option value="" selected disabled>Select Type</option>
                        <option value="Overview">Overview</option>
                        <option value="Bedroom">Bedroom</option>
                        <option value="Bathroom">Bathroom</option>
                    </select>
                </div>
                <div class="form-group row">
                    <label for="name" class="col-12 col-md-2 col-xl-1">Icon</label>
                    <div class="input-group col-12 col-md-10 col-xl-11 m-0 p-0">
                        <input type="text" class="form-control form-control-sm" id="icon" name="icon"
                            placeholder="Icon" required>
                        <div class="input-group-append">
                            <a class="btn btn-dark btn-sm text-light" type="button"
                                href="https://fontawesome.com/icons?d=gallery">Cheat Sheet</a>
                        </div>
                    </div>
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