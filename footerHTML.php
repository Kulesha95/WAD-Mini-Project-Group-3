

<!-- Footer Area Start -->
<footer id="secfooter">
    <div class="container pb-4" id="footersec">
        <div class="row">
            <div class="col-md-4 d-flex" id="footer1">
                <img src="<?php echo cmsGetSingle("logo", "home"); ?>" alt="Logo" class="img-fluid my-auto mx-auto w-75">            
            </div>

            <div class="col-md-4">
                <h4 id="footerhead">CONTACT INFO</h4>
                <div id="con1">
                    <p id="con2" class="row">
                        <i class="fas fa-home mr-3 col-1"></i>
                        <span class="col-9"><?php echo cmsGetSingle("addressLine2", "contact"); ?></span>
                    </p>
                    <p id="con2" class="row">
                        <i class="fas fa-envelope mr-3 col-1"></i>
                        <a class="col-9 no-deco" href="mailto:<?php echo cmsGetSingle("email", "contact"); ?>"><?php echo cmsGetSingle("email", "contact"); ?></a>
                    </p>
                    <p id="con2" class="row">
                        <i class="fas fa-phone-alt mr-3 col-1"></i>
                        <a class="col-9 no-deco" href="tel:<?php echo cmsGetSingle("contactNumber", "contact"); ?>"><?php echo cmsGetSingle("contactNumber", "contact"); ?></a>
                    </p>
                    <p id="con2" class="row">
                        <i class="fas fa-globe-asia mr-3 col-1"></i>
                        <a class="col-9 no-deco" href="index.php"><?php echo cmsGetSingle("website", "contact"); ?></a>
                    </p>
                </div>

            </div> <!-- footercol -->




            <div class="col-md-4">
                <h4 id="footerhead">QUICK LINKS</h4>
                <ul class="quicklinks">
                    <li><a href="index.php"><i class="fas fa-home mr-2"></i>Home</a></li>
                    <li><a href="about.php"><i class="fas fa-info-circle mr-2"></i>About Us</a></li>
                    <li><a href="accomodation.php"><i class="fas fa-hotel mr-2"></i>Rooms</a></li>
                    <li><a href="gallery.php"><i class="fas fa-images mr-2"></i>Gallery</a></li>
                    <li><a href="contact.php"><i class="fas fa-phone-alt mr-2"></i>Contacts</a></li>

                </ul><!-- quicklinks -->

            </div><!-- footercol -->
        </div>        
    </div>
</footer>
<!-- Footer Area End -->


</body>
</html>