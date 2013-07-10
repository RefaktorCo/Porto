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
      'css' => array(drupal_get_path('theme', 'expressa') . '/css/theme-settings.css'),
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
    $form['options']['layout']['blog_image'] = array(
      '#type' => 'select',
      '#title' => t('Blog View Image Size'),
      '#default_value' => theme_get_setting('blog_image'),
      '#options' => array(
        'full' => t('Full (default)'),
        'medium' => t('Medium'),
      ),
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