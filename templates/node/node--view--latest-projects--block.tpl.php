<div id="popupProject_<?php print $node->nid; ?>" class="popup-inline-content">
	<h2><?php print $title; ?></h2>

	<div class="row">
		<div class="span6">

			<img src="<?php echo file_create_url($node->field_image['und'][0]['uri']); ?>" alt="item">

		</div>

		<div class="span6">

		
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
</div>

<li class="brands">
	<div class="span3">
		<div class="portfolio-item thumbnail">
			<a class="thumb-info lightbox" href="#popupProject_<?php print $node->nid; ?>" data-plugin-options='{"type":"inline", preloader: false}'>
				<img src="<?php echo file_create_url($node->field_image['und'][0]['uri']); ?>" alt="item">
				<span class="thumb-info-inner"><?php print $title; ?></span>
					<span class="thumb-info-type"><?php print strip_tags(render($content['field_portfolio_category'])); ?></span>
				</span>
				<span class="thumb-info-action">
					<span title="Universal" href="#" class="thumb-info-action-icon"><i class="icon-link"></i></span>
				</span>
			</a>
		</div>
	</div>
</li>