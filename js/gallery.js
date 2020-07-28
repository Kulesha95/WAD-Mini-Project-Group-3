var i = 0;
var images = [];
var time = 3000;

//image list
images[0] = 'img/gallery/inside1.jpg';
images[1] = 'img/gallery/inside2.jpg';
images[2] = 'img/gallery/inside3.jpg';
images[3] = 'img/gallery/inside4.jpg';
images[4] = 'img/gallery/inside5.jpg';


//change image
function changeImg(){
	// document.slideauto.src = images[i];

	if(i < images.length - 1){
		i++;
	}
	else{
		i=0;
	}

	setTimeout("changeImg()", time);
}
window.onload = changeImg;