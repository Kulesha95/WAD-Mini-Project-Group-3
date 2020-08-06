<?php
include_once "admin/config.php";
include_once "admin/function.php";
include_once "headerHTML.php";
include_once "navigation.php";

?>
<!-- Accomodation page start -->
<div class="container">
	<section id="roomDesc">
		<div class="row justify-content-center">
            <span class="justify-content-between text-color-purple mr-3 d-none d-md-block">__________________</span>
            <h2 class="heading text-color-purple">Rooms and Suites</h2>
            <span class="justify-content-between text-color-purple ml-3 d-none d-md-block">__________________</span>
        </div>
		<div style="padding-top:20px"><img src="<?php echo cmsGetSingle("accomodationImage", "accomodation"); ?>" style="width:100%;height:300px;object-fit:cover"></div>
		<article class="roomArticle">
            <div class="col-12 column-count-2">
                <p class="text-justify"><?php echo nl2br(cmsGetSingle("description", "accomodation")); ?> </p>
            </div>
        </article>
	</section>

	<section id="rooms">
		<div class="container" id="container">

	<?php 
	// get room details
	$roomSql="select * from room";
	$roomResult=mysqli_query($connection,$roomSql);
	$i=0;
	while($roomRow=mysqli_fetch_assoc($roomResult)){
		$i++;	
		if($i%2==1){
			$orderFirstDiv=1;
			$orderSecondDiv=2;
		}else{
			$orderFirstDiv=2;
			$orderSecondDiv=1;
		}
		$imageSql="select * from room_image WHERE room_id='$roomRow[id]' order by thumbnail desc limit 1";
        $imageResult=mysqli_query($connection,$imageSql);
    	$imageData=mysqli_fetch_assoc($imageResult);
	
	?>
			<!--display room details-->
        	<div class="row rowRoom">
            	<div class="col-12 col-lg-6 order-1 order-lg-<?php echo $orderFirstDiv;?>">
            		<a href="room-view.php?id=<?php echo $roomRow['id']?>" title="room-view.php?id=<?php echo $roomRow['name']?>"><img src="<?php echo $imageData['path']?>" class="img"></a>
            	</div>
            	<div class="col-12 col-lg-6 order-2 order-lg-<?php echo $orderSecondDiv;?>">
            		<div class="content">
                		<div class="name">
                			<h3><a href="room-view.php?id=<?php echo $roomRow['id']?>" title="room-view.php?id=<?php echo $roomRow['name']?>" class="stayType" ><?php echo $roomRow['name']?></a></h3></div><hr>
                		<div class="description">
                    		<ul class="descriptUL">
                        		<li><b>Room Size:</b>  <?php echo $roomRow['size']?> sqm.</li>
                        		<li><b>View:</b>   <?php echo $roomRow['view']?></li>
                        		<li><b>Ideal For:</b>   <?php echo $roomRow['ideal_for']?></li>
                        		<li><b>Bed Type(s):</b>   <?php echo $roomRow['bed_type']?></li>
                        		<li><b>Inter-connecting Rooms:</b>   <?php echo $roomRow['inter_connections']?></li>
                    		</ul>
               			</div>
               			<div class="button">
                        	<a class="btn btnRoom" href="room-view.php?id=<?php echo $roomRow['id']?>" title="room-view.php?id=<?php echo $roomRow['name']?>">View</a>
                    	</div>
               		</div>
           		</div>
       		</div>
       		<br><br>
		<?php } ?>

		</div>
	</section>
</div>
<!-- Accomodation page end -->
<?php
include_once "footerHTML.php";
?>