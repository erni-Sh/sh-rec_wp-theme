"use strict";

(function($) { 

	//Tooltip

	$(document).ready(function() {
		$(".tipped").tipper();
	});	
		 
  $(".post-block-slider").each((i, e) =>{
		$(e).owlCarousel({
			navigation : false,
			pagination: true,
			transitionStyle : "fadeUp",
			autoPlay: 4500,
			slideSpeed : 700,
			singleItem: true
	  });
  })

  })(jQuery); 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 





	