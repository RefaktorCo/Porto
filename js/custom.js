/* Add here all your JS customizations */
jQuery(document).ready(function ($) {
  $('li.dropdown a').append('<i class="icon-angle-down"></i>');
  
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