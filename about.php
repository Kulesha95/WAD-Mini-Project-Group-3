<?php
include_once "admin/config.php";
include_once "admin/function.php";
include_once "headerHTML.php";
include_once "navigation.php";
?>

<!-- HTML code goes here -->
<body >
    
 <div class="container bg-white">
        <section class="about_details section-gap">
            <div class="row justify-content-center">
                <span class="justify-content-between text-color-purple mr-3 d-none d-md-block">______</span>
                <h2 class="heading">About Us</h2>
                <span class="justify-content-between text-color-purple ml-3 d-none d-md-block">______</span>
            </div>
        </section>
        <div>
            <div class="mb-5">
                <div class="about_image" style="background-image: url('<?php echo cmsGetSingle("aboutImage1","about");?>')"></div>
            </div>
        </div>
        <div>
            <section class="index section-gap">
                <div>
                    <p id="about_description"><?php echo nl2br(cmsGetSingle("description", "about")); ?></p>
                </div>
                <div class="mt-5">
                    <h5><b>VISION</b></h5>
                    <p id="about_vision"><?php echo cmsGetSingle("vision", "about"); ?></p>

                </div>
                <div class="mt-5">
                    <h5><b>MISSION</b></h5>
                    <p id="about_mission"><?php echo cmsGetSingle("mission", "about"); ?></p>
                </div>
            </section>
            <hr>
            <section class="label section-gap">
                <div class="row">
                <?php $groupCodes = cmsGroupCodes("icon","about");
                    foreach($groupCodes as $groupCode){
                ?>
                    <div class="column col-6 col-md-3">
                        <span class="fa-stack fa-4x text-light">
                            <i class="fa fa-circle fa-stack-2x icon-background"></i>
                            <i class="<?php echo cmsGetMultiple("icon","about",$groupCode);?> fa-stack-1x"></i>
                        </span>
                        <h2 id="about_list"><?php echo cmsGetMultiple("line1","about",$groupCode);?></h2>
                        <h3 id="about_list"><?php echo cmsGetMultiple("line2","about",$groupCode);?></h3>
                    </div>
                <?php
                    }
                    ?>
                    
                </div>
            </section>
            <hr>

            <section class="management_section section-gap">
                <div class="row justify-content-center">
                    <span
                        class="justify-content-between text-color-purple mr-3 d-none d-md-block">______</span>
                    <h2 class="heading">Our Management</h2>
                    <span
                        class="justify-content-between text-color-purple ml-3 d-none d-md-block">______</span>
                </div>
                <div class="row mt-5">
                    <div class="col-12 col-md-6">

                        <h4><b>Chairman</b></h4>
                        <ul>
                            <?php
                            $managementSql="SELECT * FROM `staff` WHERE `type`='Chairman'";
                            $managementResult=mysqli_query($connection,$managementSql);
                            while($managementRow=mysqli_fetch_assoc($managementResult)){
                            ?>
                                <li id="management_list"><?php echo $managementRow['first_name']." ".$managementRow['last_name']?> - <?php echo $managementRow['designation']?></li>
                                <?php
                                }
                                ?>
                        </ul>
                        <h4><b>Directors</b></h4>
                        <ul>
                            <?php
                            $managementSql="SELECT * FROM `staff` WHERE `type`='Director'";
                            $managementResult=mysqli_query($connection,$managementSql);
                            while($managementRow=mysqli_fetch_assoc($managementResult)){
                            ?>
                                <li id="management_list"><?php echo $managementRow['first_name']." ".$managementRow['last_name']?> - <?php echo $managementRow['designation']?></li>
                                <?php
                                }
                                ?>
                        </ul>
                        <h4><b>Management Team</b></h4>
                        <ul>
                            <?php
                            $managementSql="SELECT * FROM `staff` WHERE `type`='Management Team'";
                            $managementResult=mysqli_query($connection,$managementSql);
                            while($managementRow=mysqli_fetch_assoc($managementResult)){
                            ?>
                                <li id="management_list"><?php echo $managementRow['first_name']." ".$managementRow['last_name']?> - <?php echo $managementRow['designation']?></li>
                                <p class="pl-5"><b>E-mail</b>: <?php echo $managementRow['email']?></p>
                                <p class="pl-5"><b>Direct</b>: <?php echo $managementRow['direct']?></p>
                                <p class="pl-5"><b>Mobile</b>: <?php echo $managementRow['mobile']?></p>
                                <?php
                                }
                                ?>
                        </ul>
                        
                    </div>
                    <div class="col-md-6 mt-3">
                        <div class="about_image_2" style="background-image: url('<?php echo cmsGetSingle("aboutImage2","about");?>')">></div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</body>

<?php
include_once "footerHTML.php";
?>