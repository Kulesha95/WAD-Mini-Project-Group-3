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
                            <label for="description" class="col-3 col-md-2 col-xl-1">About</label>
                            <textarea class="form-control form-control-sm col-9 col-md-10 col-xl-11" id="description"
                                name="description" placeholder="Description"><?php echo cmsGetSingle("description", "about"); ?>
                            </textarea>
                        </div>
                        <div class="form-group row">
                            <label for="vision" class="col-3 col-md-2 col-xl-1">Vision</label>
                            <input type="text" class="form-control form-control-sm col-9 col-md-10 col-xl-11" id="vision"
                                name="vision" placeholder="Vision"
                                value="<?php echo cmsGetSingle("vision", "about"); ?>">
                        </div>
                        <div class="form-group row">
                            <label for="mission" class="col-3 col-md-2 col-xl-1">Mission</label>
                            <input type="text" class="form-control form-control-sm col-9 col-md-10 col-xl-11" id="mission"
                                name="mission" placeholder="Mission"
                                value="<?php echo cmsGetSingle("mission", "about"); ?>">
                        </div>
                        <div class="form-group row d-flex">
                            <button name="Save" value="Save" type="submit" class="btn btn-primary btn-sm ml-auto"><i
                                    class="fas fa-save mr-2"></i>Save</button>
                        </div>
                    </form>
                    <hr>
                    <form action="addController.php" method="POST" class="m-4" enctype="multipart/form-data">
                        <input type="hidden" name="page" id="page" value="about">
                        <input type="hidden" name="group_code" id="group_code" value="icon_area">
                        <input type="hidden" name="type" id="type" value="multiple">
                        <div class="form-group row">
                            <label for="icon" class="col-3 col-md-2 col-xl-1">Icon</label>
                            <input type="text" class="form-control form-control-sm col-6 col-md-8 col-xl-10" id="icon"
                                name="icon" placeholder="Icon">
                            <a href="https://fontawesome.com/icons?d=gallery" class="btn btn-primary btn-sm ml-auto col-3 col-md-2 col-xl-1" type="button" target="_blank">Cheat Sheet</a>
                        </div>
                        <div class="form-group row">
                            <label for="line1" class="col-3 col-md-2 col-xl-1">Line 1</label>
                            <input type="text" class="form-control form-control-sm col-9 col-md-10 col-xl-11" id="line1"
                                name="line1" placeholder="Line 1">
                        </div>
                        <div class="form-group row">
                            <label for="line2" class="col-3 col-md-2 col-xl-1">Line 2</label>
                            <input type="text" class="form-control form-control-sm col-9 col-md-10 col-xl-11" id="line2"
                                name="line2" placeholder="Line 2">
                        </div>
                        <div class="form-group row d-flex">
                            <button name="Save" value="Save" type="submit" class="btn btn-primary btn-sm ml-auto"><i
                                    class="fas fa-save mr-2"></i>Save</button>
                        </div>
                    </form>
                    <div class="row">
                        <?php $groupCodes =cmsGroupCodes("icon","about");
                        foreach($groupCodes as $groupCode) {
                            ?>
                            <div class="col-12 col-md-4 mx-auto mt-4">
                                <div class="card">
                                    <div class="card-header d-flex">
                                        <a href="deleteController.php?id=<?php echo cmsGetMultipleId("icon","about",$groupCode)?>" class="text-dark no-deco ml-auto"><i class="fas fa-times"></i></a>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <span class="fa-stack fa-4x text-dark mx-auto">
                                                <i class="fa fa-circle fa-stack-2x icon-background"></i>
                                                <i class="<?php echo cmsGetMultiple("icon","about",$groupCode);?> fa-stack-1x text-light"></i>
                                            </span>
                                        </div>
                                        <div class="row">
                                            <h2 class="mx-auto"><?php echo cmsGetMultiple("line1","about",$groupCode);?></h2>
                                        </div>
                                        <div class="row">
                                            <h3 class="mx-auto"><?php echo cmsGetMultiple("line2","about",$groupCode);?></h3>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <?php
                        }
                        ?>
                    </div>
                    
                </div>
                <div class="tab-pane fade" id="image" role="tabpanel" aria-labelledby="image-tab">
                    <form action="addImageController.php" method="POST" class="m-3" enctype="multipart/form-data">
                        <input type="hidden" name="page" id="page" value="about">
                        <input type="hidden" name="group_code" id="group_code" value="about_images">
                        <input type="hidden" name="type" id="type" value="single">
                        <input type="hidden" name="key" id="key" value="aboutImage1">
                        <div class="form-group row">
                            <label for="number" class="col-3 col-md-2 col-xl-1">Start</label>
                            <div class="custom-file col-9 col-md-10 col-xl-11">
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
                        <input type="hidden" name="group_code" id="group_code" value="about_images">
                        <input type="hidden" name="type" id="type" value="single">
                        <input type="hidden" name="key" id="key" value="aboutImage2">
                        <div class="form-group row">
                            <label for="number" class="col-3 col-md-2 col-xl-1">Middle</label>
                            <div class="custom-file col-9 col-md-10 col-xl-11">
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