<?php
/**
 * @file
 * Porto's theme implementation to display a single Drupal page.
 */
?>

<div class="body">
  <header id="header">
    <div class="container">

      <?php if (isset($page['branding'])) : ?>
	      <?php print render($page['branding']); ?>
	    <?php endif; ?>
    
      <?php if ($logo): ?>
      <div class="logo">
	      <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo">
	        <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>"  width="111" height="54" data-sticky-width="82" data-sticky-height="40" />
	      </a>
      </div>
	    <?php endif; ?>
	    
	    <?php if ($site_name || $site_slogan): ?>
      <div id="name-and-slogan"<?php if ($disable_site_name && $disable_site_slogan) { print ' class="hidden"'; } ?>>

        <?php if ($site_name): ?>
          <?php if ($title): ?>
            <div id="site-name"<?php if ($disable_site_name) { print ' class="hidden"'; } ?>>
	            <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home"><span><?php print $site_name; ?></span></a>
	          </div>
          <?php else: /* Use h1 when the content title is empty */ ?>
	          <h1 id="site-name"<?php if ($disable_site_name) { print ' class="hidden"'; } ?>>
	            <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home"><span><?php print $site_name; ?></span></a>
	          </h1>
          <?php endif; ?>
        <?php endif; ?>

        <?php if ($site_slogan): ?>
          <div id="site-slogan"<?php if ( ($disable_site_slogan ) ) { print ' class="hidden"'; } if ( (!$disable_site_slogan ) AND ($disable_site_name) ) { print ' class="slogan-no-name"'; } ?>>
            <?php print $site_slogan; ?>
          </div>
        <?php endif; ?>

      </div> <!-- /#name-and-slogan -->
	    <?php endif; ?>
	    
	    <?php if (isset($page['header_search'])) : ?>
	    <div class="search">
	      <?php print render($page['header_search']); ?>
	    </div>
	    <?php endif; ?>
      
      <!-- /branding --> 
      <div id="header-top">
        <?php print render($page['header_top']); ?>
      </div>
          
    </div>
    
    <div class="navbar-collapse nav-main-collapse collapse">
		  <div class="container">  
      
        <?php print render($page['header_icons']); ?>
        
        <nav>
        <?php print render($page['header_menu']); ?>
        </nav>
        
		  </div> 
    </div>  
    
	</header>
	<!-- end header --> 
	<?php print $messages; ?>
	<div role="main" class="main">
	
	  <?php if ( ($breadcrumb) AND (!drupal_is_front_page()) ): ?>
	  <section class="page-top breadcrumb-wrap">
		  <div class="container">
		    <?php if (theme_get_setting('breadcrumbs') == '1'): ?>
				<div class="row">
					<div class="col-md-12">
						<div id="breadcrumbs"><?php print $breadcrumb; ?> </div>	
					</div>
				</div>
				<?php endif; ?>
				<div class="row">
					<div class="col-md-12">
						<h2><?php print drupal_get_title(); ?></h2>
					</div>
				</div>
			</div>
		</section>
	  <?php endif; ?>
	  
	  <?php print render($page['before_content']); ?>
	  
	  <?php print render($page['content']); ?>
 
		 
	  
	</div>

  <?php print render($page['after_content']); ?>

<footer id="footer">
  <div class="container">
    <div class="row">
    
      <?php if (theme_get_setting('ribbon') == '1'): ?>
			<div class="footer-ribbon">
				<span><?php echo t("%string", array('%string' => theme_get_setting('ribbon_text')) );?></span>
			</div>
      <?php endif; ?>
		  
	    <div class="col-md-3">
	      <?php if (isset($page['footer_1'])) : ?>
			    <?php print render($page['footer_1']); ?>
			  <?php endif; ?>
	    </div>
	    
	    <div class="col-md-3">
	      <?php if (isset($page['footer_2'])) : ?>
			    <?php print render($page['footer_2']); ?>
			  <?php endif; ?>
	    </div>
	    
	    <div class="col-md-4">
	      <?php if (isset($page['footer_3'])) : ?>
			    <?php print render($page['footer_3']); ?>
			  <?php endif; ?>
	    </div>
	    
	    <div class="col-md-2">
	      <?php if (isset($page['footer_4'])) : ?>
			    <?php print render($page['footer_4']); ?>
			  <?php endif; ?>
	    </div>
		    
		</div>  
  </div>	

	  <div class="footer-copyright">  
	    <div class="container">
	      <div class="row">
			    <div class="col-md-6">
			    
					  <?php if (isset($page['footer_bottom_left'])) : ?>
					    <?php print render($page['footer_bottom_left']); ?>
					  <?php endif; ?>
			  
			    </div>
			    <div class="col-md-6">
			    
					  <?php if (isset($page['footer_bottom_right'])) : ?>
					    <?php print render($page['footer_bottom_right']); ?>
					  <?php endif; ?>
			  
			    </div>
	      </div>  
	    </div>
	  </div>  
	</footer>
	
</div>	