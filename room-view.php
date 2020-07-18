<?php
include_once "headerHTML.php";
include_once "navigation.php";
?>
<div class="container" id="customContainer">
	<section class="main-banner">
		<div class="row justify-content-center">
			<span class="justify-content-between text-color-purple mr-3 d-none d-md-block">__________________</span>
			<h2 class="heading text-color-purple">Deluxe Ocean View</h2>
			<span class="justify-content-between text-color-purple ml-3 d-none d-md-block">__________________</span>
		</div>
		<div class="row"  style="padding-top:20px">
			<div id="customImg" class="carousel slide " data-ride="carousel">
				<div class="carousel-inner" style="height:500px">
					<div class="carousel-item active">
						<img src="img/deluxe-ocean-view_king-bed.jpg" style="width:100%;height:500px;object-fit:cover">
					</div>
					<div class="carousel-item">
						<img  src="img/deluxe-ocean-view_king-bed-view.jpg" style="width:100%;height:500px;object-fit:cover">
					</div>
					<div class="carousel-item ">
						<img src="img/deluxe-ocean-view_living-area.jpg" style="width:100%;height:500px;object-fit:cover">
					</div>
					<div class="carousel-item ">
						<img  src="img/deluxe-ocean-view_twin-bed-view.jpg" style="width:100%;height:500px;object-fit:cover">
					</div>
					<div class="carousel-item">
						<img src="img/deluxe-ocean-view_bathroom-1.jpg" style="width:100%;height:500px;object-fit:cover">
					</div>
					<div class="carousel-item">
						<img src="img/deluxe-ocean-view_bathroom-2.jpg" style="width:100%;height:500px;object-fit:cover">
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
		</div>
		<div class="row contentRow">
			<article class="content">
                <p class="view">King or twin beds <span> | </span> 39 sqm. <span> | </span> Ocean view</p>
                <p class="descriptionRoom">Enter an oasis of tranquillity, leave the cares of the world behind. Our Deluxe Ocean View featuring a private balcony, 40-inch LED TV and free Wi-Fi have been designed for you to ease the mind.</p>
				<form id="bookForm">
					<div class="row">
						<div class="col-md-3">
							 <label for="name" style="font-size:23px;">From:</label>
                    		<input type="text" id="from" name="from" placeholder="From">			
						</div>
						<div class="col-md-3">
							<label for="name" style="font-size:23px;">To:</label>
                    		<input type="text" id="to" name="to" placeholder="To">
						</div>
						<div class="col-md-3">
							<div class="button">
                        		<a class="btn btnBook" href="#">Book Now</a>
                    		</div>
						</div>
					</div>
				</form>
            </article>
		</div>
				
		<br><br>
			<div class="hotel-highlight center">
				<div class="row">
					<div class="col-6 col-md-3">
						<div class="icon size"><i class="fas fa-ruler" style="font-size:50px;color:#4400A9;margin-left:0"></i></div>
                        <h4 class="head4">Room Size</h4>
                        <p class="pHighlight">39 sqm.</p>
					</div>
					<div class="col-6 col-md-3">
						<div class="icon bed"><i class="fas fa-bed" style="font-size:50px;color:#4400A9;margin-left:0"></i></div>
                        <h4 class="head4">Bed Type(s)</h4>
                        <p class="pHighlight">King or twin beds</p>
					</div>
					<div class="col-6 col-md-3">
						<div class="icon adultskid"><i class="fas fa-user-friends" style="font-size:50px;color:#4400A9;margin-left:0"></i></div>
                        <h4 class="head4">Ideal For</h4>
                        <p class="pHighlight">2 adults and 1 child or 3 adults</p>
					</div>
					<div class="col-6 col-md-3">
						<div class="icon view"><i class="fas fa-water" style="font-size:50px;color:#4400A9;margin-left:0"></i></div>
                        <h4 class="head4">View</h4>
                        <p class="pHighlight">Ocean view</p>
					</div>
				</div>
			</div>
		</section><br><hr>

		<!-- features section -->
		<section class="main-accordion1">
			<div class="row">
				<h3 class="head3">Features</h3>
			</div>
			<br>
			<div class="row">
				<div class="col-md-3 colFeatures">
                    <h4 class="head4">Overview</h4>
                    <ul class="custom">
                        <li>39 sqm.</li>
                        <li>Ocean view</li>
                        <li>Balcony</li>
                        <li>Ideal for 2 adults and 1 child or 3 adults</li>
                    </ul>
                </div>
                <div class="col-md-3 colFeatures">
                    <h4 class="head4">Bedroom</h4>
                    <ul class="custom">
                        <li>King or twin beds</li>
                        <li>Work space</li>
                        <li>Safety box</li>
                        <li>Individual climate control</li>
                        <li>Mini-bar</li>
                    </ul>
                </div>
                <div class="col-md-3 colFeatures">
                    <h4 class="head4">Bathroom</h4>
                       <ul class="custom">
                            <li>Shower</li>
                            <li>Bathrobes and slippers</li>
                            <li>Complimentary toiletries</li>
                            <li>Hair-dryer</li>
                            <li>Shaving point</li>
                            <li>Towels</li>
                        </ul>
                 </div>
			</div>
		</section>	
		<br><hr>

		<!-- amenties section -->
		<section class="main-accordion2">
			<div class="row">
				<h3 class="head3">Amenities</h3>
			</div><br>
			<div class="row">
				<div class="col-md-3 colFeatures">
                    <h4 class="head4">Connectivity</h4>
                    <ul class="custom">
                        <li>Free Wi-Fi</li>
                        <li>Telephone</li>
                        <li>Radio</li>
                        <li>Multimedia connectivity panel</li>
                        <li>LED TV</li>
                    </ul>
                </div>
                <div class="col-md-3 colFeatures">
                    <h4 class="head4">Services</h4>
                    <ul class="custom">
                        <li>Complimentary bottled water replenished daily</li>
                        <li>Daily cleaning service</li>
                        <li>In-room dining</li>
                    </ul>
                </div>
                <div class="col-md-3 colFeatures">
                    <h4 class="head4">Extras</h4>
                    <ul class="custom">
                        <li>230V electrical sockets</li>
                        <li>Ironing facilities</li>
                        <li>Tea and coffee making facilities</li>
                        <li>Connecting rooms (on-request)</li>
                    </ul>
                </div>
			</div>		
		</section>

</div>



<?php
include_once "footerHTML.php";
?>