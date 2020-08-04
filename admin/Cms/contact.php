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
                <h4 class="ml-2 my-auto">Contact Page</h4>
            </div>
        </div>
        <div class="card-body">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="setting-tab" data-toggle="tab" href="#setting" role="tab"
                        aria-controls="setting" aria-selected="true"><i class="fas fa-cog mr-2"></i><span
                            class="d-none d-sm-inline-block">Settings</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="image-tab" data-toggle="tab" href="#image" role="tab" aria-controls="image"
                        aria-selected="false"><i class="fas fa-images mr-2"></i><span
                            class="d-none d-sm-inline-block">Images</span></a>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <!-- Page settings -->
                <div class="tab-pane fade show active" id="setting" role="tabpanel" aria-labelledby="setting-tab">
                    <form action="addController.php" method="POST" class="m-3" enctype="multipart/form-data">
                        <!-- Page name -->
                        <input type="hidden" name="page" id="page" value="contact">
                        <!-- Group code for multiple insertion filters -->
                        <input type="hidden" name="group_code" id="group_code" value="contact_details">
                        <!-- Settings save mode -->
                        <input type="hidden" name="type" id="type" value="single">
                        <div class="form-group row">
                            <label for="number" class="col-12 col-md-2">Number</label>
                            <input type="text" class="form-control form-control-sm col-12 col-md-10" id="contactNumber"
                                name="contactNumber" placeholder="Contact Number"
                                value="<?php echo cmsGetSingle("contactNumber", "contact"); ?>">
                        </div>
                        <div class="form-group row">
                            <label for="addressLine1" class="col-12 col-md-2">Address Line 1</label>
                            <input type="text" class="form-control form-control-sm col-12 col-md-10" id="addressLine1"
                                name="addressLine1" placeholder="Address Line 1"
                                value="<?php echo cmsGetSingle("addressLine1", "contact"); ?>">
                        </div>
                        <div class="form-group row">
                            <label for="addressLine2" class="col-12 col-md-2">Address Line 2</label>
                            <input type="text" class="form-control form-control-sm col-12 col-md-10" id="addressLine2"
                                name="addressLine2" placeholder="Address Line 2"
                                value="<?php echo cmsGetSingle("addressLine2", "contact"); ?>">
                        </div>
                        <div class="form-group row">
                            <label for="website" class="col-12 col-md-2">Website</label>
                            <input type="text" class="form-control form-control-sm col-12 col-md-10" id="website"
                                name="website" placeholder="Website"
                                value="<?php echo cmsGetSingle("website", "contact"); ?>">
                        </div>
                        <div class="form-group row">
                            <label for="email" class="col-12 col-md-2">E-Mail</label>
                            <input type="text" class="form-control form-control-sm col-12 col-md-10" id="email"
                                name="email" placeholder="E-Mail"
                                value="<?php echo cmsGetSingle("email", "contact"); ?>">
                        </div>
                        <div class="form-group row">
                            <label for="googleMapSrc" class="col-12 col-md-2">Google Map</label>
                            <input type="text" class="form-control form-control-sm col-12 col-md-10" id="googleMapSrc"
                                name="googleMapSrc" placeholder="Google Map (SRC)"
                                value="<?php echo cmsGetSingle("googleMapSrc", "contact"); ?>">
                        </div>
                        <div class="form-group row d-flex">
                            <button name="Save" value="Save" type="submit" class="btn btn-primary btn-sm ml-auto"><i
                                    class="fas fa-save mr-2"></i>Save</button>
                        </div>
                    </form>
                </div>
                <!-- Page images settings -->
                <div class="tab-pane fade" id="image" role="tabpanel" aria-labelledby="image-tab">
                    <form action="addImageController.php" method="POST" class="m-3" enctype="multipart/form-data">
                        <!-- Page name -->
                        <input type="hidden" name="page" id="page" value="contact">
                        <!-- Group code for multiple insertion filters -->
                        <input type="hidden" name="group_code" id="group_code" value="contact_details">
                        <!-- Settings save mode -->
                        <input type="hidden" name="type" id="type" value="single">
                        <!-- Key for save the settings in to the database -->
                        <input type="hidden" name="key" id="key" value="writeUsImage">
                        <div class="form-group row">
                            <label for="number" class="col-12 col-md-2">Write Us Image</label>
                            <div class="custom-file col-12 col-md-10">
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
// Display the selected file name in the file input box
$(".custom-file-input").on("change", function() {
    var fileName = $(this).val().split("\\").pop();
    $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
});
</script>
<?php
include_once '../footerHTML.php';
?>