<?php
/**
 * Implements hook_form_system_theme_settings_alter()
 */
function porto_form_system_theme_settings_alter(&$form, &$form_state) {
  
  // Main settings wrapper
  $form['options'] = array(
    '#type' => 'vertical_tabs',
    '#default_tab' => 'defaults',
    '#weight' => '-10',
    '#attached' => array(
      'css' => array(drupal_get_path('theme', 'porto') . '/css/theme-settings.css'),
    ),
  );
  
  // General
  $form['options']['general'] = array(
    '#type' => 'fieldset',
    '#title' => t('General'),
  );
          
       
    // Breadcrumbs
    $form['options']['general']['breadcrumbs'] = array(
      '#type' => 'checkbox',
      '#title' => t('Breadcrumbs'),
      '#default_value' => theme_get_setting('breadcrumbs'),
    );
    
    // Blog Image
    $form['options']['general']['blog_image'] = array(
      '#type' => 'select',
      '#title' => t('Blog View Image Size'),
      '#default_value' => theme_get_setting('blog_image'),
      '#options' => array(
        'full' => t('Full (default)'),
        'medium' => t('Medium'),
      ),
    );
    
     // Custom Background Color
      $form['options']['general']['skin_color'] =array(
        '#type' => 'jquery_colorpicker',
		    '#title' => t('Color Scheme'),
		    '#default_value' => theme_get_setting('skin_color'),
      ); 
    
    
  // Layout
  $form['options']['layout'] = array(
    '#type' => 'fieldset',
    '#title' => t('Layout'),
  );  
  
    // Site Layout
    $form['options']['layout']['site_layout'] = array(
      '#type' => 'select',
      '#title' => 'Body Layout',
      '#default_value' => theme_get_setting('site_layout'),
      '#options' => array(
        'wide' => t('Wide (default)'),
        'boxed' => t('Boxed'),
      ),
    );
    
  //Background
    $form['options']['layout']['background'] = array(
      '#type' => 'fieldset',
      '#title' => '<h3 class="options_heading">Background</h3>',
      '#states' => array (
          'visible' => array(
            'select[name=site_layout]' => array('value' => 'boxed')
          )
        )
    );
    
    // Body Background 
    $form['options']['layout']['background']['body_background'] = array(
      '#type' => 'select',
      '#title' => 'Body Background',
      '#default_value' => theme_get_setting('body_background'),
      '#options' => array(
        'porto_backgrounds' => t('Background Image (default)'),
        'custom_background_color' => t('Background Color'),
      ),
    );
    
    // porto Background Choices
    $form['options']['layout']['background']['background_select'] = array(
      '#type' => 'radios',
      '#title' => 'Select a background pattern:',
      '#default_value' => theme_get_setting('background_select'),
      '#options' => array(
        'az_subtle' => 'item',
        'blizzard' => 'item',
        'bright_squares' => 'item',
        'denim' => 'item',
        'fancy_deboss' => 'item',
        'gray_jean' => 'item',
        'honey_im_subtle' => 'item',
        'linen' => 'item',
        'pw_maze_white' => 'item',
        'random_grey_variations' => 'item',
        'skin_side_up' => 'item',
        'stitched_wool' => 'item',
        'straws' => 'item',
        'subtle_grunge' => 'item',
        'textured_stripes' => 'item',
        'wild_oliva' => 'item',
        'worn_dots' => 'item',
      ),
      '#states' => array (
          'visible' => array(
            'select[name=body_background]' => array('value' => 'porto_backgrounds')
          )
        )
      );  
    
      // Custom Background Color
      $form['options']['layout']['background']['body_background_color'] =array(
        '#type' => 'jquery_colorpicker',
		    '#title' => t('Body Background Color'),
		    '#default_value' => theme_get_setting('body_background_color'),
	      '#states' => array (
	        'visible' => array(
	          'select[name=body_background]' => array('value' => 'custom_background_color')
	        )
        )
      );    
  
        
  // Twitter
  $form['options']['twitter'] = array(
    '#type' => 'fieldset',
    '#title' => t('Twitter'),
  );    
  
     // Twitter App Consumer Key
    $form['options']['twitter']['twitter_app_consumer_key'] =array(
      '#type' => 'textfield',
      '#title' => 'Twitter App Consumer Key',
      '#default_value' => theme_get_setting('twitter_app_consumer_key'),
      '#states' => array (
        'invisible' => array(
          'input[name="enable_twitter_feed"]' => array('checked' => FALSE)
        )
      )
    );
    
    // Twitter App Consumer Secret
    $form['options']['twitter']['twitter_app_consumer_secret'] =array(
      '#type' => 'textfield',
      '#title' => 'Twitter App Consumer Secret',
      '#default_value' => theme_get_setting('twitter_app_consumer_secret'),
      '#states' => array (
        'invisible' => array(
          'input[name="enable_twitter_feed"]' => array('checked' => FALSE)
        )
      )
    );
    
    // Twitter App Access Token
    $form['options']['twitter']['twitter_app_access_token'] =array(
      '#type' => 'textfield',
      '#title' => 'Twitter App Access Token',
      '#default_value' => theme_get_setting('twitter_app_access_token'),
      '#states' => array (
        'invisible' => array(
          'input[name="enable_twitter_feed"]' => array('checked' => FALSE)
        )
      )
    );
    
    // Twitter App Access Token Secret
    $form['options']['twitter']['twitter_app_access_secret'] =array(
      '#type' => 'textfield',
      '#title' => 'Twitter App Access Token Secret',
      '#default_value' => theme_get_setting('twitter_app_access_secret'),
      '#states' => array (
        'invisible' => array(
          'input[name="enable_twitter_feed"]' => array('checked' => FALSE)
        )
      )
    );
    
}

?>