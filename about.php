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
                    <p id="about_description"><?php echo cmsGetSingle("description", "about"); ?></p>
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
                    <div class="column col-6 col-md-3">
                        <span class="fa-stack fa-4x text-light">
                            <i class="fa fa-circle fa-stack-2x icon-background"></i>
                            <i class="fa fa-bed fa-stack-1x"></i>
                        </span>
                        <h2>200</h2>
                        <h3 id="about_list">Rooms</h3>

                    </div>
                    <div class="column col-6 col-md-3">
                        <span class="fa-stack fa-4x text-light">
                            <i class="fa fa-circle fa-stack-2x icon-background"></i>
                            <i class="fa fa-bath fa-stack-1x"></i>
                        </span>
                        <h2>80</h2>
                        <h3 id="about_list"> Bathrooms </h3>
                    </div>
                    <div class="column col-6 col-md-3 ">
                        <span class="fa-stack fa-4x text-light">
                            <i class="fa fa-circle fa-stack-2x icon-background"></i>
                            <i class="fa fa-car fa-stack-1x"></i>
                        </span>
                        <h2>2+</h2>
                        <h3 id="about_list"> Parks </h3>
                    </div>
                    <div class="column col-6 col-md-3 ">
                        <span class="fa-stack fa-4x text-light">
                            <i class="fa fa-circle fa-stack-2x icon-background"></i>
                            <i class="fa fa-map-marker fa-stack-1x"></i>
                        </span>
                        <h2>2000+</h2>
                        <h3 id="about_list"> Size in SQFT </h3>
                    </div>
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
                            <li id="management_list">Mr.Nimal Fernando</li>
                        </ul>
                        <h4><b>Directors</b></h4>
                        <ul>
                            <li id="management_list">Mr.Ajantha Perera</li>
                            <li id="management_list">Ms.Dilini Silva</li>
                            <li id="management_list">Mr.Oshan Peris</li>
                            <li id="management_list">Mr.Roshitha Jayaweera</li>
                            <li id="management_list">Mr.Ranjith Kahandawa</li>
                            <li id="management_list">Ms.Keshini Rajapakse</li>
                        </ul>
                        <h4><b>Management Team</b></h4>
                        <ul>
                            <li id="management_list"><b>Mr. Nimal Fernando Director/ CEO Avenra Hotels</b></li>
                        </ul>
                        <p class="pl-5"><b>E-mail</b>:
                            chandana@avenrahotels.com</p>
                        <ul>
                            <li id="management_list"><b>Mr. Hemantha Ratnayake Director Operations Avenra Hotels</b>
                            </li>
                        </ul>
                        <p class="pl-5"><b>E-mail</b>:
                            hemantha@avenrahotels.com</p>
                        <ul>
                            <li id="management_list"><b>Mr. Mani Sugathapala Director Sales and Marketing </b></li>
                        </ul>
                        <p class="pl-5"><b>Direct</b>: +94114376100 </p>
                        <p class="pl-5"><b>Mobile</b>: +94776890789 </p>
                        <p class="pl-5"><b>E-mail</b>: Mani@avenrahotels.com
                        </p>
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