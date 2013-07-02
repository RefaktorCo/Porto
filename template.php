<?php 
/**
 * Define $root global variable.
 */
global $theme_root, $parent_root, $theme_path;
$theme_root = base_path() . path_to_theme();
$parent_root = base_path() . drupal_get_path('theme', 'porto');

/**
 * Assign theme hook suggestions for custom templates.
 */  
function porto_preprocess_page(&$vars, $hook) {
  if (isset($vars['node'])) {
    $suggest = "page__node__{$vars['node']->type}";
    $vars['theme_hook_suggestions'][] = $suggest;
  }
  
  $status = drupal_get_http_header("status");  
  if($status == "404 Not Found") {      
    $vars['theme_hook_suggestions'][] = 'page__404';
  }
  
  if (arg(0) == 'taxonomy' && arg(1) == 'term' ){
    $term = taxonomy_term_load(arg(2));
    $vars['theme_hook_suggestions'][] = 'page--taxonomy--vocabulary--' . $term->vid;
  }
}

/**
 * Define some variables for use in theme templates.
 */
function porto_process_page(&$variables) {	
  // Assign site name and slogan toggle theme settings to variables.
  $variables['disable_site_name']   = theme_get_setting('toggle_name') ? FALSE : TRUE;
  $variables['disable_site_slogan'] = theme_get_setting('toggle_slogan') ? FALSE : TRUE;
   // Assign site name/slogan defaults if there is no value.
  if ($variables['disable_site_name']) {
    $variables['site_name'] = filter_xss_admin(variable_get('site_name', 'Drupal'));
  }
  if ($variables['disable_site_slogan']) {
    $variables['site_slogan'] = filter_xss_admin(variable_get('site_slogan', ''));
  }
}	

/* Assign top level menu list items an ascending class of menu_$number  */
function porto_menu_link(array $variables) {
  unset($variables['element']['#attributes']['class']);
  $element = $variables['element'];
  static $item_id = 0;
  $menu_name = $element['#original_link']['menu_name'];
  
  // set the global depth variable
  global $depth;
  $depth = $element['#original_link']['depth'];

  if ( ($element['#below']) && ($depth == "1") ) {
    $element['#attributes']['class'][] = 'dropdown';
  }
  
  if ( ($element['#below']) && ($depth == "2") ) {
    $element['#attributes']['class'][] = 'dropdown-submenu';
  }
  
  $sub_menu = $element['#below'] ? drupal_render($element['#below']) : '';
  $output = l($element['#title'], $element['#href'], $element['#localized_options']);
  // if link class is active, make li class as active too
  if(strpos($output,"active")>0){
    $element['#attributes']['class'][] = "active";
  }

  return '<li' . drupal_attributes($element['#attributes']) . '>' . $output . $sub_menu . '</li>';
}


function porto_menu_tree($variables){
  // use global depth variable to define ul class
    global $depth;
    $class = ($depth == 1) ? 'nav nav-pills nav-main' : 'dropdown-menu';
    return '<ul class="'.$class.'">' . $variables['tree'] . '</ul>';
}



/* Allow sub-menu items to be displayed */
function porto_links($variables) {
  if (array_key_exists('id', $variables['attributes']) && $variables['attributes']['id'] == 'main-menu-links') {
  	$pid = variable_get('menu_main_links_source', 'main-menu');
	$tree = menu_tree($pid);
	return drupal_render($tree);
  }
  return theme_links($variables);
}

/**
 * Put Breadcrumbs in a ul li structure and add descending z-index style to each <a href> tag.
 */
function porto_breadcrumb($variables) {
 $breadcrumb = $variables['breadcrumb'];
 $title = drupal_get_title();
 $crumbs = '';
 
 if (!empty($breadcrumb)) {
   $crumbs = '<ul class="breadcrumb">';
   foreach($breadcrumb as $value) {
     $crumbs .= '<li>'.$value.' <span class="divider">/</span></li> ';
   }
   $crumbs .= '<li class="active">'. $title.'</li>';
   $crumbs .= '</ul>';
    
 }
 return $crumbs;
}

/**
 * Preprocess variables for the username.
 */
function porto_preprocess_username(&$vars) {
  global $theme_key;
  $theme_name = $theme_key;
  
  // Add rel=author for SEO and supporting search engines
  if (isset($vars['link_path'])) {
    $vars['link_attributes']['rel'][] = 'author';
  }
  else {
    $vars['attributes_array']['rel'][] = 'author';
  }
}

/**
 * Add a comma delimiter between several field types.
 */
function porto_field($variables) {
 
  $output = '';
 
  // Render the label, if it's not hidden.
  if (!$variables['label_hidden']) {
    $output .= '<div class="field-label"' . $variables['title_attributes'] . '>' . $variables['label'] . ':&nbsp;</div>';  
  }
       
  else {
    $output .= '<div class="field-items"' . $variables['content_attributes'] . '>';
    // Default rendering taken from theme_field().
    foreach ($variables['items'] as $delta => $item) {
      $classes = 'field-item ' . ($delta % 2 ? 'odd' : 'even');
      $output .= '<div class="' . $classes . '"' . $variables['item_attributes'][$delta] . '>' . drupal_render($item) . '</div>';
    }
    $output .= '</div>';
    // Render the top-level DIV.
    $output = '<div class="' . $variables['classes'] . '"' . $variables['attributes'] . '>' . $output . '</div>';
  }
  
  // Render the top-level DIV.
  return $output;
}

/**
 * User CSS function. Separate from porto_preprocess_html so function can be called directly before </head> tag.
 */
function porto_user_css() {
  echo "<!-- User defined CSS -->";
  echo "<style type='text/css'>";
  echo theme_get_setting('user_css');
  echo "</style>";
  echo "<!-- End user defined CSS -->";	
}

/**
 * Add various META tags to HTML head..
 */
function porto_preprocess_html(&$vars){
  global $parent_root;
  
  $viewport = array(
    '#type' => 'html_tag',
    '#tag' => 'meta',
    '#attributes' => array(
      'name' => 'viewport',
      'content' =>  'width=device-width, initial-scale=1, maximum-scale=1',
    )
  );
   
  drupal_add_html_head( $viewport, 'viewport');
  
}

?>