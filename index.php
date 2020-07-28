<?php
include_once "headerHTML.php";
include_once "navigation.php";
include_once "admin/config.php";
include_once "admin/function.php";
?>

<!-- Facilities And Services Details Start -->
<div class="container section-gap" id="divfas">
    <div class="row justify-content-center">
        <span class="justify-content-between text-color-purple mr-3 d-none d-md-block">__________________</span>
        <h2 class="heading text-color-purple">Facilities & Services</h2>
        <span class="justify-content-between text-color-purple ml-3 d-none d-md-block">__________________</span>
    </div>
    <div class="row mt-5">
        <?php $groupCodes = cmsGroupCodes("icon", "home");
foreach ($groupCodes as $groupCode) {
    ?>
        <div class="col-md-4 col-sm-6" id="row1">
            <i class="<?php echo cmsGetMultiple("icon", "home", $groupCode); ?> text-color-purple" id="img1"> </i>
            <div id="l1">
                <h3><?php echo cmsGetMultiple("facility", "home", $groupCode); ?></h3>
                <p id="para1" class="text-justify">
                    <?php echo nl2br(cmsGetMultiple("description", "home", $groupCode)); ?></p>
            </div>
        </div>
        <?php
}
?>
    </div>
</div>
<!-- Facilities And Services Details Start -->

<!-- Room Types Area Start -->
<section id="rooms" class="container">
    <div class="row justify-content-center">
        <span class="justify-content-between text-color-purple mr-3 d-none d-md-block">__________________</span>
        <h2 class="heading text-color-purple">Rooms & Suits</h2>
        <span class="justify-content-between text-color-purple ml-3 d-none d-md-block">__________________</span>
    </div>

    <p class="col-md-12 text-justify" id="para1"><?php echo nl2br(cmsGetSingle("roomDescription", "home")); ?></p>

    <div id="carouselExampleIndicators" class="carousel slide " data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="<?php echo cmsGetSingle("vipRoomsImage", "home"); ?>" alt="First slide">
                <div class="carousel-caption d-none d-md-block">
                    <h1 class="text-light">VIP Rooms</h1>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="<?php echo cmsGetSingle("familyRoomsImage", "home"); ?>"
                    alt="Second slide">
                <div class="carousel-caption d-none d-md-block">
                    <h1 class="text-light">Family Rooms</h1>
                </div>
            </div>
            <div class="carousel-item ">
                <img class="d-block w-100" src="<?php echo cmsGetSingle("bachelorRoomsImage", "home"); ?>"
                    alt="First slide">
                <div class="carousel-caption d-none d-md-block">
                    <h1 class="text-light">Bachelor Rooms</h1>
                </div>
            </div>
            <div class="carousel-item ">
                <img class="d-block w-100" src="<?php echo cmsGetSingle("doubleRoomsImage", "home"); ?>"
                    alt="First slide">
                <div class="carousel-caption d-none d-md-block">
                    <h1 class="text-light">Double Rooms</h1>
                </div>
            </div>
        </div>

        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</section>
<!-- Room Types Area End -->

