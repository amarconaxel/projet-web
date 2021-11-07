/**
 * 
 */
 
var index = 0;
carouselImages();

function carouselImages() {
  	var i;
  	var images = document.getElementsByClassName("images-carousel");
  	for (i = 0; i < images.length; i++) {
    	images[i].style.display = "none";  
  	}
  	index++;
  	if (index > images.length) {index = 1}    

  	images[index-1].style.display = "block";  
  	setTimeout(carouselImages, 2000); // Change image every 2 seconds
}