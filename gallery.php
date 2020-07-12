<?php
include_once "headerHTML.php";
include_once "navigation.php";
?>
<div class="container bg-white">

<section class="gallery_details section-gap ">
<div class="row justify-content-center">
            <span class="justify-content-between text-color-purple mr-3 d-none d-md-block">__________________</span>
            <h2 class="headingGallery">GALLERY</h2>
            <span class="justify-content-between text-color-purple ml-3 d-none d-md-block">__________________</span>
        </div>
    </section>
      


   <div class="row verTex">
        <h3> B <br>
             E <br>
             A &nbsp&nbsp&nbsp I<br>
             U &nbsp&nbsp&nbsp N<br>
             T &nbsp&nbsp&nbsp S<br>
             Y &nbsp&nbsp&nbsp  I<br>
             &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp D <br>
             &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp E <br>
        </h3>

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

<div class=" row verTex2">
     <h3> B <br>
             E <br>
             A &nbsp&nbsp&nbsp A<br>
             U &nbsp&nbsp&nbsp R<br>
             T &nbsp&nbsp&nbsp O<br>
             Y &nbsp&nbsp&nbsp U<br>
             &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp N <br>
             &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp D <br>
        </h3>
     <img name="slideauto" class="picbox" >

</div>

<div class="row">
  <div class="contaner1">   
  <div class="box">
     <div class="imgbox">
       <img src="photos/gallery/inside1.jpg">
       <div class="details">
         <div class="content">
          <h2>Location name</h2>
          <p>Here,place a discription about the location</p>
          </div>
       </div>
     </div>
  </div>
    
    <div class="box">
     <div class="imgbox">
       <img src="photos/gallery/inside1.jpg">
       <div class="details">
         <div class="content">
          <h2>Location name</h2>
          <p>Here,place a discription about the location</p>
          </div>
       </div>
     </div>
    </div>
  
  <div class="box">
     <div class="imgbox">
       <img src="photos/gallery/inside1.jpg">
       <div class="details">
         <div class="content">
          <h2>Location name</h2>
          <p>Here,place a discription about the location</p>
          </div>
       </div>
     </div>
    </div>
  
  <div class="box">
     <div class="imgbox">
       <img src="photos/gallery/inside1.jpg">
       <div class="details">
         <div class="content">
          <h2>Location name</h2>
          <p>Here,place a discription about the location</p>
          </div>
       </div>
     </div>
    </div>
  
  
</div>
 

</div>



<?php
include_once "footerHTML.php";
?>