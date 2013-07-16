<div class="map-section">
	<section class="featured footer map">
		<div class="container">
			<div class="row">
				<div class="span6">
           <h2>Latest <strong>Blog</strong> Posts</h2>
					<div class="recent-posts">
						 <?php echo views_embed_view('latest_posts', 'block');?>	
					</div>
				</div>
				<div class="span6">
					<h2><strong>What</strong> Client’s Say</h2>
					<div class="row testimonials">
						<div class="flexslider flexslider-top-title unstyled">
							<ul class="slides">
								<li>
									<div class="span6">
										<blockquote class="testimonial">
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec hendrerit vehicula est, in consequat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec hendrerit vehicula est, in consequat.  Donec hendrerit vehicula est, in consequat.  Donec hendrerit vehicula est, in consequat.</p>
										</blockquote>
										<div class="testimonial-arrow-down"></div>
										<div class="testimonial-author">
											<div class="thumbnail thumbnail-small">
												<img src="<?php global $parent_root; echo $parent_root; ?>/img/clients/client-1.jpg" alt="">
											</div>
											<p><strong>John Smith</strong><span>CEO & Founder - Red Wine</span></p>
										</div>
									</div>
								</li>
								<li>
									<div class="span6">
										<blockquote class="testimonial">
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec hendrerit vehicula est, in consequat. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
										</blockquote>
										<div class="testimonial-arrow-down"></div>
										<div class="testimonial-author">
											<div class="thumbnail thumbnail-small">
												<img src="<?php global $parent_root; echo $parent_root; ?>/img/clients/client-1.jpg" alt="">
											</div>
											<p><strong>John Smith</strong><span>CEO & Founder - Crivos</span></p>
										</div>
									</div>
								</li>
							</ul>
						</div>
					</div>
				</div>	
			</div>
		</div>
	</section>
</div>