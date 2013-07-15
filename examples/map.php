<div id="googlemaps" class="google-map hidden-phone"></div>

<script>
	jQuery(document).ready(function ($) {

		var mapMarkers = {
			"markers": [
				{
					"latitude": "48.85661",
					"longitude":"2.35222",
					"icon": "<?php global $theme_root; echo $theme_root; ?>/img/pin.png"
				}
			]
		};

		$("#googlemaps").mapmarker({
			zoom : 16,
			center: "48.85661, 2.35222",
			dragging:1,
			mousewheel:0,
			markers: mapMarkers,
			featureType:"all",
			visibility: "on",
			elementType:"geometry"
		});
	
	});
</script>