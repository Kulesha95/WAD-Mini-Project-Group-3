<?php
include_once "admin/config.php";
include_once "admin/function.php";
include_once "headerHTML.php";
include_once "navigation.php";
// Get logged in user
$user_id = 0;
if(isset($_SESSION['user_id'])){
    $user_id= $_SESSION['user_id'];
}
?>

<!-- Contact message area start -->
<div class="container bg-white">
    <section class="contact-details section-gap">
        <div class="row justify-content-center">
            <span class="justify-content-between text-color-purple mr-3 d-none d-md-block">__</span>
            <h2 class="heading text-color-purple">contact us</h2>
            <span class="justify-content-between text-color-purple ml-3 d-none d-md-block">__</span>
        </div>
        <div class="row mt-5">
            <div class="col-12 col-md-6 mb-3">
                <div class="row contact-detail-item">
                    <div class="col-2 text-color-purple"><i class="fas fa-phone-alt fa-2x"></i></div>
                    <div class="col-10"><a class="no-deco text-dark" href="tel:<?php echo trim(explode("/",cmsGetSingle("contactNumber","contact"))[0]);?>"><?php echo cmsGetSingle("contactNumber","contact");?></a></div>
                </div>
                <div class="row contact-detail-item">
                    <div class="col-2 text-color-purple"><i class="fas fa-map-marker-alt fa-2x"></i></div>
                    <div class="col-10">
                        <h5 class="mb-2"><?php echo cmsGetSingle("addressLine1","contact");?></h5>
                        <span><?php echo cmsGetSingle("addressLine2","contact");?></span>
                    </div>
                </div>
                <div class="row contact-detail-item">
                    <div class="col-2 text-color-purple"><i class="fas fa-globe-asia fa-2x"></i></div>
                    <div class="col-10"><a class="no-deco text-dark"
                            href="<?php echo cmsGetSingle("website","contact");?>"><?php echo cmsGetSingle("website","contact");?></a></div>
                </div>
                <div class="row contact-detail-item">
                    <div class="col-2 text-color-purple"><i class="fas fa-envelope fa-2x"></i></div>
                    <div class="col-10"><a class="no-deco text-dark"
                            href="mailto:<?php echo cmsGetSingle("email","contact");?>"><?php echo cmsGetSingle("email","contact");?></a></div>
                </div>
                <div class="row contact-detail-item">
                    <div class="col-2 text-color-purple"><i class="fas fa-award fa-2x"></i></div>
                    <div class="col-10 text-warning">
                        <h5 class="mb-2 text-dark">Ratings</h5>
                        <?php
                        // Get the ratings count and sum of rating values
                        $ratingSql="SELECT COUNT(`id`) as rateCount,SUM(`rate`) as totalRates FROM `review`";
                        $ratingResult=mysqli_query($connection,$ratingSql);
                        $ratingData=mysqli_fetch_assoc($ratingResult);
                        // If there is no ratings set rating value to 0
                        if($ratingData['rateCount']=='0'){
                            $ratingValue=0;
                        }else{
                            $ratingValue=$ratingData['totalRates']/$ratingData['rateCount'];
                        }
                        // Display rating value
                        echo number_format($ratingValue,2);
                    
                        // Display stars according to the rating value
                        for($i=1;$i<=5;$i++){
                            // If rating value is greater than current star value display full star
                            if($ratingValue-$i>=0){
                                ?>
                                <i class="fas fa-star"></i>

                                <?php
                            // If rating value has decimal place greater than 0.5  display half star
                            }else if(fmod($ratingValue-$i+1,1)>=0.5){
                                ?>
                                <i class="fas fa-star-half-alt"></i>
                                <?php
                            // Else display non cooured star
                            }else{
                                ?>
                                <i class="far fa-star"></i>

                                <?php
                            }
                        }
                        ?>
                        
                        <span class="text-dark">(<?php echo $ratingData['rateCount']?> Reviews)</span>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6">
                <iframe
                    src="<?php echo cmsGetSingle("googleMapSrc","contact");?>"
                    width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false"
                    tabindex="0"></iframe>
            </div>
        </div>
    </section>
</div>
<!-- Contact message area end -->

