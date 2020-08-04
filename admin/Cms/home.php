<?php
include_once '../headerHTML.php';
include_once '../config.php';
include_once '../function.php';
?>
<div class="container jumbotron bg-white shadow mt-4 col-11">
    <div class="card">
        <div class="card-header bg-white">
            <div class="row">
                <i class="fas fa-home mx-2 my-auto fa-2x"></i>
                <h4 class="ml-2 my-auto">Home Page Settings</h4>
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
                <!-- Page Settings Area Start -->
                <div class="tab-pane fade show active" id="setting" role="tabpanel" aria-labelledby="setting-tab">
                    <form action="addController.php" method="POST" class="m-3" enctype="multipart/form-data">
                        <input type="hidden" name="page" id="page" value="home">
                        <input type="hidden" name="group_code" id="group_code" value="main_details">
                        <input type="hidden" name="type" id="type" value="single">
                        <div class="form-group row">
                            <label for="icon" class="col-4 col-md-2">Welcome Text</label>
                            <input type="text" class="form-control form-control-sm col-8 col-md-10" id="welcomeText"
                                name="welcomeText" placeholder="Welcome Text" value="<?php echo cmsGetSingle("welcomeText", "home"); ?>">
                        </div>
                        <div class="form-group row">
                            <label for="roomDescription" class="col-4 col-md-2">Rooms Area Description</label>
                            <textarea type="text" class="form-control form-control-sm col-8 col-md-10" id="roomDescription"
                                name="roomDescription" placeholder="Rooms Area Description"><?php echo cmsGetSingle("roomDescription", "home");?></textarea>
                        </div>
                        <div class="form-group row">
                            <label for="quote" class="col-4 col-md-2">Quote</label>
                            <input type="text" class="form-control form-control-sm col-8 col-md-10" id="quote"
                                name="quote" placeholder="Quote" value="<?php echo cmsGetSingle("quote", "home"); ?>">
                        </div>
                        <div class="form-group row">
                            <label for="quoteBy" class="col-4 col-md-2">Quote By</label>
                            <input type="text" class="form-control form-control-sm col-8 col-md-10" id="quoteBy"
                                name="quoteBy" placeholder="Quote By" value="<?php echo cmsGetSingle("quoteBy", "home"); ?>">
                        </div>
                        <div class="form-group row d-flex">
                            <button name="Save" value="Save" type="submit" class="btn btn-primary btn-sm ml-auto"><i
                                    class="fas fa-save mr-2"></i>Save</button>
                        </div>
                    </form>
                    <hr>
                    <form action="addController.php" method="POST" class="m-3" enctype="multipart/form-data">
                        <input type="hidden" name="page" id="page" value="home">
                        <input type="hidden" name="group_code" id="group_code" value="contact_facilitiesdetails">
                        <input type="hidden" name="type" id="type" value="multiple">
                        <div class="form-group row">
                            <label for="name" class="col-4 col-md-2">Icon</label>
                            <input type="text" class="form-control form-control-sm col-5 col-md-8" id="icon" name="icon"
                                placeholder="Icon">
                            <a href="https://fontawesome.com/icons?d=gallery"
                                class="btn btn-primary btn-sm ml-auto  col-3 col-md-2" type="button"
                                target="_blank">Cheat Sheet</a>
                        </div>
                        <div class="form-group row">
                            <label for="facility" class="col-4 col-md-2">Facility</label>
                            <input type="text" class="form-control form-control-sm col-8 col-md-10" id="facility"
                                name="facility" placeholder="Facility">
                        </div>
                        <div class="form-group row">
                            <label for="description" class="col-4 col-md-2">Description</label>
                            <textarea type="text" class="form-control form-control-sm col-8 col-md-10" id="description"
                                name="description" placeholder="Description"></textarea>
                        </div>
                        <div class="form-group row d-flex">
                            <button name="Save" value="Save" type="submit" class="btn btn-primary btn-sm ml-auto"><i
                                    class="fas fa-save mr-2"></i>Save</button>
                        </div>
                    </form>
                    <div class="row">
                        <?php $groupCodes = cmsGroupCodes("icon", "home");
