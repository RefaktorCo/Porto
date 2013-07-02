<?php
/**
 * @file
 * Porto's theme implementation to display a single Drupal page.
 */
?>

<div class="body">
  <header>
    <div class="container">
      <div id="branding">   
        
        <?php if (isset($page['branding'])) : ?>
		      <?php print render($page['branding']); ?>
		    <?php endif; ?>
      
	      <?php if ($logo): ?>
	        <div id="site-logo">
			      <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo">
			        <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
			      </a>
	        </div>
		    <?php endif; ?>
		    
		    <?php if ($site_name || $site_slogan): ?>
		      <div id="name-and-slogan"<?php if ($disable_site_name && $disable_site_slogan) { print ' class="hidden"'; } ?>>
		
		        <?php if ($site_name): ?>
		          <h1 id="site-name"<?php if ($disable_site_name) { print ' class="hidden"'; } ?>>
		            <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home"><span><?php print $site_name; ?></span></a>
		          </h1>
		        <?php endif; ?>
		
		        <?php if ($site_slogan): ?>
		          <div id="site-slogan"<?php if ($disable_site_slogan) { print ' class="hidden"'; } ?>>
		            <?php print $site_slogan; ?>
		          </div>
		        <?php endif; ?>
		
		      </div> <!-- /#name-and-slogan -->
		    <?php endif; ?>

      </div>  
      <!-- /branding --> 
    </div>  
	</header>
	
	<div role="main" class="main">
	
	  <?php if ($breadcrumb): ?>
	  <section class="page-top">
		  <div class="container">
				<div class="row">
					<div class="span12">
						<div id="breadcrumbs"><?php print $breadcrumb; ?> </div>	
					</div>
				</div>
				<div class="row">
					<div class="span12">
						<h2><?php print drupal_get_title(); ?></h2>
					</div>
				</div>
			</div>
		</section>
	  <?php endif; ?>
	  
	  <div id="content" class="content full">
	
	    <div class="<?php if ($page['sidebar_first']) { echo "span9";} else { echo "span12"; } ?>">
	    
	     	<?php if ($tabs = render($tabs)): ?>
			    <div id="drupal_tabs" class="tabs bigpadding">
			      <?php print render($tabs); ?>
			    </div>
			  <?php endif; ?>
	      <?php print render($page['help']); ?>
	      <?php if ($action_links): ?>
	        <ul class="action-links">
	          <?php print render($action_links); ?>
	        </ul>
	      <?php endif; ?>
	
			  <?php if (isset($page['content'])) : ?>
			    <?php print render($page['content']); ?>
			  <?php endif; ?>  
	  
	    </div>
	    
	    <?php if (isset($page['sidebar_first'])) : ?>
	    <div class="span3">
	      <?php print render($page['sidebar_first']); ?>
	    </div>
	    <?php endif; ?>
	    
	  </div>
		  
	  <div class="row">
	    <div class="span12">
	      <?php print render($page['after_content']); ?>
	    </div>
	  </div>  
		 
	  <?php print $messages; ?>
	</div>
</div>

<footer>
  <div class="container">
    <div class="row">
    
			<div class="footer-ribon">
				<span>Get in Touch</span>
			</div>
		  
	    <div class="span3">
	      <?php if (isset($page['footer_col_1'])) : ?>
			    <?php print render($page['footer_col_1']); ?>
			  <?php endif; ?>
	    </div>
	    
	    <div class="span3">
	      <?php if (isset($page['footer_col_2'])) : ?>
			    <?php print render($page['footer_col_2']); ?>
			  <?php endif; ?>
	    </div>
	    
	    <div class="span3">
	      <?php if (isset($page['footer_col_3'])) : ?>
			    <?php print render($page['footer_col_3']); ?>
			  <?php endif; ?>
	    </div>
	    
	    <div class="span3">
	      <?php if (isset($page['footer_col_4'])) : ?>
			    <?php print render($page['footer_col_4']); ?>
			  <?php endif; ?>
	    </div>
		    
		</div>  
	  <div id="secondary-footer">  
	    <div class="container">
	      <div class="row">
			    <div class="span6">
			    
					  <?php if (isset($page['footer_bottom_left'])) : ?>
					    <?php print render($page['footer_bottom_left']); ?>
					  <?php endif; ?>
			  
			    </div>
			    <div class="span6">
			    
					  <?php if (isset($page['footer_bottom_right'])) : ?>
					    <?php print render($page['footer_bottom_right']); ?>
					  <?php endif; ?>
			  
			    </div>
	      </div>  
	    </div>
	  </div>  
	</footer>
</div>