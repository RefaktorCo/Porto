<li class="span3 isotope-item <?php print strip_tags(render($content['field_team_category'])); ?>">
	<div class="team-item thumbnail">
		<a href="#" class="thumb-info team">
			<?php print render ($content['field_image']); ?>
			<span class="thumb-info-title">
				<span class="thumb-info-inner"><?php print $title; ?></span>
				<span class="thumb-info-type"><?php print strip_tags(render($content['field_team_category'])); ?></span>
			</span>
		</a>
		<span class="thumb-info-caption">
			<p><?php print render ($content['field_team_bio']); ?></p>
			<span class="thumb-info-social-icons">
				<a rel="tooltip" data-placement="bottom" target="_blank" href="<?php print render ($content['field_facebook_link']); ?>" data-original-title="Facebook"><i class="icon-facebook"></i><span>Facebook</span></a>
				<a rel="tooltip" data-placement="bottom" href="<?php print render ($content['field_twitter_link']); ?>" data-original-title="Twitter"><i class="icon-twitter"></i><span>Twitter</span></a>
				<a rel="tooltip" data-placement="bottom" href="<?php print render ($content['field_linkedin_link']); ?>" data-original-title="Linkedin"><i class="icon-linkedin"></i><span>Linkedin</span></a>
			</span>
		</span>
	</div>
</li>
