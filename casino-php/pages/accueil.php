<body>
	<div id="page">
		<div id="corps">
			<h1>Bonjour, venez depenser vos pessos </h1>
			
			<div id="carousel">
				<img class="images-carousel" src="../images/viewer/machine.jpg" alt="Machie à jouer" />

  				<img class="images-carousel" src="../images/viewer/roulette.jpg" alt="Roulette de casino" />

  				<img class="images-carousel" src="../images/viewer/roulette2.jpg"  alt="Roulette de casino" />
			</div>
		</div>
		<div id="pubs">
			<img src="../images/pub-vodka.gif" alt="Publicité Vodka" />
		</div>
	</div>
	
	<script>
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
	</script>
	
</body>
