<?php
include_once "headerHTML.php";

?>
<div id="mySidenav" class="sidenav">
  		<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  		<a href="#"><i class="fas fa-home" style="padding-right: 10px;"></i>Home</a>
  		<a href="#"><i class="fas fa-images" style="padding-right: 10px;"></i>Gallery</a>
  		<a href="#"><i class="fas fa-bed" style="padding-right: 10px;"></i>Accomodation</a>
  		<a href="#"><i class="fas fa-hotel" style="padding-right: 10px;"></i>Room-View</a>
  		<a href="#"><i class="fas fa-address-card" style="padding-right: 10px;"></i>About Us</a>
  		<a href="#"><i class="fas fa-address-book" style="padding-right: 10px;"></i>Contact</a>
	</div>
	<div class="row upPanel">
		<div class="row">
			<button class="btn-dark ml-auto btnSide" onclick="openNav()" id="sidebarCollapse">&nbsp;<i class="fas fa-bars"></i>
			</button>
			<span class="justify-content-between text-color-white mr-3 d-none d-md-block">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;__________________
			</span>
			<h2 class="heading text-color-white">Administration</h2>
			<span class="justify-content-between text-color-white ml-3 d-none d-md-block">__________________</span>
		</div>
	</div>
	<div class="row downPanel"></div>

    
<?php
include_once "footerHTML.php";
?>