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
                <a  class="nav-link" href="Amenity/addView.php" target="iframeDisplay"><i class="fas fa-wifi" style="padding-right: 10px;"></i>Add Amenity</a>
            </li>
            <li class="nav-item">
                <a  class="nav-link" href="Amenity/listView.php" target="iframeDisplay"><i class="fas fa-wifi" style="padding-right: 10px;"></i>View Amenity List</a>
            </li>
            <!--Booking-->
            <li class="nav-item">
                <a  class="nav-link" href="Booking/listView.php" target="iframeDisplay"><i class="fas fa-hotel" style="padding-right: 10px;"></i>View Booking List</a>
            </li>
            <!--Feature-->
            <li class="nav-item">
                <a  class="nav-link" href="Feature/addView.php" target="iframeDisplay"><i class="fas fa-glass-cheers" style="padding-right: 10px;"></i>Add Feature</a>
            </li>
            <li class="nav-item">
                <a  class="nav-link" href="Feature/listView.php" target="iframeDisplay"><i class="fas fa-glass-cheers" style="padding-right: 10px;"></i>View Feature List</a>
            </li>
            <!--Gallery_image-->
            <li class="nav-item">
                <a  class="nav-link" href="Gallery_image/addView.php" target="iframeDisplay"><i class="fas fa-images" style="padding-right: 10px;"></i>Add Gallery Image</a>
            </li>
            <li class="nav-item">
                <a  class="nav-link" href="Gallery_image/listView.php" target="iframeDisplay"><i class="fas fa-images" style="padding-right: 10px;"></i>View Gallery Image List</a>
            </li>
            <!--Menu_item-->
            <li class="nav-item">
                <a  class="nav-link" href="Menu_item/addView.php" target="iframeDisplay"><i class="fas fa-hamburger" style="padding-right: 10px;"></i>Add Menu Item</a>
            </li>
            <li class="nav-item">
                <a  class="nav-link" href="Menu_item/listView.php" target="iframeDisplay"><i class="fas fa-hamburger" style="padding-right: 10px;"></i>View Menu Item List</a>
            </li>
            <!--Message-->
            <li class="nav-item">
                <a  class="nav-link" href="Message/addView.php" target="iframeDisplay"><i class="fas fa-envelope-open" style="padding-right: 10px;"></i>Add Message</a>
            </li>
            <li class="nav-item">
                <a  class="nav-link" href="Message/listView.php" target="iframeDisplay"><i class="fas fa-envelope-open" style="padding-right: 10px;"></i>View Message List</a>
            </li>
            <!--Review-->
            <li class="nav-item">
                <a  class="nav-link" href="Review/addView.php" target="iframeDisplay"><i class="fas fa-search" style="padding-right: 10px;"></i>Add Review</a>
            </li>
            <li class="nav-item">
                <a  class="nav-link" href="Review/listView.php" target="iframeDisplay"><i class="fas fa-search" style="padding-right: 10px;"></i>View Review List</a>
            </li>
            <!--Room-->
            <li class="nav-item">
                <a  class="nav-link" href="Room/addView.php" target="iframeDisplay"><i class="fas fa-bed" style="padding-right: 10px;"></i>Add Room</a>
            </li>
            <li class="nav-item">
                <a  class="nav-link" href="Room/listView.php" target="iframeDisplay"><i class="fas fa-bed" style="padding-right: 10px;"></i>View Room List</a>
            </li>
            <!--Staff-->
            <li class="nav-item">
                <a  class="nav-link" href="Staff/addView.php" target="iframeDisplay"><i class="fas fa-user-friends" style="padding-right: 10px;"></i>Add Staff</a>
            </li>
            <li class="nav-item">
                <a  class="nav-link" href="Staff/listView.php" target="iframeDisplay"><i class="fas fa-user-friends" style="padding-right: 10px;"></i>View Staff List</a>
            </li>
            <!--User-->
            <li class="nav-item">
                <a  class="nav-link" href="User/addView.php" target="iframeDisplay"><i class="fas fa-user" style="padding-right: 10px;"></i>Add User</a>
            </li>
            <li class="nav-item">
                <a  class="nav-link" href="User/listView.php" target="iframeDisplay"><i class="fas fa-user" style="padding-right: 10px;"></i>View User List</a>
            </li>
            
        </ul>
    </nav>


    <nav class="navbar navbar-expand-lg navbar-fixed background-color-purple" id="topnav">
        <button type="button" id="sidebarCollapse" class="btn background-color-purple btn-icon">
            <i class="fas fa-bars"></i>
        </button>
        <div class="date-time mx-auto text-light text-center">
            <span id="date"></span>
        </div>
    </nav>

    <!-- Web Content Start -->
    <div class="container-fluid m-0 p-0">

        <iframe src="" frameborder="0" id="iframeDisplay" name="iframeDisplay" scrolling="no" width="100%" height="700px"></iframe>
    </div>
    <!-- Web Content End -->

    
<?php
include_once "footerHTML.php";
?>