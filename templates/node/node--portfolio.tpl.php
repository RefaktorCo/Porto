<div class="row portfolio-wrap">
	<div class="col-md-4">
	  <div class="owl-carousel" data-plugin-options='{"items": 1, "autoHeight": true}'>
	    <?php print render ($content['field_image']); ?>
	  </div>  
	</div>
	<div class="col-md-8">
		<div class="portfolio-info">
			<div class="row">
				<div class="col-md-12 center">
					<ul>
						<li>
							<i class="fa fa-calendar"></i> <?php print format_date($node->created, 'custom', 'd M, Y'); ?>
						</li>
						<li>
							<i class="fa fa-tags"></i> <?php print render($content['field_portfolio_category']); ?>
						</li>
					</ul>
				</div>
			</div>
		</div>
	
	<?php if (render($content['field_portfolio_description'])): ?>
	  <h4><?php print t('Project'); ?> <strong><?php print t('Description'); ?></strong></h4>	
	  <?php print render($content['field_portfolio_description']); ?>
	<?php endif; ?>  
	
	<?php if (render($content['field_portfolio_description'])): ?>
	  <a href="<?php print strip_tags(render($content['field_portfolio_link'])); ?>" class="btn btn-primary btn-icon"><i class="fa fa-external-link"></i><?php print  t('Live Preview'); ?></a> <span class="arrow hlb" data-appear-animation="rotateInUpLeft" data-appear-animation-delay="800"></span>
	<?php endif; ?>  
	
	<ul class="portfolio-details">
	  <?php if (render($content['field_portfolio_skills'])): ?>
		<li>
			<p><strong><?php print t('Skills:'); ?></strong></p>

			<ul class="list list-skills icons list-unstyled list-inline">
			  <?php print render($content['field_portfolio_skills']); ?>
			</ul>
			
		</li>
		<?php endif; ?>  
		<?php if (render($content['field_portfolio_client'])): ?>
		<li>
			<p><strong><?php print t('Client:'); ?></strong></p>
			<?php print render($content['field_portfolio_client']); ?>
		</li>
		<?php endif; ?>  
	</ul>
		
	<?php
	  hide($content['field_portfolio_slider']);
	  hide($content['field_portfolio_skills']);
	  hide($content['field_portfolio_client']);
	  hide($content['field_portfolio_link']);
	  hide($content['field_portfolio_description']);
	  hide($content['field_image']);
	  hide($content['links']);
	  hide($content['field_portfolio_category']);
	  print render($content);
  ?>
	</div>
</div>