<!-- Restaurent Menu Area Start -->
<section class="container clearfix section-gap" id="foodsection">
    <div class="row justify-content-center">
        <span class="justify-content-between text-color-purple mr-3 d-none d-md-block">__________________</span>
        <h2 class="heading text-color-purple">Restaurent Menu</h2>
        <span class="justify-content-between text-color-purple ml-3 d-none d-md-block">__________________</span>
    </div>

    <div class="row mt-5">
        <div class="col-md-4 col-sm-6" id="col1">
            <h3 id="food" class="text-color-purple">Breakfast</h3>
            <div id="carouselExampleIndicators1" class="carousel slide " data-interval="false" data-ride="carousel">

                <?php
                $breakfastSql="SELECT * FROM `menu_item` WHERE `type`='Breakfast'";
                $breakfastResult=mysqli_query($connection,$breakfastSql);                
            ?>

                <ol class="carousel-indicators">
                    <?php
                    $count=1;
                    for ($i=0; $i < mysqli_num_rows($breakfastResult); $i++) { 
                        ?>
                    <li data-target="#carouselExampleIndicators1" data-slide-to="<?php echo $count-1; ?>"
                        class="<?php if($count==1){echo "active";}?>"></li>
                    <?php
                        $count++;
                    }
                    ?>
                </ol>

                <div class="carousel-inner">
                    <?php
                    $count=1;
                    while($breakfastRow=mysqli_fetch_assoc($breakfastResult)){
                        ?>
                    <div class="carousel-item <?php if($count==1){echo "active";}?>">
                        <img class="d-block w-100" src="<?php echo $breakfastRow['image']?>" alt="First slide"
                            id="imgfood1">
                        <h4><?php echo $breakfastRow['name']?></h4>
                        <p id="foodpara"><?php echo $breakfastRow['description']?></p>
                        <h2>Rs : <?php echo $breakfastRow['price']?>.00</h2>
                    </div>
                    <?php
                    $count++;
                    }
                    ?>
                </div>


                <a class="carousel-control-prev" href="#carouselExampleIndicators1" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators1" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>


        </div>
        <div class="col-md-4 col-sm-6" id="col2">
            <h3 id="food" class="text-color-purple">Lunch</h3>
            <div id="carouselExampleIndicators2" class="carousel slide " data-interval="false" data-ride="carousel">

            <?php
                $lunchSql="SELECT * FROM `menu_item` WHERE `type`='Lunch'";
                $lunchResult=mysqli_query($connection,$lunchSql);                
            ?>

                <ol class="carousel-indicators">
                    <?php
                    $count=1;
                    for ($i=0; $i < mysqli_num_rows($lunchResult); $i++) { 
                        ?>
                    <li data-target="#carouselExampleIndicators2" data-slide-to="<?php echo $count-1; ?>"
                        class="<?php if($count==1){echo "active";}?>"></li>
                    <?php
                        $count++;
                    }
                    ?>
                </ol>
                <div class="carousel-inner">
                <?php
                    $count=1;
                    while($lunchRow=mysqli_fetch_assoc($lunchResult)){
                        ?>
                    <div class="carousel-item <?php if($count==1){echo "active";}?>">
                        <img class="d-block w-100" src="<?php echo $lunchRow['image']?>" alt="First slide"
                            id="imgfood1">
                        <h4><?php echo $lunchRow['name']?></h4>
                        <p id="foodpara"><?php echo $lunchRow['description']?></p>
                        <h2>Rs : <?php echo $lunchRow['price']?>.00</h2>
                    </div>
                    <?php
                    $count++;
                    }
                    ?>
                </div>


                <a class="carousel-control-prev" href="#carouselExampleIndicators2" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators2" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>

        </div>
        <div class="col-md-4 col-sm-12" id="col3">
            <h3 id="food" class="text-color-purple">Dinner</h3>
            <div id="carouselExampleIndicators3" class="carousel slide " data-interval="false" data-ride="carousel">
            <?php
                $dinnerSql="SELECT * FROM `menu_item` WHERE `type`='Dinner'";
                $dinnerResult=mysqli_query($connection,$dinnerSql);                
            ?>
                <ol class="carousel-indicators">
                <?php
                    $count=1;
                    for ($i=0; $i < mysqli_num_rows($dinnerResult); $i++) { 
                        ?>
                    <li data-target="#carouselExampleIndicators3" data-slide-to="<?php echo $count-1; ?>"
                        class="<?php if($count==1){echo "active";}?>"></li>
                    <?php
                        $count++;
                    }
                    ?>
                </ol>

                <div class="carousel-inner">
                <?php
                    $count=1;
                    while($dinnerRow=mysqli_fetch_assoc($dinnerResult)){
                        ?>
                    <div class="carousel-item <?php if($count==1){echo "active";}?>">
                        <img class="d-block w-100" src="<?php echo $dinnerRow['image']?>" alt="First slide"
                            id="imgfood1">
                        <h4><?php echo $dinnerRow['name']?></h4>
                        <p id="foodpara"><?php echo $dinnerRow['description']?></p>
                        <h2>Rs : <?php echo $dinnerRow['price']?>.00</h2>
                    </div>
                    <?php
                    $count++;
                    }
                    ?>
                </div>


                <a class="carousel-control-prev" href="#carouselExampleIndicators3" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators3" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>

        </div>
    </div>
</section>
<!-- Restaurent Menu Area End -->


<!-- Quote Area Start -->
<section id="coverfoot" class="container1"
    style="background: url(<?php echo cmsGetSingle("quoteImage","home")?>) no-repeat center;">
    <div class="centered"><?php echo cmsGetSingle("quote", "home"); ?><br>
        <h3 id="coverfoottext">-<?php echo cmsGetSingle("quoteBy", "home"); ?>-</h3>
    </div>
</section>
<!-- Quote Area End -->

<?php
include_once "footerHTML.php";
?>