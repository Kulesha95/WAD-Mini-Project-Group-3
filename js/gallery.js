var i = 0;
var images = [];
var time = 3000;

//image list
images[0] = 'photos/gallery/inside1.jpg';
images[1] = 'photos/gallery/inside2.jpg';
images[2] = 'photos/gallery/inside3.jpg';
images[3] = 'photos/gallery/inside4.jpg';
images[4] = 'photos/gallery/inside5.jpg';


//change image
function changeImg(){
	document.slideauto.src = images[i];

	if(i < images.length - 1){
		i++;
	}
	else{
		i=0;
	}

	setTimeout("changeImg()", time);
}
window.onload = changeImg;