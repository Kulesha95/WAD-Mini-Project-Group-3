<?php
include_once "headerHTML.php";
include_once "navigation.php";
include_once "admin/config.php";
?>
<div class="container bg-white">

    <section class="gallery_details section-gap1 ">
        <div class="row justify-content-center">
            <span class="justify-content-between text-color-purple mr-3 d-none d-md-block">__________________</span>
            <h2 class="heading text-color-purple">HOTEL INTERIOR</h2>
            <span class="justify-content-between text-color-purple ml-3 d-none d-md-block">__________________</span>
        </div>
    </section>



    <!-- section 1 inside hotel -->
    <div class="row">

        <?php
          $imagesInteriorSql="SELECT * FROM `gallery_image` WHERE `type`='Interior'";
          $imagesInteriorResult=mysqli_query($connection,$imagesInteriorSql);
          while ($imagesInteriorRow=mysqli_fetch_assoc($imagesInteriorResult)) {
            ?>
        <div class=" imgBox col-12 col-md-4 p-3">
            <img src="<?php echo $imagesInteriorRow['path']?>" class="img-fluid adjust">
            <div class="details">
                <div class="content">
                    <a href="<?php echo $imagesInteriorRow['path']?>" target="_blank"><i
                            class="fas fa-search-plus magni"></i></a>
                </div>
            </div>
        </div>
        <?php
          }
        ?>
    </div>


    <!-- section2 outside hotel -->
    <section class="gallery_details section-gap1 ">
        <div class="row justify-content-center">
            <span class="justify-content-between text-color-purple mr-3 d-none d-md-block">__________________</span>
            <h2 class="heading text-color-purple">HOTEL EXTERIOR</h2>
            <span class="justify-content-between text-color-purple ml-3 d-none d-md-block">__________________</span>
        </div>
    </section>
    <div class="row">
        <?php
          $imagesExteriorSql="SELECT * FROM `gallery_image` WHERE `type`='Exterior'";
          $imagesExteriorResult=mysqli_query($connection,$imagesExteriorSql);
          while ($imagesExteriorRow=mysqli_fetch_assoc($imagesExteriorResult)) {
            ?>
        <div class=" imgBox col-12 col-md-4 p-3">
            <img src="<?php echo $imagesExteriorRow['path']?>" class="img-fluid adjust">
            <div class="details">
                <div class="content">
                    <a href="<?php echo $imagesExteriorRow['path']?>" target="_blank"><i
                            class="fas fa-search-plus magni"></i></a>
                </div>
            </div>
        </div>
        <?php
          }
        ?>
    </div>

    <!--section3 places to visit -->
    <section class="gallery_details section-gap1 ">
        <div class="row justify-content-center">
            <span class="justify-content-between text-color-purple mr-3 d-none d-md-block">__________________</span>
            <h2 class="heading text-color-purple">ATTRACTIVE PLACES NEARBY</h2>
            <span class="justify-content-between text-color-purple ml-3 d-none d-md-block">__________________</span>
        </div>
    </section>
    <div class="row">
        <?php
          $imagesPlacesSql="SELECT * FROM `gallery_image` WHERE `type`='Places Near By'";
          $imagesPlacesResult=mysqli_query($connection,$imagesPlacesSql);
          while ($imagesPlacesRow=mysqli_fetch_assoc($imagesPlacesResult)) {
            ?>
        <div class=" imgBox col-12 col-md-4 p-3">
            <img src="<?php echo $imagesPlacesRow['path']?>" class="img-fluid adjust">
            <div class="details">
                <div class="content">
                    <h2 id="tit"><?php echo $imagesPlacesRow['location_name']?></h2>
                    <p><?php echo $imagesPlacesRow['description']?></p>
                </div>
            </div>
        </div>
        <?php
          }
          ?>
    </div>
</div>



<?php
include_once "footerHTML.php";
?>