<?php
include_once "headerHTML.php";

?>
<nav id="sidebar">
    <div id="dismiss">
        <i class="fas fa-arrow-left"></i>
    </div>

    <div class="sidebar-header line">
        <h3>Avenra Garden</h3>
        <h5>Admin Panel</h5>
    </div>

    <ul class="list-unstyled components">
        <!--Amenity-->
        <li class="nav-item">
            <a href="#amenityMenu" data-toggle="collapse" aria-expanded="false" class="has-tree"><i
                    class="fas fa-wifi has-tree"></i>&nbsp;&nbsp;&nbsp;Amenity</a>
            <ul class="collapse list-unstyled" id="amenityMenu">
                <li class="nav-item">
                    <a class="nav-link" href="Amenity/addView.php" target="iframeDisplay"><i class="fas fa-plus"
                            style="padding-right: 10px;"></i>Add Amenity</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Amenity/listView.php" target="iframeDisplay"><i class="fas fa-list"
                            style="padding-right: 10px;"></i>View Amenity List</a>
                </li>
            </ul>
        </li>
        <!--Booking-->
        <li class="nav-item">
            <a href="#bookingMenu" data-toggle="collapse" aria-expanded="false" class="has-tree"><i
                    class="fas fa-hotel has-tree"></i>&nbsp;&nbsp;&nbsp;Booking</a>
            <ul class="collapse list-unstyled" id="bookingMenu">
                <li class="nav-item">
                    <a class="nav-link" href="Booking/listView.php" target="iframeDisplay"><i class="fas fa-list"
                            style="padding-right: 10px;"></i>View Booking List</a>
                </li>
            </ul>
        </li>
        <!--Feature-->
        <li class="nav-item">
            <a href="#featureMenu" data-toggle="collapse" aria-expanded="false" class="has-tree"><i
                    class="fas fa-glass-cheers has-tree"></i>&nbsp;&nbsp;&nbsp;Feature</a>
            <ul class="collapse list-unstyled" id="featureMenu">
                <li class="nav-item">
                    <a class="nav-link" href="Feature/addView.php" target="iframeDisplay"><i class="fas fa-plus"
                            style="padding-right: 10px;"></i>Add Feature</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Feature/listView.php" target="iframeDisplay"><i class="fas fa-list"
                            style="padding-right: 10px;"></i>View Feature List</a>
                </li>
            </ul>
        </li>
        <!--Gallery_image-->
        <li class="nav-item">
            <a href="#galleryMenu" data-toggle="collapse" aria-expanded="false" class="has-tree"><i
                    class="fas fa-images has-tree"></i>&nbsp;&nbsp;&nbsp;Gallery Image</a>
            <ul class="collapse list-unstyled" id="galleryMenu">
                <li class="nav-item">
                    <a class="nav-link" href="Gallery_image/addView.php" target="iframeDisplay"><i class="fas fa-plus"
                            style="padding-right: 10px;"></i>Add Gallery Image</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Gallery_image/listView.php" target="iframeDisplay"><i class="fas fa-list"
                            style="padding-right: 10px;"></i>View Gallery Image List</a>
                </li>
            </ul>
        </li>
        <!--Menu_item-->
        <li class="nav-item">
            <a href="#menuItemMenu" data-toggle="collapse" aria-expanded="false" class="has-tree"><i
                    class="fas fa-hamburger has-tree"></i>&nbsp;&nbsp;&nbsp;Menu Item</a>
            <ul class="collapse list-unstyled" id="menuItemMenu">
                <li class="nav-item">
                    <a class="nav-link" href="Menu_item/addView.php" target="iframeDisplay"><i class="fas fa-plus"
                            style="padding-right: 10px;"></i>Add Menu Item</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Menu_item/listView.php" target="iframeDisplay"><i class="fas fa-list"
                            style="padding-right: 10px;"></i>View Menu Item List</a>
                </li>
            </ul>
        </li>
        <!--Message-->
        <li class="nav-item">
            <a href="#messageMenu" data-toggle="collapse" aria-expanded="false" class="has-tree"><i
                    class="fas fa-envelope-open has-tree"></i>&nbsp;&nbsp;&nbsp;Contact Message</a>
            <ul class="collapse list-unstyled" id="messageMenu">
                <li class="nav-item">
                    <a class="nav-link" href="Message/listView.php" target="iframeDisplay"><i class="fas fa-list"
                            style="padding-right: 10px;"></i>View Message List</a>
                </li>
            </ul>
        </li>
        <!--Review-->
        <li class="nav-item">
            <a href="#reviewMenu" data-toggle="collapse" aria-expanded="false" class="has-tree"><i
                    class="fas fa-award has-tree"></i>&nbsp;&nbsp;&nbsp;Review</a>
            <ul class="collapse list-unstyled" id="reviewMenu">
                <li class="nav-item">
                    <a class="nav-link" href="Review/listView.php" target="iframeDisplay"><i class="fas fa-list"
                            style="padding-right: 10px;"></i>View Review List</a>
                </li>
            </ul>
        </li>
        <!--Room-->
        <li class="nav-item">
            <a href="#roomMenu" data-toggle="collapse" aria-expanded="false" class="has-tree"><i
                    class="fas fa-bed has-tree"></i>&nbsp;&nbsp;&nbsp;Room</a>
            <ul class="collapse list-unstyled" id="roomMenu">
                <li class="nav-item">
                    <a class="nav-link" href="Room/addView.php" target="iframeDisplay"><i class="fas fa-plus"
                            style="padding-right: 10px;"></i>Add Room</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Room/listView.php" target="iframeDisplay"><i class="fas fa-list"
                            style="padding-right: 10px;"></i>View Room List</a>
                </li>
            </ul>
        </li>
        <!--Staff-->
        <li class="nav-item">
            <a href="#staffMenu" data-toggle="collapse" aria-expanded="false" class="has-tree"><i
                    class="fas fa-user-tie has-tree"></i>&nbsp;&nbsp;&nbsp;Staff</a>
            <ul class="collapse list-unstyled" id="staffMenu">
                <li class="nav-item">
                    <a class="nav-link" href="Staff/addView.php" target="iframeDisplay"><i class="fas fa-plus"
                            style="padding-right: 10px;"></i>Add Staff</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Staff/listView.php" target="iframeDisplay"><i class="fas fa-list"
                            style="padding-right: 10px;"></i>View Staff List</a>
                </li>
            </ul>
        </li>
        <!--User-->
        <li class="nav-item">
            <a href="#userMenu" data-toggle="collapse" aria-expanded="false" class="has-tree"><i
                    class="fas fa-user has-tree"></i>&nbsp;&nbsp;&nbsp;User</a>
            <ul class="collapse list-unstyled" id="userMenu">
                <li class="nav-item">
                    <a class="nav-link" href="User/addView.php" target="iframeDisplay"><i class="fas fa-user"
                            style="padding-right: 10px;"></i>Add User</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="User/listView.php" target="iframeDisplay"><i class="fas fa-user"
                            style="padding-right: 10px;"></i>View User List</a>
                </li>
            </ul>
        </li>
        <!-- CMS -->
        <li class="nav-item">
            <a href="#cmsMenu" data-toggle="collapse" aria-expanded="false" class="has-tree"><i
                    class="fas fa-cog has-tree"></i>&nbsp;&nbsp;&nbsp;CMS</a>
            <ul class="collapse list-unstyled" id="cmsMenu">
                <li class="nav-item">
                    <a class="nav-link" href="Cms/home.php" target="iframeDisplay"><i class="fas fa-home"
                            style="padding-right: 10px;"></i>Home Page</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Cms/about.php" target="iframeDisplay"><i class="fas fa-info-circle"
                            style="padding-right: 10px;"></i>About Page</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Cms/accomodation.php" target="iframeDisplay"><i class="fas fa-hotel"
                            style="padding-right: 10px;"></i>Rooms Page</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Cms/contact.php" target="iframeDisplay"><i class="fas fa-phone-alt"
                            style="padding-right: 10px;"></i>Contact Page</a>
                </li>
            </ul>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="logOutController.php"><i class="fas fa-sign-out-alt"
                    style="padding-right: 10px;"></i>Log Out</a>
        </li>
    </ul>
</nav>


<nav class="navbar navbar-expand-lg navbar-fixed background-color-purple" id="topnav">
    <button type="button" id="sidebarCollapse" class="btn background-color-purple btn-icon">
        <i class="fas fa-bars" id="sidebarCollapseIcon"></i>
    </button>
    <div class="date-time mx-auto text-light text-center">
        <span id="date"></span>&nbsp;|
        <span id="time"></span>
    </div>
</nav>

<!-- Web Content Start -->
<div class="container-fluid m-0 p-0">

    <iframe src="" frameborder="0" id="iframeDisplay" name="iframeDisplay" width="100%" height="700px"></iframe>
</div>
<!-- Web Content End -->


<?php
include_once "footerHTML.php";
?>