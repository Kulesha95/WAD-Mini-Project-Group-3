<?php
include_once "admin/config.php";
include_once "admin/function.php";
?>

<!-- NAvigation Area Start -->
<div class="banner" style="background: url(<?php echo cmsGetSingle("bannerImage","home")?>) no-repeat center;">
    <header class="d-flex">
        <div class="logo my-auto mx-auto" id="logo1">
        <a class="navbar-brand mx-auto" href="/"><img src="<?php echo cmsGetSingle("logo", "home"); ?>" alt="Logo"
            class="img-fluid my-auto brand-image"></a>
        </div>
    </header>
    <div class="nav1">
        <nav class="navbar navbar-expand-lg navbar-light">
            <button class="navbar-toggler border ml-auto mr-4" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars text-light"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav m-auto">
                    <li class="nav-item ">
                        <a class="nav-link" href="index.php"><i class="fas fa-home mr-2"></i>Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.php"><i class="fas fa-info-circle mr-2"></i>About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="accomodation.php"><i class="fas fa-hotel mr-2"></i>Rooms</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="gallery.php"><i class="fas fa-images mr-2"></i>Gallery</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php"><i class="fas fa-phone-alt mr-2"></i>Contacts</a>
                    </li>
                    <?php
                    if (isset($_SESSION['user_id'])) {
                        ?>
                    <li class="nav-item">
                        <a class="nav-link" href="admin/logOutController.php"><i class="fas fa-sign-out-alt mr-2"></i>Logout</a>
                    </li>
                    <?php
                    }else{
                        ?>
                    <li class="nav-item">
                        <a class="nav-link" href="admin/index.php"><i class="fas fa-sign-in-alt mr-2"></i>Login</a>
                    </li>
                    <?php
                    }
                    ?>
                </ul>
            </div>
        </nav>
    </div>
    <div class="animated-text">
        <?php
            foreach (explode(" ",cmsGetSingle("welcomeText","home")) as $line) {
        ?>
        <div class="line"><?php echo $line;?></div>
        <?php
            }
        ?>
    </div>
</div>
<!-- Navigation Area End -->