foreach ($groupCodes as $groupCode) {
    ?>
                        <div class="col-12 col-md-4 mx-auto mt-4">
                            <div class="card h-100">
                                <div class="card-header d-flex">
                                    <a href="deleteController.php?id=<?php echo cmsGetMultipleId("icon", "home", $groupCode) ?>"
                                        class="text-dark no-deco ml-auto"><i class="fas fa-times"></i></a>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <span class="fa-stack fa-4x text-dark mx-auto">
                                            <i class="fa fa-circle fa-stack-2x icon-background"></i>
                                            <i
                                                class="<?php echo cmsGetMultiple("icon", "home", $groupCode); ?> fa-stack-1x text-light"></i>
                                        </span>
                                    </div>
                                    <div class="row">
                                        <h2 class="mx-auto">
                                            <?php echo cmsGetMultiple("facility", "home", $groupCode); ?></h2>
                                    </div>
                                    <div class="row">
                                        <span
                                            class="mx-auto text-justify"><?php echo nl2br(cmsGetMultiple("description", "home", $groupCode)); ?></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
}
?>
                    </div>
                </div>
                <!-- Page Settings Area End -->
                
                <!-- Page Image Settings Area Start -->
                <div class="tab-pane fade" id="image" role="tabpanel" aria-labelledby="image-tab">
                    <form action="addImageController.php" method="POST" class="m-3" enctype="multipart/form-data">
                        <input type="hidden" name="page" id="page" value="home">
                        <input type="hidden" name="group_code" id="group_code" value="banner">
                        <input type="hidden" name="type" id="type" value="single">
                        <input type="hidden" name="key" id="key" value="bannerImage">
                        <div class="form-group row">
                            <label for="number" class="col-4 col-md-2">Banner Image</label>
                            <div class="custom-file col-8 col-md-10">
                                <input type="file" class="custom-file-input" id="image" name="image" required>
                                <label class="custom-file-label" for="image">Choose file</label>
                            </div>
                        </div>
                        <div class="form-group row d-flex">
                            <button name="Save" value="Save" type="submit" class="btn btn-primary btn-sm ml-auto"><i
                                    class="fas fa-save mr-2"></i>Save</button>
                        </div>
                    </form>
                    <hr>
                    <form action="addImageController.php" method="POST" class="m-3" enctype="multipart/form-data">
                        <input type="hidden" name="page" id="page" value="home">
                        <input type="hidden" name="group_code" id="group_code" value="rooms">
                        <input type="hidden" name="type" id="type" value="single">
                        <input type="hidden" name="key" id="key" value="singleRoomsImage">
                        <div class="form-group row">
                            <label for="number" class="col-4 col-md-2">Single Rooms Image</label>
                            <div class="custom-file col-8 col-md-10">
                                <input type="file" class="custom-file-input" id="image" name="image" required>
                                <label class="custom-file-label" for="image">Choose file</label>
                            </div>
                        </div>
                        <div class="form-group row d-flex">
                            <button name="Save" value="Save" type="submit" class="btn btn-primary btn-sm ml-auto"><i
                                    class="fas fa-save mr-2"></i>Save</button>
                        </div>
                    </form>
                    <hr>
                    <form action="addImageController.php" method="POST" class="m-3" enctype="multipart/form-data">
                        <input type="hidden" name="page" id="page" value="home">
                        <input type="hidden" name="group_code" id="group_code" value="rooms">
                        <input type="hidden" name="type" id="type" value="single">
                        <input type="hidden" name="key" id="key" value="doubleRoomsImage">
                        <div class="form-group row">
                            <label for="number" class="col-4 col-md-2">Double Rooms Image</label>
                            <div class="custom-file col-8 col-md-10">
                                <input type="file" class="custom-file-input" id="image" name="image" required>
                                <label class="custom-file-label" for="image">Choose file</label>
                            </div>
                        </div>
                        <div class="form-group row d-flex">
                            <button name="Save" value="Save" type="submit" class="btn btn-primary btn-sm ml-auto"><i
                                    class="fas fa-save mr-2"></i>Save</button>
                        </div>
                    </form>
                    <hr>
                    <form action="addImageController.php" method="POST" class="m-3" enctype="multipart/form-data">
                        <input type="hidden" name="page" id="page" value="home">
                        <input type="hidden" name="group_code" id="group_code" value="rooms">
                        <input type="hidden" name="type" id="type" value="single">
                        <input type="hidden" name="key" id="key" value="tripleRoomsImage">
                        <div class="form-group row">
                            <label for="number" class="col-4 col-md-2">Triple Rooms Image</label>
                            <div class="custom-file col-8 col-md-10">
                                <input type="file" class="custom-file-input" id="image" name="image" required>
                                <label class="custom-file-label" for="image">Choose file</label>
                            </div>
                        </div>
                        <div class="form-group row d-flex">
                            <button name="Save" value="Save" type="submit" class="btn btn-primary btn-sm ml-auto"><i
                                    class="fas fa-save mr-2"></i>Save</button>
                        </div>
                    </form>                   
                    <hr>
                    <form action="addImageController.php" method="POST" class="m-3" enctype="multipart/form-data">
                        <input type="hidden" name="page" id="page" value="home">
                        <input type="hidden" name="group_code" id="group_code" value="quote">
                        <input type="hidden" name="type" id="type" value="single">
                        <input type="hidden" name="key" id="key" value="quoteImage">
                        <div class="form-group row">
                            <label for="number" class="col-4 col-md-2">Quote Image</label>
                            <div class="custom-file col-8 col-md-10">
                                <input type="file" class="custom-file-input" id="image" name="image" required>
                                <label class="custom-file-label" for="image">Choose file</label>
                            </div>
                        </div>
                        <div class="form-group row d-flex">
                            <button name="Save" value="Save" type="submit" class="btn btn-primary btn-sm ml-auto"><i
                                    class="fas fa-save mr-2"></i>Save</button>
                        </div>
                    </form>
                    <hr>
                    <form action="addImageController.php" method="POST" class="m-3" enctype="multipart/form-data">
                        <input type="hidden" name="page" id="page" value="home">
                        <input type="hidden" name="group_code" id="group_code" value="logo">
                        <input type="hidden" name="type" id="type" value="single">
                        <input type="hidden" name="key" id="key" value="logo">
                        <div class="form-group row">
                            <label for="number" class="col-4 col-md-2">Logo</label>
                            <div class="custom-file col-8 col-md-10">
                                <input type="file" class="custom-file-input" id="image" name="image" required>
                                <label class="custom-file-label" for="image">Choose file</label>
                            </div>
                        </div>
                        <div class="form-group row d-flex">
                            <button name="Save" value="Save" type="submit" class="btn btn-primary btn-sm ml-auto"><i
                                    class="fas fa-save mr-2"></i>Save</button>
                        </div>
                    </form>
                </div>                
                <!-- Page Image Settings Area End -->
            </div>
        </div>
    </div>
</div>
<script>
// Display selected file name in the file input
$(".custom-file-input").on("change", function() {
    var fileName = $(this).val().split("\\").pop();
    $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
});
</script>
<?php
include_once '../footerHTML.php';
?>