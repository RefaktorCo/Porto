<div class="home-concept">
	<div class="container">

		<div class="row center">
			<span class="sun"></span>
			<span class="cloud"></span>
			
			<div class="col-md-2 col-md-offset-1">
				<div class="process-image" data-appear-animation="bounceIn">
					<?php print render($content['field_circle_1_image']); ?>
					<strong><?php print strip_tags(render($content['field_circle_1_caption'])); ?></strong>
				</div>
			</div>
			
			<div class="col-md-2">
				<div class="process-image" data-appear-animation="bounceIn" data-appear-animation-delay="200">
					<?php print render($content['field_circle_2_image']); ?>
					<strong><?php print strip_tags(render($content['field_circle_2_caption'])); ?></strong>
				</div>
			</div>
			
			<div class="col-md-2">
				<div class="process-image" data-appear-animation="bounceIn" data-appear-animation-delay="400">
					<?php print render($content['field_circle_3_image']); ?>
					<strong><?php print strip_tags(render($content['field_circle_3_caption'])); ?></strong>
				</div>
			</div>
			
			<div class="col-md-4 col-md-offset-1">
				<div class="project-image">
					<div id="fcSlideshow" class="fc-slideshow">
						<ul class="fc-slides">
							<?php print render($content['field_circle_4_images']); ?>
						</ul>
					</div>
					<strong class="our-work"><?php print strip_tags(render($content['field_circle_4_caption'])); ?></strong>
				</div>
			</div>
		</div>

	</div>
</div>