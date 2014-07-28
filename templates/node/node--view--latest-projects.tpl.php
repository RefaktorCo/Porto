<div class="portfolio-item thumbnail">
	<a class="thumb-info lightbox" href="#popupProject_<?php print $node->nid; ?>" data-plugin-options='{"type":"inline", preloader: false}'>
	  <?php if (render($content['field_image'])): ?>
		  <img src="<?php echo file_create_url($node->field_image['und'][0]['uri']); ?>" class="img-responsive" alt="item">
		<?php endif; ?>
		<span class="thumb-info-title">
		  <span class="thumb-info-inner"><?php print $title; ?></span>
			<span class="thumb-info-type"><?php print strip_tags(render($content['field_portfolio_category'])); ?></span>
		</span>
		<span class="thumb-info-action">
			<span title="Universal" href="#" class="thumb-info-action-icon"><i class="icon icon-link"></i></span>
		</span>
	</a>
</div>