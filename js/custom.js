/* Add here all your JS customizations */
jQuery(document).ready(function ($) {

$("a[rel=tooltip]").tooltip();

$("section.toggle label").prepend($("<i />").addClass("icon-plus"));
		$("section.toggle label").prepend($("<i />").addClass("icon-minus"));

		if ($("html").hasClass("ie8")) {

			$("section.toggle input").click(function() {
				$(this).parent().toggleClass("active");
			});

		}

$(".fancybox").each(function() {

			var el = $(this);

			var config, defaults = {}
			if(el.data("plugin-options"))
				config = $.extend({}, defaults, options, el.data("plugin-options"));		
			
			$(this).fancybox(config);

		});
		
		$('ul.flickr-feed').jflickrfeed({
			limit: 6,
			qstrings: {
				id: '93691989@N03'
			},
			itemTemplate: '<li><a rel="flickr" href="{{image_b}}" class="fancybox"><span class="thumbnail"><img alt="{{title}}" src="{{image_s}}" /></span></a></li>'
	  });

		$(".fancybox[rel=flickr]").fancybox();
	
  $("#search-block-form .form-actions").addClass("btn-primary");

if($("body").hasClass("boxed"))
			return false;

		var headerHeight = $("body > header").height();
		var logo = $("header .logo img");
		var $this = this;
		var logoSmallHeight = 50;

		$this.checkStickyMenu = function() {

			if($(window).scrollTop() > headerHeight + logoSmallHeight && $(window).width() > 768) {

				if($("body").hasClass("sticky-menu-active"))
					return false;

				$("body").addClass("sticky-menu-active");
				logo
					.height(logoSmallHeight)
					.css("width", "auto");

			} else {

				$("body").removeClass("sticky-menu-active");
				logo
					.css("height", "auto")
					.css("width", "auto");

			}

		}

		$(window).on("scroll", function() {

			$this.checkStickyMenu();

		});

		$(window).on("resize", function() {

			$this.checkStickyMenu();

		});

		$this.checkStickyMenu();

		// Anchors Position
		$("a[data-hash]").on("click", function(e) {

			e.preventDefault();
			var target = $(this.hash);

			if(target.get(0))
				$("html,body").animate({scrollTop: target.offset().top - (150)}, 300);

			return false;

		});

  $('.post-image .flexslider').flexslider({
    slideshow: false,  
    animation: "slide"
  });
  
  $('.testimonials .flexslider').flexslider({
    slideshow: false,  
    animation: "slide",
    controlNav: false
  }); 
  
  $('.portfolio-wrap .flexslider').flexslider({
    slideshow: false,  
    animation: "slide"
  });
  
  $('.recent-posts .flexslider').flexslider({
    animation: "slide",
    slideshow: false, 
    animationLoop: false,
    directionNav: false,
    itemWidth: 300,
    itemMargin: 0
  });
  
  $('.elements-slider .flexslider').flexslider({
    animation: "slide",
    slideshow: false, 
    animationLoop: false,
    controlNav: false,
    maxVisibleItems: 1
  });
    
  $('.client-carousel .flexslider').flexslider({
    animation: "slide",
    animationLoop: false,
    directionNav: false,
    itemWidth: 200,
    itemMargin: 0
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