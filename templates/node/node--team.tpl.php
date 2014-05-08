<div class="col-md-4">

		<?php print render ($content['field_image']); ?>

	</div>

	<div class="col-md-8">

		<h2 class="shorter"><?php print $title; ?></h2>
		<h4><?php print str_replace('-', ' ', strip_tags(render($content['field_team_category']))); ?></h4>

		<span class="thumb-info-social-icons">
			
			  <?php if ( render ($content['field_facebook_link']) ): ?>
				<a rel="tooltip" data-placement="bottom" target="_blank" href="<?php print render ($content['field_facebook_link']); ?>" data-original-title="Facebook"><i class="icon-facebook"></i><span>Facebook</span></a>
				<?php endif; ?>
				
				<?php if ( render ($content['field_twitter_link']) ): ?>
				<a rel="tooltip" data-placement="bottom" href="<?php print render ($content['field_twitter_link']); ?>" data-original-title="Twitter"><i class="icon-twitter"></i><span>Twitter</span></a>
				<?php endif; ?>
				
				<?php if ( render ($content['field_linkedin_link']) ): ?>
				<a rel="tooltip" data-placement="bottom" href="<?php print render ($content['field_linkedin_link']); ?>" data-original-title="Linkedin"><i class="icon-linkedin"></i><span>Linkedin</span></a>
				<?php endif; ?>
				
			</span>

		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur pellentesque neque eget diam posuere porta. Quisque ut nulla at nunc <a href="#">vehicula</a> lacinia. Proin adipiscing porta tellus, ut feugiat nibh adipiscing sit amet. In eu justo a felis faucibus ornare vel id metus. Vestibulum ante ipsum primis in faucibus.</p>

		<ul class="list icons list-unstyled">
			<li><i class="icon icon-check"></i> Fusce sit amet orci quis arcu vestibulum vestibulum sed ut felis.</li>
			<li><i class="icon icon-check"></i> Phasellus in risus quis lectus iaculis vulputate id quis nisl.</li>
			<li><i class="icon icon-check"></i> Iaculis vulputate id quis nisl.</li>
		</ul>

	</div>
</div>

<hr class="tall" />