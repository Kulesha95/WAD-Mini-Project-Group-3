<?php
session_start();
include_once "admin/config.php";
$user_id = 0;
if(isset($_SESSION['user_id'])){
    $user_id= $_SESSION['user_id'];
}
include_once "headerHTML.php";
include_once "navigation.php";
?>

<div class="container bg-white">
    <section class="contact-details section-gap">
        <div class="row justify-content-center">
            <span class="justify-content-between text-color-purple mr-3 d-none d-md-block">__________________</span>
            <h2 class="heading text-color-purple">contact us</h2>
            <span class="justify-content-between text-color-purple ml-3 d-none d-md-block">__________________</span>
        </div>
        <div class="row mt-5">
            <div class="col-12 col-md-6 mb-3">
                <div class="row contact-detail-item">
                    <div class="col-2 text-color-purple"><i class="fas fa-phone-alt fa-2x"></i></div>
                    <div class="col-10"><a class="no-deco text-dark" href="tel:+94312228000">+94312228000</a></div>
                </div>
                <div class="row contact-detail-item">
                    <div class="col-2 text-color-purple"><i class="fas fa-map-marker-alt fa-2x"></i></div>
                    <div class="col-10">
                        <h5 class="mb-2">Avenra Garden Hotel</h5>
                        <span>No 22, Negombo - Giriulla Rd, Negombo</span>
                    </div>
                </div>
                <div class="row contact-detail-item">
                    <div class="col-2 text-color-purple"><i class="fas fa-globe-asia fa-2x"></i></div>
                    <div class="col-10"><a class="no-deco text-dark"
                            href="http://www.avenragardenhotel.com">http://www.avenragardenhotel.com</a></div>
                </div>
                <div class="row contact-detail-item">
                    <div class="col-2 text-color-purple"><i class="fas fa-envelope fa-2x"></i></div>
                    <div class="col-10"><a class="no-deco text-dark"
                            href="mailto:info@avenragardenhotel.com">info@avenragardenhotel.com</a></div>
                </div>
                <div class="row contact-detail-item">
                    <div class="col-2 text-color-purple"><i class="fas fa-award fa-2x"></i></div>
                    <div class="col-10 text-warning">
                        <h5 class="mb-2 text-dark">Ratings</h5>
                        <?php
                        $ratingSql="SELECT COUNT(`id`) as rateCount,SUM(`rate`) as totalRates FROM `review`";
                        $ratingResult=mysqli_query($connection,$ratingSql);
                        $ratingData=mysqli_fetch_assoc($ratingResult);
                        $ratingValue=$ratingData['totalRates']/$ratingData['rateCount'];
                        echo number_format($ratingValue,2);
                    
                        for($i=1;$i<=5;$i++){
                            if($ratingValue-$i>=0){
                                ?>
                                <i class="fas fa-star"></i>

                                <?php
                            }else if(fmod($ratingValue,1)){
                                ?>
                                <i class="fas fa-star-half-alt"></i>
                                <?php
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
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3958.2038000268385!2d79.8532200146439!3d7.217579194789506!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae2eec1cf287c89%3A0xe14018d2425ce2f2!2sAvenra%20Garden%20Hotel!5e0!3m2!1sen!2slk!4v1594030144860!5m2!1sen!2slk"
                    width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false"
                    tabindex="0"></iframe>
            </div>
        </div>
    </section>
</div>
<div class="container">
    <section class="map section-gap">
        <div class="row justify-content-center">
            <span class="justify-content-between text-color-purple mr-3 d-none d-md-block">__________________</span>
            <h2 class="heading text-color-purple">Write Us</h2>
            <span class="justify-content-between text-color-purple ml-3 d-none d-md-block">__________________</span>
        </div>
        <div class="row mt-5">
            <div class="col-md-6 mb-md-0  mb-3">
                <div class="contact-image"></div>
            </div>
            <div class="col-md-6">
                <form action="admin/Message/addController.php" method= "POST">
                    <input type="hidden" name="user_id" id="user_id" value="<?php echo $user_id; ?>">
                    <div class="row mx-3 mt-0 mb-3">
                        <input type="text" name="name" id="name" class="form-control form-control-lg"
                            placeholder="Your Name" required>
                    </div>
                    <div class="row m-3">
                        <input type="text" name="email" id="email" class="form-control form-control-lg"
                            placeholder="Your E-Mail">
                    </div>
                    <div class="row m-3">
                        <input type="text" name="subject" id="subject" class="form-control form-control-lg"
                            placeholder="Your Message Subject">
                    </div>
                    <div class="row m-3">
                        <textarea name="message" id="message" class="form-control form-control-lg"
                            placeholder="Your Message" rows="6"></textarea>
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
<div class="container bg-white">
    <section class="map section-gap">
        <div class="row justify-content-center">
            <span class="justify-content-between text-color-purple mr-3 d-none d-md-block">__________________</span>
            <h2 class="heading text-color-purple">Review Us</h2>
            <span class="justify-content-between text-color-purple ml-3 d-none d-md-block">__________________</span>
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
<div class="container">
    <section class="reviews section-gap">
        <div class="row justify-content-center">
            <span class="justify-content-between text-color-purple mr-3 d-none d-md-block">__________________</span>
            <h2 class="heading text-color-purple">customer reviews</h2>
            <span class="justify-content-between text-color-purple ml-3 d-none d-md-block">__________________</span>
        </div>
        <div class="row mt-5">
            <?php
            $reviewSql="SELECT * FROM `review`";
            $reviewResult=mysqli_query($connection,$reviewSql);
            while($reviewRow=mysqli_fetch_assoc($reviewResult)){
                $userSql="SELECT * FROM `user` WHERE `id`='$reviewRow[user_id]'";
                $userResult=mysqli_query($connection,$userSql);
                $userData=mysqli_fetch_assoc($userResult);
                
            ?>
            <div class="col-md-4 review-card-container" id="review-card-container">
                <div class="card shadow review-card-before">
                    <div class="card-header bg-white">
                        <div class="row">
                            <div class="profile-picture-container">
                                <img class="rounded-circle profile-picture"
                                    src="<?php echo $userData['image'];?>"
                                    alt="User Profile Picture">
                            </div>
                            <div class="col-8">
                                <div class="row">
                                    <span><?php echo $userData['first_name']." ".$userData['last_name'];?></span>
                                </div>
                                <div class="row">
                                    <span class="text-secondary">Satisfied Customer</span>
                                </div>
                                <div class="row text-warning mt-1">
                                   <?php
                                   $ratingValue=$reviewRow['rate'];   
                                   for($i=1;$i<=5;$i++){
                                        if($ratingValue-$i>=0){
                                            ?>
                                            <i class="fas fa-star"></i>

                                            <?php
                                        }else if(fmod($ratingValue,1)){
                                            ?>
                                            <i class="fas fa-star-half-alt"></i>
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

<?php
include_once "footerHTML.php";
?>