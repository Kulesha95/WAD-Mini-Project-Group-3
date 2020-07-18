<?php
session_start();
$user_id = 0;
if(isset($_SESSION['user_id'])){
    $user_id= $_SESSION[$user_id];
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
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                        <i class="far fa-star"></i>
                        <span class="text-dark">(10 Reviews)</span>
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
                    <input type="hidden" name=" user_id" id=" user_id" value="<?php echo $user_id; ?>">
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
            <h2 class="heading text-color-purple">Rate Us</h2>
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
                for ($i=0;$i<6;$i++) {
                    ?>
            <div class="col-md-4 review-card-container" id="review-card-container">
                <div class="card shadow review-card-before">
                    <div class="card-header bg-white">
                        <div class="row">
                            <div class="profile-picture-container">
                                <img class="rounded-circle profile-picture"
                                    src="data:image/jpeg;base64,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"
                                    alt="">
                            </div>
                            <div class="col-8">
                                <div class="row">
                                    <span>Nancy Green</span>
                                </div>
                                <div class="row">
                                    <span class="text-secondary">Satisfied Customer</span>
                                </div>
                                <div class="row text-warning mt-1">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                    <i class="far fa-star"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        ” Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga aliquid. Atque dolore esse
                        veritatis iusto eaque perferendis non dolorem fugiat voluptatibus vitae error ad itaque
                        inventore accusantium tempore dolores sunt. “
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