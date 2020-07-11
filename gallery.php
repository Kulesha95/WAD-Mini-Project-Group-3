<?php
include_once "headerHTML.php";
include_once "navigation.php";
?>
<div class="container bg-white">

<section class="gallery_details section-gap container">
<div class="row justify-content-center">
            <span class="justify-content-between text-color-purple mr-3 d-none d-md-block">__________________</span>
            <h2 class="headingGallery">GALLERY</h2>
            <span class="justify-content-between text-color-purple ml-3 d-none d-md-block">__________________</span>
        </div>
    </section>
      
<div class="slidershow middle">
   	<div class="slides">
   		<input type="radio" name="r" id="r1" checked>
   		  <input type="radio" name="r" id="r2">
   		  <input type="radio" name="r" id="r3">
   		  <input type="radio" name="r" id="r4">
   		  <input type="radio" name="r" id="r5">
       
       <div class="slide s1">
       	<img src="img\gallery\inside1.jpg" alt="">
       </div>
       <div class="slide ">
       	<img src="img\gallery\inside2.jpg" alt="">
       </div>
       <div class="slide ">
       	<img src="img\gallery\inside3.jpg" alt="">
       </div>
       <div class="slide ">
       	<img src="img\gallery\inside4.jpg" alt="">
       </div>
       <div class="slide ">
       	<img src="img\gallery\inside5.jpg" alt="">
       </div>

   	</div>

    <div class="navigation">
    	<label for="r1" class="bar"></label>
    	<label for="r2" class="bar"></label>
    	<label for="r3" class="bar"></label>
    	<label for="r4" class="bar"></label>
    	<label for="r5" class="bar"></label>
    </div>

   </div>

</div>



<?php
include_once "footerHTML.php";
?>