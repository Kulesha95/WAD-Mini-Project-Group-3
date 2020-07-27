<?php
session_start();
include_once "admin/config.php";
include_once "admin/function.php";
include_once "headerHTML.php";
include_once "navigation.php";
$roomSql="select * from room WHERE id='$_GET[id]'";
$roomResult=mysqli_query($connection,$roomSql);
$roomData=mysqli_fetch_assoc($roomResult);
?>
<div class="container" id="customContainer">
	<section class="main-banner">
		<div class="row justify-content-center">
			<span class="justify-content-between text-color-purple mr-3 d-none d-md-block">__________________</span>
			<h2 class="heading text-color-purple"><?php echo $roomData['name']?></h2>
			<span class="justify-content-between text-color-purple ml-3 d-none d-md-block">__________________</span>
		</div>
		<div class="row"  style="padding-top:20px">
			<div id="carouselExampleIndicators" class="carousel slide customImg" data-ride="carousel">
				<div class="carousel-inner" style="height:500px">
					<?php
					 $roomImageSql="select * from room_image WHERE room_id='$_GET[id]'";
                	$roomImageResult=mysqli_query($connection,$roomImageSql);
					$i=0;
                	while($roomImageData=mysqli_fetch_assoc($roomImageResult)){
						$i++;
					?>
					<div class="carousel-item <?php if($i==1){echo "active";}?>">
						<img src="<?php echo $roomImageData['path']?>" style="width:100%;height:500px;object-fit:cover">
					</div>
					<?php
					}
					?>
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
                <p class="view"><?php echo $roomData['bed_type']?> <span> | </span> <?php echo $roomData['size']?> sqm. <span> | </span> <?php echo $roomData['view']?></p>
                <p class="descriptionRoom"><?Php echo nl2br($roomData['description'])?></p>
				<form id="bookForm" action="admin/booking/addController.php" method="POST">
					<div class="row">
						<div class="col-md-3">
							 <label for="name" style="font-size:23px;">From:</label>
                    		<input type="date" id="from" name="from" placeholder="From">			
						</div>
						<div class="col-md-3">
							<label for="name" style="font-size:23px;">To:</label>
                    		<input type="date" id="to" name="to" placeholder="To">
						</div>
						<div class="col-md-3">
							<div class="button">
                        		<button class="btn btnBook" type="submit">Book Now</button>
                    		</div>
						</div>
					</div>
					<input type="hidden" name="room_id" value="<?php echo $_GET['id']?>">
					<input type="hidden" name="user_id" value="<?php echo $_SESSION['user_id']?>">
				</form>
            </article>
		</div>
				
		<br><br>
			<div class="hotel-highlight center">
				<div class="row">
					<div class="col-6 col-md-3">
						<div class="icon size"><i class="fas fa-ruler" style="font-size:50px;color:#4400A9;margin-left:0"></i></div>
                        <h4 class="head4">Room Size</h4>
                        <p class="pHighlight"><?php echo $roomData['size']?> sqm.</p>
					</div>
					<div class="col-6 col-md-3">
						<div class="icon bed"><i class="fas fa-bed" style="font-size:50px;color:#4400A9;margin-left:0"></i></div>
                        <h4 class="head4">Bed Type(s)</h4>
                        <p class="pHighlight"><?php echo $roomData['bed_type']?></p>
					</div>
					<div class="col-6 col-md-3">
						<div class="icon adultskid"><i class="fas fa-user-friends" style="font-size:50px;color:#4400A9;margin-left:0"></i></div>
                        <h4 class="head4">Ideal For</h4>
                        <p class="pHighlight"><?php echo $roomData['ideal_for']?></p>
					</div>
					<div class="col-6 col-md-3">
						<div class="icon view"><i class="fas fa-water" style="font-size:50px;color:#4400A9;margin-left:0"></i></div>
                        <h4 class="head4">View</h4>
                        <p class="pHighlight"><?php echo $roomData['view']?></p>
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
				<div class="col-md-4 colFeatures">
                    <h4 class="head4">Overview</h4>
                    <ul class=custom>
						<li>
							<div class="row">
								<div class="col-1 col-md-2"><i class="fas fa-ruler mr-3 text-secondary"></i></div>
								<div class="col-11 col-md-10"><?php echo $roomData['size']?> sqm.</div>
							</div>
						</li>
                        <li>
							<div class="row">
								<div class="col-1 col-md-2"><i class="fas fa-water mr-3 text-secondary"></i></div>
								<div class="col-11 col-md-10"><?php echo $roomData['view']?></div>
							</div>
						</li>
						<li>
							<div class="row">
								<div class="col-1 col-md-2"><i class="fas fa-user-friends mr-3 text-secondary"></i></div>
								<div class="col-11 col-md-10"><?php echo $roomData['ideal_for']?></div>
							</div>
						</li>
						<?php 
						$roomFeatureOverviewSql="select * from room_has_feature as rhf inner join feature as f on rhf.feature_id=f.id where rhf.room_id='$_GET[id]' and type='Overview'";
						$roomFeatureOverviewResult=mysqli_query($connection,$roomFeatureOverviewSql);
						while($roomFeatureOverviewData=mysqli_fetch_assoc($roomFeatureOverviewResult)){
						?>
						<li>
							<div class="row">
								<div class="col-1 col-md-2"><i class="<?php echo $roomFeatureOverviewData['icon']?> mr-3 text-secondary"></i></div>
								<div class="col-11 col-md-10"><?php echo $roomFeatureOverviewData['feature']?></div>
							</div>
						</li>
						<?php	
						}
						?>
                        
    
                        
                    </ul>
                </div>
                <div class="col-md-4 colFeatures">
                    <h4 class="head4">Bedroom</h4>
                    <ul class="custom">
                        <li>
							<div class="row">
								<div class="col-1 col-md-2"><i class="fas fa-bed mr-3 text-secondary"></i></div>
								<div class="col-11 col-md-10"><?php echo $roomData['bed_type']?></div>
							</div>
						</li>
						<?php 
						$roomFeatureBedroomSql="select * from room_has_feature as rhf inner join feature as f on rhf.feature_id=f.id where rhf.room_id='$_GET[id]' and type='Bedroom'";
						$roomFeatureBedroomResult=mysqli_query($connection,$roomFeatureBedroomSql);
						while($roomFeatureBedroomData=mysqli_fetch_assoc($roomFeatureBedroomResult)){
						?>
						<li>
							<div class="row">
								<div class="col-1 col-md-2"><i class="<?php echo $roomFeatureBedroomData['icon']?> mr-3 text-secondary"></i></div>
								<div class="col-11 col-md-10"><?php echo $roomFeatureBedroomData['feature']?></div>
							</div>
						</li>
						<?php	
						}
						?>
                    </ul>
                </div>
                <div class="col-md-4 colFeatures">
                    <h4 class="head4">Bathroom</h4>
                       <ul class="custom">
                            <?php 
						$roomFeatureBathroomSql="select * from room_has_feature as rhf inner join feature as f on rhf.feature_id=f.id where rhf.room_id='$_GET[id]' and type='Bathroom'";
						$roomFeatureBathroomResult=mysqli_query($connection,$roomFeatureBathroomSql);
						while($roomFeatureBathroomData=mysqli_fetch_assoc($roomFeatureBathroomResult)){
						?>
						<li>
							<div class="row">
								<div class="col-1 col-md-2"><i class="<?php echo $roomFeatureBathroomData['icon']?> mr-3 text-secondary"></i></div>
								<div class="col-11 col-md-10"><?php echo $roomFeatureBathroomData['feature']?></div>
							</div>
						</li>
						<?php	
						}
						?>
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
				<div class="col-md-4 colFeatures">
                    <h4 class="head4">Connectivity</h4>
                    <ul class="custom">
                        <?php 
						$roomAmenityConnectivitySql="select * from room_has_amenity as rha inner join amenity as a on rha.amenity_id=a.id where rha.room_id='$_GET[id]' and type='Connectivity'";
						$roomAmenityConnectivityResult=mysqli_query($connection,$roomAmenityConnectivitySql);
						while($roomAmenityConnectivityData=mysqli_fetch_assoc($roomAmenityConnectivityResult)){
						?>
						<li>
							<div class="row">
								<div class="col-1 col-md-2"><i class="<?php echo $roomAmenityConnectivityData['icon']?> mr-3 text-secondary"></i></div>
								<div class="col-11 col-md-10"><?php echo $roomAmenityConnectivityData['amenity']?></div>
							</div>
						</li>
						<?php	
						}
						?>
                    </ul>
                </div>
                <div class="col-md-4 colFeatures">
                    <h4 class="head4">Services</h4>
                    <ul class="custom">
                        <?php 
						$roomAmenityServicesSql="select * from room_has_amenity as rha inner join amenity as a on rha.amenity_id=a.id where rha.room_id='$_GET[id]' and type='Services'";
						$roomAmenityServicesResult=mysqli_query($connection,$roomAmenityServicesSql);
						while($roomAmenityServicesData=mysqli_fetch_assoc($roomAmenityServicesResult)){
						?>
						<li>
							<div class="row">
								<div class="col-1 col-md-2"><i class="<?php echo $roomAmenityServicesData['icon']?> mr-3 text-secondary"></i></div>
								<div class="col-11 col-md-10"><?php echo $roomAmenityServicesData['amenity']?></div>
							</div>
						</li>
						<?php	
						}
						?>
                    </ul>
                </div>
                <div class="col-md-4 colFeatures">
                    <h4 class="head4">Extras</h4>
                    <ul class="custom">
                        <?php 
						$roomAmenityExtrasSql="select * from room_has_amenity as rha inner join amenity as a on rha.amenity_id=a.id where rha.room_id='$_GET[id]' and type='Extras'";
						$roomAmenityExtrasResult=mysqli_query($connection,$roomAmenityExtrasSql);
						while($roomAmenityExtrasData=mysqli_fetch_assoc($roomAmenityExtrasResult)){
						?>
						<li>
							<div class="row">
								<div class="col-1 col-md-2"><i class="<?php echo $roomAmenityExtrasData['icon']?> mr-3 text-secondary"></i></div>
								<div class="col-11 col-md-10"><?php echo $roomAmenityExtrasData['amenity']?></div>
							</div>
						</li>
						<?php
						}
						?>	
                    </ul>
                </div>
			</div>		
		</section>

</div>



<?php
include_once "footerHTML.php";
?>