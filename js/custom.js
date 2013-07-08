/* Add here all your JS customizations */
jQuery(document).ready(function ($) {
  $('li.dropdown a').append('<i class="icon-angle-down"></i>');
  
  $('.flexslider').flexslider({
    animation: "slide"
  })
  
// Circle Slider
	if($("#fcSlideshow").get(0)) {
		$("#fcSlideshow").flipshow();
		
		setInterval( function() {
			$("#fcSlideshow div.fc-right span:first").click();
		}, 3000);
		
	}
	
	// Nivo Slider
	if($("#nivoSlider").get(0)) {
		$("#nivoSlider").nivoSlider();
	}
	
	cloud();
	
	function cloud() {
	
		$(".cloud").animate( {"top": "+=20px"}, 3000, "linear", function() {
			$(".cloud").animate( {"top": "-=20px"}, 3000, "linear", function() {
				$this.cloud();
			});
		});
		
	}
  			
});