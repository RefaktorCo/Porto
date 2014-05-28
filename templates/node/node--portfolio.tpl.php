<div class="row portfolio-wrap">
	<div class="col-md-4">
	  <div class="owl-carousel" data-plugin-options='{"items": 1, "autoHeight": true}'>
	   
	      <?php print render ($content['field_image']); ?>
	    
	  </div>  
	</div>
	<div class="col-md-8">
	<?php
	  // Hide comments, tags, and links now so that we can render them later.
	  hide($content['field_portfolio_slider']);
	  hide($content['field_image']);
	  hide($content['links']);
	  hide($content['field_portfolio_category']);
	  print render($content);
  ?>
	</div>
</div>