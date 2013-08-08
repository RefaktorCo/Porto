jQuery(document).ready(function ($) {
  // toTop
	$.scrollToTop();
	
	// Browser Selector
	$.browserSelector();
	
	// Mobile Menu
	$('header .region-header-menu').mobileMenu();
	
	// Temporary Menu fix for last parent item with children
	$("nav .content ul:first").removeClass("dropdown-menu");
	$("nav .content ul:first").addClass("nav nav-pills nav-main");
		
	// Add Button Class
	$(".contact-form .form-actions input[type='submit']").addClass("btn btn-primary btn-large");
	$("#search-block-form .form-actions").addClass("btn-primary");
  $("#search-block-form--2 .form-actions").addClass("btn-primary");
  $(".comment-form .form-actions input[type='submit']").addClass("btn-primary btn-large");
  
  $(".comment-form .form-type-textfield").addClass("span4");
  
  $(".contact-form .form-item-name").addClass("span3");
  $(".contact-form .form-item-mail").addClass("span3");
  $(".contact-form .form-item-subject").addClass("span6");
  
	
	// Tooltip
	$("a[rel=tooltip]").tooltip();
	
	// prettyPhoto
	$(window).load(function() {
	  $("a[rel^='flickr']").prettyPhoto();
  }); 
	
	// Post slider
  $('.post-image .flexslider').flexslider({
    slideshow: false,  
    animation: "slide"
  });
  
  // Testimonials slider
  $('.testimonials .flexslider').flexslider({
    slideshow: false,  
    animation: "slide",
    controlNav: false
  }); 
  
  // Portfolio slider
  $('.portfolio-wrap .flexslider').flexslider({
    slideshow: false,  
    animation: "slide"
  });
  
  // Recent posts block slider
  $('.recent-posts .flexslider').flexslider({
    animation: "slide",
    slideshow: false, 
    animationLoop: false,
    directionNav: false,
    itemWidth: 300,
    itemMargin: 0
  });
  
  // Elements page slider
  $('.elements-slider .flexslider').flexslider({
    animation: "slide",
    slideshow: false, 
    animationLoop: false,
    controlNav: false,
    maxVisibleItems: 1
  });
  
  // Client slider
  $('.client-carousel .flexslider').flexslider({
    animation: "slide",
    animationLoop: false,
    directionNav: false,
    itemWidth: 200,
    itemMargin: 0
  });
  
  // Client slider
  $('.latest-projects .flexslider').flexslider({
    controlNav: false, 
    slideshow: false, 
    animationLoop: true, 
    animation: "slide", 
   
  });
	
	// Dropdown arrow for menu
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
	
	function lightbox() {

		// Internationalization of Lightbox
		$.extend(true, $.magnificPopup.defaults, {
			tClose: 'Close (Esc)', // Alt text on close button
			tLoading: 'Loading...', // Text that is displayed during loading. Can contain %curr% and %total% keys
			gallery: {
				tPrev: 'Previous (Left arrow key)', // Alt text on left arrow
				tNext: 'Next (Right arrow key)', // Alt text on right arrow
				tCounter: '%curr% of %total%' // Markup for "1 of 7" counter
			},
			image: {
				tError: '<a href="%url%">The image</a> could not be loaded.' // Error message when image could not be loaded
			},
			ajax: {
				tError: '<a href="%url%">The content</a> could not be loaded.' // Error message when ajax request failed
			}
		});

		$(".lightbox").each(function() {

			var el = $(this);

			var config, defaults = {}
			if(el.data("plugin-options"))
				config = $.extend({}, defaults, el.data("plugin-options"));

			$(this).magnificPopup(config);

		});

	}
	
	lightbox();
	
	function toggle() {

		var $this = this;
			previewParClosedHeight = 25;

		$("section.toggle > label").prepend($("<i />").addClass("icon-plus"));
		$("section.toggle > label").prepend($("<i />").addClass("icon-minus"));
		$("section.toggle.active > p").addClass("preview-active");
		$("section.toggle.active > div.toggle-content").slideDown(350, function() {});

		$("section.toggle > label").click(function(e) {

			var parentSection = $(this).parent(),
				parentWrapper = $(this).parents("div.toogle"),
				previewPar = false,
				isAccordion = parentWrapper.hasClass("toogle-accordion");

			if(isAccordion && typeof(e.originalEvent) != "undefined") {
				parentWrapper.find("section.toggle.active > label").trigger("click");
			}

			parentSection.toggleClass("active");

			// Preview Paragraph
			if(parentSection.find("> p").get(0)) {

				previewPar = parentSection.find("> p");
				var previewParCurrentHeight = previewPar.css("height");
				previewPar.css("height", "auto");
				var previewParAnimateHeight = previewPar.css("height");
				previewPar.css("height", previewParCurrentHeight);

			}

			// Content
			var toggleContent = parentSection.find("> div.toggle-content");

			if(parentSection.hasClass("active")) {

				$(previewPar).animate({
					height: previewParAnimateHeight
				}, 350, function() {
					$(this).addClass("preview-active");
				});

				toggleContent.slideDown(350, function() {});

			} else {

				$(previewPar).animate({
					height: previewParClosedHeight
				}, 350, function() {
					$(this).removeClass("preview-active");
				});

				toggleContent.slideUp(350, function() {});

			}

		});

	}
	
	toggle();
	
	// Cloud Animation
	function cloud() {
		$(".cloud").animate( {"top": "+=20px"}, 3000, "linear", cloud )
		$(".cloud").animate( {"top": "-=20px"}, 3000, "linear", cloud );	
	}
	cloud();
	
	// Isotope filters	
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