/* Add here all your JS customizations */
jQuery(document).ready(function ($) {

  $('.portfolio-wrap .flexslider').flexslider({
    slideshow: false,  
    animation: "slide"
  });
  
  $('.client-carousel .flexslider').flexslider({
    animation: "slide",
    animationLoop: false,
    directionNav: false,
    itemWidth: 200,
    itemMargin: 5
  });

  $('li.dropdown a').append('<i class="icon-angle-down"></i>');
  
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
	
	function cloud() {
		$(".cloud").animate( {"top": "+=20px"}, 3000, "linear", cloud )
		$(".cloud").animate( {"top": "-=20px"}, 3000, "linear", cloud );	
	}
	
	cloud();
	
	function runIt() {
      $('#div').show("slow")
               .animate({"marginLeft":"300px"},8000)
               .animate({"marginLeft":"0px"},8000)
               .hide("slow", runIt);
   }

   runIt();
  
  $("ul.sort-source").each(function() {

			var source = $(this);
			var destination = $("ul.sort-destination[data-sort-id=" + $(this).attr("data-sort-id") + "]");

			if(destination.get(0)) {

				var minParagraphHeight = 0;
				var paragraphs = $("span.thumb-info-caption p", destination);

				paragraphs.each(function() {
					if($(this).height() > minParagraphHeight)
						minParagraphHeight = $(this).height();
				});

				paragraphs.height(minParagraphHeight);

				$(window).load(function() {

					destination.isotope({
						itemSelector: "li",
						layoutMode : "fitRows"
					});

					source.find("a").click(function(e) {

						e.preventDefault();

						var $this = $(this);

						source.find("li.active").removeClass("active");
						$(this).parent().addClass("active");

						destination.isotope({
							filter: $this.parent().attr("data-option-value")
						});

						return false;

					});

				});

			}

		});  			
});