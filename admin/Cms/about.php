<?php
include_once '../headerHTML.php';
include_once '../config.php';
include_once '../function.php';
?>
<div class="container jumbotron bg-white shadow mt-4 col-11">
    <div class="card">
        <div class="card-header bg-white">
            <div class="row">
                <i class="fas fa-phone-alt mx-2 my-auto fa-2x"></i>
                <h4 class="ml-2 my-auto">Aboutus Page Settings</h4>
            </div>
        </div>
        <div class="card-body">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="setting-tab" data-toggle="tab" href="#setting" role="tab"
                        aria-controls="setting" aria-selected="true"><i class="fas fa-cog mr-2"></i>Settings</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="image-tab" data-toggle="tab" href="#image" role="tab" aria-controls="image"
                        aria-selected="false"><i class="fas fa-images mr-2"></i>Images</a>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="setting" role="tabpanel" aria-labelledby="setting-tab">
                    <form action="addController.php" method="POST" class="m-3" enctype="multipart/form-data">
                        <input type="hidden" name="page" id="page" value="about">
                        <input type="hidden" name="group_code" id="group_code" value="about_details">
                        <input type="hidden" name="type" id="type" value="single">
                        <div class="form-group row">
                            <label for="description" class="col-4 col-md-2">Description</label>
                            <textarea class="form-control form-control-sm col-8 col-md-10" id="description"
                                name="description" placeholder="Description"><?php echo cmsGetSingle("description", "about"); ?>
                            </textarea>
                        </div>
                        <div class="form-group row">
                            <label for="vision" class="col-4 col-md-2">Vision</label>
                            <input type="text" class="form-control form-control-sm col-8 col-md-10" id="vision"
                                name="vision" placeholder="Vision"
                                value="<?php echo cmsGetSingle("vision", "about"); ?>">
                        </div>
                        <div class="form-group row">
                            <label for="mission" class="col-4 col-md-2">Mission</label>
                            <input type="text" class="form-control form-control-sm col-8 col-md-10" id="mission"
                                name="mission" placeholder="Mission"
                                value="<?php echo cmsGetSingle("mission", "about"); ?>">
                        </div>
                        <div class="form-group row d-flex">
                            <button name="Save" value="Save" type="submit" class="btn btn-primary btn-sm ml-auto"><i
                                    class="fas fa-save mr-2"></i>Save</button>
                        </div>
                    </form>
                </div>
                <div class="tab-pane fade" id="image" role="tabpanel" aria-labelledby="image-tab">
                    <form action="addImageController.php" method="POST" class="m-3" enctype="multipart/form-data">
                        <input type="hidden" name="page" id="page" value="about">
                        <input type="hidden" name="group_code" id="group_code" value="about_details">
                        <input type="hidden" name="type" id="type" value="single">
                        <input type="hidden" name="key" id="key" value="aboutImage1">
                        <div class="form-group row">
                            <label for="number" class="col-4 col-md-2">Start</label>
                            <div class="custom-file col-8 col-md-10">
                                <input type="file" class="custom-file-input" id="image" name="image">
                                <label class="custom-file-label" for="image">Choose file</label>
                            </div>
                        </div>
                        <div class="form-group row d-flex">
                            <button name="Save" value="Save" type="submit" class="btn btn-primary btn-sm ml-auto"><i
                                    class="fas fa-save mr-2"></i>Save</button>
                        </div>
                    </form>
                    <form action="addImageController.php" method="POST" class="m-3" enctype="multipart/form-data">
                        <input type="hidden" name="page" id="page" value="about">
                        <input type="hidden" name="group_code" id="group_code" value="about_details">
                        <input type="hidden" name="type" id="type" value="single">
                        <input type="hidden" name="key" id="key" value="aboutImage2">
                        <div class="form-group row">
                            <label for="number" class="col-4 col-md-2">Middle</label>
                            <div class="custom-file col-8 col-md-10">
                                <input type="file" class="custom-file-input" id="image" name="image">
                                <label class="custom-file-label" for="image">Choose file</label>
                            </div>
                        </div>
                        <div class="form-group row d-flex">
                            <button name="Save" value="Save" type="submit" class="btn btn-primary btn-sm ml-auto"><i
                                    class="fas fa-save mr-2"></i>Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
$(".custom-file-input").on("change", function() {
    var fileName = $(this).val().split("\\").pop();
    $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
});
</script>
<?php
include_once '../footerHTML.php';
?>