<!-- Send message area start -->
<div class="container">
    <section class="map section-gap">
        <div class="row justify-content-center">
            <span class="justify-content-between text-color-purple mr-3 d-none d-md-block">__</span>
            <h2 class="heading text-color-purple">Write Us</h2>
            <span class="justify-content-between text-color-purple ml-3 d-none d-md-block">__</span>
        </div>
        <div class="row mt-5">
            <div class="col-md-6 mb-md-0  mb-3">
                <div class="contact-image" style="background-image: url('<?php echo cmsGetSingle("writeUsImage","contact");?>')"></div>
            </div>
            <div class="col-md-6">
                <form action="admin/Message/addController.php" method= "POST">
                    <input type="hidden" name="user_id" id="user_id" value="<?php echo $user_id; ?>">
                    <?php
                    if ($user_id==0) {
                      ?>
                    <div class="row mx-3 mt-0 mb-3">
                        <input type="text" name="name" id="name" class="form-control form-control-lg"
                            placeholder="Your Name" required>
                    </div>
                    <div class="row m-3">
                        <input type="email" name="email" id="email" class="form-control form-control-lg"
                            placeholder="Your E-Mail" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$">
                    </div>
                      <?php
                    }
                    ?>
                    <div class="row m-3">
                        <input type="text" name="subject" id="subject" class="form-control form-control-lg"
                            placeholder="Your Message Subject" required>
                    </div>
                    <div class="row m-3">
                        <textarea name="message" id="message" class="form-control form-control-lg"
                            placeholder="Your Message" rows="6" required></textarea>
                    </div>
                    <div class="row m-3">
                        <button type="submit" class="btn bg-color-pink form-control form-control-lg"><i
                                class="fab fa-telegram-plane"></i> Send Message</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
</div>
<!-- Send message area end -->

<!-- Rating area start -->
<div class="container bg-white">
    <section class="map section-gap">
        <div class="row justify-content-center">
            <span class="justify-content-between text-color-purple mr-3 d-none d-md-block">__</span>
            <h2 class="heading text-color-purple">Review Us</h2>
            <span class="justify-content-between text-color-purple ml-3 d-none d-md-block">__</span>
        </div>
        
        <div class="row mt-3 text-warning justify-content-center">
            <i class="far fa-star fa-3x m-3" onclick="rate('1')" id="star1"></i>
            <i class="far fa-star fa-3x m-3" onclick="rate('2')" id="star2"></i>
            <i class="far fa-star fa-3x m-3" onclick="rate('3')" id="star3"></i>
            <i class="far fa-star fa-3x m-3" onclick="rate('4')" id="star4"></i>
            <i class="far fa-star fa-3x m-3" onclick="rate('5')" id="star5"></i>
        </div>
        <form action="admin/Review/addController.php" method= "POST">
     
            <input type="hidden" name=" user_id" id=" user_id" value="<?php echo $user_id; ?>"> 
            <div class="row m-3">
                <textarea name="review" id="review" cols="30" rows="10" placeholder="Your Review"
                    class="form-control form-control-lg"></textarea>
            </div>
            <div class="row m-3">
                <button type="submit" class="btn bg-color-pink form-control form-control-lg"><i
                        class="fas fa-award"></i> Review</button>
            </div>
            <input type="hidden" name="rate" id="ratings" value="0">
        </form>
       
    </section>
</div>
<!-- Rating area end -->

<!-- Customer review area start -->
<div class="container">
    <section class="reviews section-gap">
        <div class="row justify-content-center">
            <span class="justify-content-between text-color-purple mr-3 d-none d-md-block">__</span>
            <h2 class="heading text-color-purple">customer reviews</h2>
            <span class="justify-content-between text-color-purple ml-3 d-none d-md-block">__</span>
        </div>
        <div class="row mt-5">
            <?php
            // Get reviews and load in to the cards
            $reviewSql="SELECT * FROM `review`";
            $reviewResult=mysqli_query($connection,$reviewSql);
            while($reviewRow=mysqli_fetch_assoc($reviewResult)){                
            ?>
            <div class="col-md-4 review-card-container" id="review-card-container">
                <div class="card shadow review-card-before">
                    <div class="card-header bg-white">
                        <div class="row">
                            <div class="profile-picture-container">
                                <img class="rounded-circle profile-picture"
                                    src="<?php echo userImage($reviewRow['user_id']);?>"
                                    alt="User Profile Picture">
                            </div>
                            <div class="col-8">
                                <div class="row">
                                    <span><?php echo user($reviewRow['user_id']);?></span>
                                </div>
                                <div class="row">
                                    <span class="text-secondary">Satisfied Customer</span>
                                </div>
                                <div class="row text-warning mt-1">
                                   <?php
                                //  Display stars according to the rating value  
                                   $ratingValue=$reviewRow['rate'];   
                                   for($i=1;$i<=5;$i++){
                                        if($ratingValue-$i>=0){
                                            ?>
                                            <i class="fas fa-star"></i>

                                            <?php
                                        }else{
                                            ?>
                                            <i class="far fa-star"></i>
                                            <?php
                                        }
                                    }
                                   ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                                    "<?php
                                    echo nl2br($reviewRow['review']);
                                    ?>"
                       
                    </div>
                </div>
            </div>
            <?php
                } ?>
        </div>
    </section>
</div>
<!-- Customer review area end -->

<?php
include_once "footerHTML.php";
?>